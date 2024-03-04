<?php

namespace App\Http\Controllers\voyager;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;
use Illuminate\Support\Facades\Auth;

class organizationsController extends VoyagerBaseController
{
    public function toggleActive(Organization $organization)
    {
        $user = Auth::user();
        if (!$user->hasPermission('edit_organizations')) {
            abort(403, 'No tienes Autorización');
        }
        $organization->active = !$organization->active;
        $organization->save();

        return redirect()->back();
    }
}
