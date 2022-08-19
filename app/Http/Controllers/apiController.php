<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menus;
use App\Models\Contents;
use App\Models\News;

class apiController extends Controller
{
    //
    public function getAlls() {
        $menus = DB::table('menus')
            ->select('id', 'name', 'description')
            ->where('menus.status', 1)
            ->orderBy('menus.m_order', 'asc')
            ->get()->toArray();
        $contents = DB::table('contents')
            ->join('menus', 'menus.id', '=','contents.id_menu')
            ->select('menus.name as m_name', 'menus.description as m_description', 'contents.description', 'contents.content', 'contents.img')
            ->where('contents.status', 1)
            ->orderBy('menus.m_order', 'asc')
            ->get();
        // concert obj -> arr
        $contents = $contents->map(function($obj){
            return (array) $obj;
        })->toArray();
        foreach ($contents as $key => $item) {
            $arr_content[$item['m_name']][$key] = $item;
        }
        foreach($arr_content as $key => $value) {
            foreach($value as $v) {
                $m_name = $v['m_name'];
                $m_description = $v['m_description'];
                $item2[] = ['img' => $v['img'], 'title' => $v['description'], 'content' => $v['content']];
            }
            $content_format[$key] = ['title' => $m_name, 'description' => $m_description, 'items' => $item2];
            $m_name = $m_description = $item2 = NULL;

        }
        $page2 = DB::table('news')->select('id','description','content','img')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->get()->toArray();
        $settings = DB::table('settings')->first();
        return response()->json(['menus' => $menus, 'contents' => $content_format, 'page2' => $page2,'settings' => $settings]);

    }
}
