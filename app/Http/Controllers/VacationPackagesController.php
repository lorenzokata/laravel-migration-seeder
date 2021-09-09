<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacationPackagesController extends Controller
{
    public function vacation_packages(){

        return view('vacation_pack') ;
    }
}
