<?php

namespace App\Http\Controllers\voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Associate;
//use App\Http\Controllers\voyager\BD;
use Illuminate\Support\Facades\BD;

class AssociateController extends Controller
{
    //
    public function showDetails($id)
    {
        $associate = Associate::with('vehicles')->findOrFail($id);
        if (!$associate->active) {
            $error = 'El asociado no está activo';
            return view('associates.show', ['associate' => $associate, 'error' => $error]);
        }

        return view('associates.show', ['associate' => $associate]);
    }
    public function searchByCI(Request $request)
    {
        $ci = $request->input('ci');
        
        // Buscar al asociado en la base de datos
        $associate = Associate::where('ci', $ci)->first();
    
        // Verificar si se encontró un asociado
        if (!$associate) {
            $error = 'No se encontró ningún asociado con el CI proporcionado.';
            return view('welcome', ['error' => $error]);
        }
    
        // Verificar si el asociado está activo
        if (!$associate->active) {
            $error = 'El asociado no está activo';
            return view('welcome', ['associate' => $associate, 'error' => $error]);
        }
    
        // Si el asociado existe y está activo, mostrar los detalles
        return view('welcome', ['associate' => $associate]);
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
