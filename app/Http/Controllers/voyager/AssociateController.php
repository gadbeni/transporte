<?php

namespace App\Http\Controllers\voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataAdded;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Associate;
use App\Models\Organization;
use App\Models\Route;

class AssociateController extends VoyagerBaseController
{
    /* PUBLIC VIEW */
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
    /* PRIVATE VIEW */
    // public function store(Request $request)
    // {
    //     $slug = $this->getSlug($request);

    //     $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

    //     // Check permission
    //     $this->authorize('add', app($dataType->model_name));

    //     // Validate fields with ajax
    //     $val = $this->validateBread($request->all(), $dataType->addRows)->validate();

    //     //--------- modificación bread -------------
    //     // paso 1: crear un objeto datatype con el modelo
    //     $data = new $dataType->model_name();
    //     // paso 2: poner el atributo personalizado
    //     $data->user_id = auth()->id();

    //     $data = $this->insertUpdateData($request, $slug, $dataType->addRows, $data);


    //     event(new BreadDataAdded($dataType, $data));

    //     if (!$request->has('_tagging')) {
    //         if (auth()->user()->can('browse', $data)) {
    //             $redirect = redirect()->route("voyager.{$dataType->slug}.index");
    //         } else {
    //             $redirect = redirect()->back();
    //         }

    //         return $redirect->with([
    //             'message'    => __('voyager::generic.successfully_added_new') . " {$dataType->getTranslatedAttribute('display_name_singular')}",
    //             'alert-type' => 'success',
    //         ]);
    //     } else {
    //         return response()->json(['success' => true, 'data' => $data]);
    //     }
    // }
}
