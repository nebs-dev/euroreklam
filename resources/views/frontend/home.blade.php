@extends('frontend.layouts.main')

@section('content')

<h1>Home content</h1>

<homepage-items :items="{{ $items }}"></homepage-items>

@stop
