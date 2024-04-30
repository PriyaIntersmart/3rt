@foreach (['success', 'info', 'error', 'warning'] as $type)
    @if (session($type))
        <script>
            $(function() {
                var icon = "{{ $type }}";
                var text = "{{ session($type) }}";
                NotificationHandler(icon, text);
            });
        </script>
        @php
            session()->forget($type);
        @endphp
    @endif
@endforeach
