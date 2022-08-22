<?php

namespace App\Http\Controllers;

use App\Models\Sportlight;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $data = DB::table('settings')->first();
        view()->share('setting',$data);
    }

    public function index() {
        $overview = DB::table('overview')->first();
        $progess = DB::table('progess')->first();
        $sportlight = DB::table('sportlight')
            ->where('status', 1)
            ->take(3)->orderBy("id", "DESC")->get();
//        $setting = DB::table('settings')->first();
        return view('index',['overview' => $overview, 'progess' => $progess, 'sportlight' => $sportlight]);
    }

    public function detail($id) {
        $detail = Sportlight::find($id);
        $other = DB::table('sportlight')
            ->where('status', 1)
            ->where('id', '!=', $id)
            ->take(3)->orderBy("id", "DESC")->get();
        return view('detail', ['detail' => $detail, 'other' => $other]);
    }
}
