<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $overview = DB::table('overview')->first();
        $progess = DB::table('progess')->first();
        $sportlight = DB::table('sportlight')->take(6)->orderBy("id", "DESC")->get();
        return view('overview',['overview' => $overview, 'progess' => $progess, 'sportlight' => $sportlight]); 
    }
}
