@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="col-md-offset-2 col-md-8 top">
  <div class="panel panel-default">
    <div class="jumbotron">
      <h3>登录</h3>
    </div>
    <div class="panel-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
          <label for="password">密码（<a href="{{ route('password.request') }}">忘记密码</a>）：</label>
          <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> 记住我</label>
          </div>

          <button type="submit" class="btn btn-primary">登录</button>
      </form>

      <hr>

      <p>还没账号？<a href="{{ route('users.create') }}">现在注册！</a></p>
    </div>
  </div>
</div>
@stop