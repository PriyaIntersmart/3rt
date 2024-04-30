<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommonFunctionController extends Controller
{
    /**
     * update sort order
     */
    public function updateSortOrder(Request $request)
    {
        $model = $request->model;
        $id = $request->id;
        $value = $request->value;
        $model = 'App\\Models\\' . $model;
        if ($id) {
            $data = $model::find(base64_decode($id));
            if ($data) {
                $data->sort_order = $value;
                if ($data->save())
                    return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * update status
     */
    public function updateStatus(Request $request)
    {
        $model = $request->model;
        $id = $request->id;
        $value = $request->value;
        $column = $request->column ?? 'status';
        $model = 'App\\Models\\' . $model;
        if ($id) {
            $data = $model::find(base64_decode($id));
            if ($data) {
                $data->$column = $value;
                if ($data->save())
                    return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
