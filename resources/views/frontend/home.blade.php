@extends('frontend.layouts.main')

@section('content')

<img src="images/logo_euroreklam.png" >

<h1>Home content</h1>

<homepage-items :items="{{ $items }}"></homepage-items>

@stop
