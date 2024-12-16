@extends('layouts.home')

@section('title')
	<title>{{ config('app.name')}} | Home</title>
@endsection

@section('body')

	<div class="d-flex flex-column flex-lg-row justify-content-center align-items-center vh-100 gap-3">
        <a class="sign-in" href="{{route('founders.sign_up')}}">I'm Founder</a>
        <a class="sign-in" href="{{route('investors.sign_up')}}">I'm Investors</a>
        <!-- <a class="sign-in" href="Signup-partner.html">I'm Partner</a> -->
    </div>

@endsection