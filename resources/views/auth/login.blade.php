@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div id="content" class="float_r">
        <h1>Login</h1>
        @if (!empty(session('result')))
            <h4>{{session('result')}}</h4>
        @endif
        <form action="/login" method="POST" style="display: flex; flex-direction: column;">
            @csrf
            <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
            <div class="cleaner h10"></div>

            <label for="password">Password:</label> <input type="password" id="password" name="password" class="required input_field" />
            <div class="cleaner h10"></div>
            
            <input type="submit" value="Login" id="submit" name="submit" class="submit_btn float_l" style="width: 90px"/>
        </form>
    </div>
    <div class="cleaner"></div>
    </div>
@endsection 