<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest',[
                'only' => ['create']
            ]);
    }

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

        if(Auth::attempt($vali,$request->has('remember'))){
            if(Auth::user()->activated){
                //flash表示执行一次后自行销毁（只能用一次）
                session()->flash('success','欢迎回来!');
                 //intended 跳转到登录前访问的页面
            return redirect()->intended(route('users.show',[Auth::user()]));
            }else{
                Auth::logout();
                session()->flash('warning', '你的账号未激活，请检查邮箱中的注册邮件进行激活。');
               return redirect('/');
            }

        }else{
            session()->flash('danger','抱歉，你的邮箱和密码不匹配');
            return redirect()->back();
        }
        return ;
    }

    //退出登录
    public function destroy()
    {
        Auth::logout();
        session()->flash('success','您已成功退出!');
        return redirect('login');
    }
}
