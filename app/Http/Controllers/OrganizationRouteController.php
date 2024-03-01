<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Route;

class OrganizationRouteController extends Controller
{
    //
    public function edit($id)
    {
        $organization = Organization::with('routes')->findOrFail($id);
        $routes = Route::whereDoesntHave('organizations', function ($query) use ($id) {
            $query->where('organizations.id', $id);
        })->get();

        return view('organizations.routes', compact('organization', 'routes'));
    }

    public function update(Request $request, $id)
    {
        $organization = Organization::findOrFail($id);

        // Validar los datos de la solicitud...
        $request->validate([
            'routes' => 'required',
            'shudown_resolution' => 'nullable|file',
        ]);

        // Si hay un archivo, guárdalo y obtén su nombre
        $fileName = null;
        if ($request->hasFile('shudown_resolution')) {
            $fileName = $request->file('shudown_resolution')->store('files');
        }

        // Adjuntar la ruta y añadir el archivo a la tabla pivot
        $organization->routes()->attach($request->routes, ['shudown_resolution' => $fileName]);

        return redirect()->route('organizations.routes.edit', $organization);
    }

    // Descargar el archivo de resolución
    public function download($organizationId, $routeId)
    {
        $organization = Organization::findOrFail($organizationId);
        $file = str_replace('/', DIRECTORY_SEPARATOR, $organization->routes()->where('route_id', $routeId)->first()->pivot->shudown_resolution);

        return response()->file(public_path('storage/' . $file));
    }
}
