<?php

namespace App\Http\Controllers\voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Associate;
use App\Models\Organization;
use App\Models\Route;

class AssociateController extends Controller
{
    public function showDetails($id)
    {       
       
        $associate = Associate::with('vehicles')
        ->findOrFail($id);
        //Obtener la organización del asociado con las rutas asociadas
        $organization = $associate->organization()->with('routes')->first();

        //Encontrar las rutas que no están asociadas con la organización del asociado
        $routes = Route::whereDoesntHave('organizations', function ($query) use ($organization) {
            $query->where('organizations.id', $organization->id);
        })->get();

        if (!$associate->active) {
            $error = 'El asociado no se encuentra activo';
            return view('associates.show', ['associate' => $associate, 'error' => $error]);
        }
     
        // Renderizar la vista con los datos obtenidos
        return view('associates.show', compact('associate', 'organization', 'routes'));
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
