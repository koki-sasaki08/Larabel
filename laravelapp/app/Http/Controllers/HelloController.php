<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;


class HelloController extends Controller
{
    public function index(Request $request) {
        if ($request->hasCookie('msg'))
        {
            $msg = 'cookie: ' . $request->cookie('msg');
        } else {
            $msg = '※クッキーはありません。';
        }
        return view('hello.index', ['msg'=>$msg]);
    }
   
    public function post(Request $request) {
        $validate_rule = [
            'msg' => 'request',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('hell,index', ['msg'=>'「' . $msg . '」をクッキーに保存しました。']);
        $response->coolie('msg', $msg, 100);
        return $response;
    }
}
