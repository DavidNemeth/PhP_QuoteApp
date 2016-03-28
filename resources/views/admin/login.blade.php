@extends('layouts.master')

@section('content')
<form action="" method="post">
    <div class="input-group">
        <input type="text" name="name" id="name" placeholder="Your Name" />
    </div>
    <div class="input-group">
        <input type="password" name="password" id="password" placeholder="Your Password" />
    </div>
    <button type="submit">Submit</button>
</form>
@endsection