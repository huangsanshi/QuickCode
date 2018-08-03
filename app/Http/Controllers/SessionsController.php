<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }
    //提交登录
    public function store(Request $request)
    {
        $vali = $this->validate($request,[
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);

        if(Auth::attempt($vali)){
            session()->flash('success','登录成功！');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('danger','抱歉，你的邮箱和密码不匹配');
            return redirect()->back();
        }
        return ;
    }
}
