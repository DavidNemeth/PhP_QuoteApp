@extends('layouts.master')

@section('content')
    @if(count($errors) > 0)
        <section class="info-box fail">
            <ul>
                @foreach($errors->all() as $error)
                 {{ $error }}
                @endforeach
            </ul>
        </section>
    @endif
    @if(Session::has('fail'))
        <section class="info-box fail">
            <ul>
                {{ Session::get('fail') }}
            </ul>
        </section>
    @endif
<form action="{{ route('admin.login') }}" method="post">
    <div class="input-group">
        <input type="text" name="name" id="name" placeholder="Your Name" />
    </div>
    <div class="input-group">
        <input type="password" name="password" id="password" placeholder="Your Password" />
    </div>
    <button type="submit">Submit</button>
    <input type="hidden" name="_token" value="{{ Session::token() }}" />
</form>
@endsection