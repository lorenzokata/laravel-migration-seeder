<?php

namespace App\Http\Controllers;
use App\VacationPackage;

use Illuminate\Http\Request;

class VacationPackagesController extends Controller
{
    public function vacation_packages(){

        $vacation_packages = VacationPackage::all();

        return view('vacation_pack', compact('vacation_packages'));
    }
}
