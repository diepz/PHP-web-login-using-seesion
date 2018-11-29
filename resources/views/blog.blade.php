@extends('layouts.master')
@section('content')

    <form action="" href="">
    <div class="title m-b-md">
        Raising the bar
    </div>
    <a href="{{ route('user.logout') }}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
    </a>
    <hr>
    </form>
    @endsection