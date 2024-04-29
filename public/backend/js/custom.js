$(function () {
    // CSRF token
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    // Delete using SweetAlert2
    $("body").on("click", ".delete-btn", function (event) {
        event.preventDefault();
        const deleteForm = $(this).closest("form");

        Swal.fire({
            title: "Are you sure?",
            text: "You will not be able to recover this item!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#62908c",
            cancelButtonColor: "#e7607b",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                deleteForm.submit();
            }
        });
    });

    //text editor
    if ($(".tinymce").length > 0) {
        tinymce.init({
            selector: ".tinymce",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table emoticons template paste help",
            ],
            toolbar:
                "undo redo | styleselect | bold italic | removeformat | alignleft aligncenter alignright alignjustify | " +
                "bullist numlist outdent indent | link image | print preview media fullscreen | " +
                "forecolor backcolor emoticons | help",
            menu: {
                favs: {
                    title: "My Favorites",
                    items: "code visualaid | searchreplace | emoticons",
                },
            },
            menubar: "favs file edit view insert format tools table help",
            content_css: "css/content.css",
        });
    }
});
// toastr
(function (c) {
    "use strict";

    function NotificationHandler(icon, text) {
        var options = {
            heading: "",
            text: text,
            position: "top-right",
            loaderBg: "rgba(0,0,0,0.2)",
            icon: icon,
            hideAfter: 3000,
            stack: 1,
            showHideTransition: "fade",
        };

        c.toast().reset("all");
        c.toast(options);
    }

    window.NotificationHandler = NotificationHandler;
})(window.jQuery);

// Disable submit button during form submission
$("#submitBtn").on("click", function () {
    var button = $(this);
    var buttonBeforeText = button.text().trim().toLowerCase();
    var buttonAfterText = "";

    switch (buttonBeforeText) {
        case "create":
            buttonAfterText = "Creating...";
            break;
        case "update":
            buttonAfterText = "Updating...";
            break;
        case "submit":
            buttonAfterText = "Submitting...";
            break;
        case "log in":
            buttonAfterText = "Logging In...";
            break;
        case "import":
            buttonAfterText = "Importing...";
            break;
        default:
            buttonAfterText = "Processing...";
            break;
    }

    button.html('<i class="fa fa-spinner fa-spin"></i> ' + buttonAfterText);
    button.prop("disabled", true);
    button.closest("form").submit();
});

var sortOrderDebounceTimer;

$("body").on("change", ".sort-order", function () {
    clearTimeout(sortOrderDebounceTimer);
    var value = $(this).val();
    var model = $(this).data("model");
    var id = $(this).data("id");

    if (value != null && value != "" && value != undefined && value >= 0) {
        sortOrderDebounceTimer = setTimeout(function () {
            $.ajax({
                url: "/3RT-admin-portal/update-sort-order",
                type: "POST",
                data: {
                    id: id,
                    model: model,
                    value: value,
                },
                success: function (response) {
                    if (response)
                        NotificationHandler(
                            "success",
                            "Sort Order updated successfully"
                        );
                    else {
                        $(this).val(0);
                        NotificationHandler("error", "Something went wrong");
                    }
                },
            });
        }, 300);
    } else {
        $(this).val(0);
        NotificationHandler(
            "warning",
            "Please enter value Greater than or Equal to zero"
        );
    }
});

var statusDebounceTimer;

$("body").on("change", ".status", function () {
    clearTimeout(statusDebounceTimer);
    var value = $(this).is(":checked") ? 1 : 0;
    var model = $(this).data("model");
    var column = $(this).data("column");
    var id = $(this).data("id");

    if (value === 0 || value === 1) {
        statusDebounceTimer = setTimeout(function () {
            $.ajax({
                url:  + "/3RT-admin-portal/update-status",
                type: "POST",
                data: {
                    id: id,
                    model: model,
                    column: column,
                    value: value,
                },
                success: function (response) {
                    if (response)
                        NotificationHandler(
                            "success",
                            "Status Updated successfully"
                        );
                    else {
                        $(this).val(value == 1 ? 0 : 1);
                        NotificationHandler("error", "Something went wrong");
                    }
                },
            });
        }, 300);
    } else {
        $(this).val(0);
        NotificationHandler("warning", "Something went wrong");
    }
});

