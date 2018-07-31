@extends('layouts.default')
@section('title',$user->name)
@section('content')
<div class="jumbotron">
<h2>{{ $user->name }} - {{ $user->email }}</h2>
</div>
@stop