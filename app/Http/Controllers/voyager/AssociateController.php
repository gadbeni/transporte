<?php

namespace App\Http\Controllers\voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

    public function showQrCode($id)
    {
        $associate = Associate::findOrFail($id);
        // if (!$associate->active) {
        //     $error = 'El asociado no está activo';
        //     return view('associates.show', ['associate' => $associate, 'error' => $error]);
        // }

        $qr = QrCode::size(300)->generate(route('associates.showDetails', $associate->id));
        return view('associates.qr', ['associate' => $associate, 'qr' => $qr]);
    }

}
