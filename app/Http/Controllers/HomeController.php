<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\Vehicle;
use App\Models\Route;
use App\Models\Organization;

class HomeController extends Controller
{
    //
    public function index(){
        // Contadores
        $count = [
            'asociados' => Associate::count(),
            'vehiculos' => Vehicle::count(),
            'rutas' => Route::where('deleted_at', NULL)->count(),
        ];


        return view('welcome', compact('count'));
    }

    public function search(Request $request){
        $associate = Associate::with('vehicles')
            ->where('ci', $request->search)
            ->first();

        if (!$associate) {
            $vehicle = Vehicle::where('number_plate', $request->search)->first();
            if ($vehicle) {
                $associate = Associate::with('vehicles')
                    ->where('id', $vehicle->associate_id)
                    ->first();
            }          
        } 
        if ($associate) {
            if (!$associate->active) {
                $error = 'El asociado no se encuentra activo';
                return view('search', ['associate' => $associate, 'error' => $error]);
            }
            
        }else{
            $associate = null;
            return view('search', ['associate' => $associate]);
        }
        
        return view('search', ['associate' => $associate]);
    }
}