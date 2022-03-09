<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu4_2Controller extends Controller
{
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class Jissyu4_2Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'必要事項を記入してください。',
        ];
        return view('___(1)___', $data);
    }
    public function post(Request $request)
    {
        $rules = [
            'name' => 'required|max:10',
            'adress' => 'required|max20',
            'login_id' => 'required|numeric|___(4)___',
            'password' => 'required|___(5)___',
        ];
        $messages = [
            'name.required' => '名前は必ず入力して下さい。',
            'name.___(6)___' => '名前は10文字以内で入力して下さい。',
            'adress.required'  => '住所は必ず入力して下さい。',
            'adress.max'  => '住所は20文字以内で入力して下さい。',
            'login_id.required' => 'ログインIDは必ず入力して下さい。',
            'login_id.numeric' => 'ログインIDは数字で入力して下さい。',
            'login_id.digits_between' => 'ログインIDは8文字以上16文字以内で入力して下さい。',
            'password.___(8)___' => 'パスワードは必ず入力して下さい。',
            'password.between' => 'パスワードは8文字以上16文字以内で入力して下さい。',
        ];
        $validator = ___(9)___;
        if (___(10)___) {
            return redirect('___(11)___')
                ->withErrors($validator)
                ->withInput();
        }

        //全データの取得
        $data = $request->all();

        return view('___(12)___', ['data' => $data]);
    }

}

}
