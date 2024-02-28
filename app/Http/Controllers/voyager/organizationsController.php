<?php

namespace App\Http\Controllers\voyager;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;

class organizationsController extends VoyagerBaseController
{
    public function toggleActive(Organization $organization)
    {
        $organization->active = !$organization->active;
        $organization->save();

        return redirect()->back();
    }
}
