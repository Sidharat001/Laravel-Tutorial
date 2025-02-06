@extends('layouts.master')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h4>Page Not Found</h4>
            <p>Sorry, the page you are looking for could not be found.</p>
            <p><a href="{{ route('home') }}">Back to Home</a></p>
        </div>
    </div>
@show
