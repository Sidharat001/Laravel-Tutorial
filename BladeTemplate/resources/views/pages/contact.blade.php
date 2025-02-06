@extends('layouts.master')


@section('content')
<div class="container text-center">
    <h3>Contact Page</h3>
</div>
@endsection


@section('navigation')
    @parent
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a>
        </li>
    </ul>
@endsection
