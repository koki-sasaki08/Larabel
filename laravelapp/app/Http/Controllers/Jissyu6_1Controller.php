<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Jissyu6_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        $param = ['input' => $request->input, 'items' => $items];
        return view('jissyu6_1.index', $param);
    }
    public function find(Request $request)
    {
        $item = DB::table('people')->where('input', $input)->first();
        return view('jissyu6_1.find', ['item' => $item]);
    }
}
