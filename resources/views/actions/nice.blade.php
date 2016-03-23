@extends('layouts.master')

@section('content')
<div class="centered">
<h1>I {{ $action }} {{ $name }}</h1>
<a href={{ route('home') }}>back</a>
</div>
@endsection