//multiple image /video preview
$(".file-input-preview").change(function () {
    var _this = this;
    // Clear existing preview
    $($(_this).parent().find(".filePreview")).empty();
    // Get selected files
    var files = _this.files;

    // Loop through each selected file
    for (var i = 0; i < files.length; i++) {
        var file = this.files[0];
        var fileType = file["type"];
        var validImageTypes = [
            "image/gif",
            "image/jpeg",
            "image/png",
            "image/jpg",
            "image/webp",
            "image/svg+xml",
        ];
        var validVideoTypes = [
            "video/flv",
            "video/avi",
            "video/mov",
            "video/mpg",
            "video/wmv",
            "video/m4v",
            "video/3gp",
            "video/mp4",
        ];
        let is_image = (is_video = 1);
        if ($.inArray(fileType, validImageTypes) < 0) {
            is_image = 0;
        }

        if ($.inArray(fileType, validVideoTypes) < 0) {
            is_video = 0;
        }

        // Create a FileReader
        var reader = new FileReader();
        //image preview
        if (is_image) {
            reader.onload = (function (file) {
                return function (e) {
                    // Create an image element
                    var imgElement = $("<img>");
                    imgElement.attr("src", e.target.result);
                    imgElement.attr("height", 80);
                    imgElement.attr("class", "pl-1 pt-1");
                    imgElement.addClass("preview-file");

                    // Append the image to the preview container
                    $($(_this).parent().find(".filePreview")).append(
                        imgElement
                    );
                    if (fileType === "image/svg+xml") {
                        $($(_this).parent().find(".filePreview")).addClass(
                            "SVGFile"
                        );
                    } else {
                        $($(_this).parent().find(".filePreview")).removeClass(
                            "SVGFile"
                        );
                    }
                };
            })(files[i]);
        }
        //video preview
        else if (is_video) {
            reader.onload = (function (file) {
                return function (e) {
                    // Create an video element
                    var videoElement = $("<video>");
                    videoElement.attr("src", e.target.result);
                    videoElement.attr("height", 100);
                    videoElement.attr("class", "pl-1 pt-1");
                    videoElement.attr("preloads", "none");
                    videoElement.attr("controls", "");
                    videoElement.addClass("preview-file");

                    // Append the video to the preview container
                    $($(_this).parent().find(".filePreview")).append(
                        videoElement
                    );
                };
            })(files[i]);
        }

        // Read in the image / video file as a data URL
        reader.readAsDataURL(files[i]);
    }
});

//delete files in edit form
$(".deleteFile").on("click", function () {
    var _this = $(this);
    var model = $(this).data("model");
    var column = $(this).data("column");
    var id = $(this).data("id");

    Swal.fire({
        title: "Are you sure?",
        text: "You will not be able to recover this item!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3e4b5b",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/elite-admin-portal/delete-file",
                type: "post",
                data: {
                    id: id,
                    column: column,
                    model: model,
                },
                success: function (response) {
                    if (response) {
                        _this.parent().parent().html("");
                        NotificationHandler(
                            "success",
                            "File Deleted Successfully!"
                        );
                    } else {
                        NotificationHandler(
                            "error",
                            "Error while deleting File"
                        );
                    }
                },
            });
        }
    });
});
$(".select-all").on("change", function () {
    if ($(this).val() && $(this).val().includes("all")) {
        // If "Select All" is selected, select all other options
        $(this)
            .val(
                $(this)
                    .find("option")
                    .not(":disabled")
                    .not('[value="all"]')
                    .map(function () {
                        return this.value;
                    })
            )
            .trigger("change");
    }
});
