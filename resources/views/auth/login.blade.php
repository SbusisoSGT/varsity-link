@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div id="content" class="float_r">
        <h1>Login</h1>

        <form action="/login" method="POST" style="display: flex; flex-direction: column;">
        <input type="email" name="email" id="" placeholder="Email">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="submit" value="Login">
        </form>
    </div>
    <div class="cleaner"></div>
    </div>
@endsection 