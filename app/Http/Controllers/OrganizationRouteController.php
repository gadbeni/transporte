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
        $organization = Organization::findOrFail($id);
        $routes = Route::all();

        return view('organizations.routes', compact('organization', 'routes'));
    }
}
