<?php

namespace App\Http\Controllers\voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Models\Associate;

class AssociateController extends Controller
{
    //
    public function showDetails($id)
    {
        $associate = Associate::findOrFail($id);
        if (!$associate->active) {
            $error = 'El asociado no está activo';
            return view('associates.show', ['associate' => $associate, 'error' => $error]);
        }

        return view('associates.show', ['associate' => $associate]);
    }
}
