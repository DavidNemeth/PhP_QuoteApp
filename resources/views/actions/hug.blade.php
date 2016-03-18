@extends('layouts.master')

@section('content')
<div class="centered">
<h1>I hug {{ $name ==null ? 'you' : $name }}</h1>
<a href={{ route('home') }}>back</a>
</div>
@endsection