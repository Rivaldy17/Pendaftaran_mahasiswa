@extends('template.tmp_login')
@section('content')
<div class="container" id="container">
	<div class="form-container sign-up-container">
    <form action="{{route('actionregister')}}" method="post">
            @csrf
			<h2><b>Create Account</b></h2>
			<div class="social-container">
			</div>
			<span>use your email for registration</span>
			<input name="nama" type="text" placeholder="Full Name" />
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
            <input name="role" type="hidden" value="1" placeholder="Password" />
			<button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
	<form action="{{ url('/loginPost') }}" method="post">
                {{ csrf_field() }}
			<h2><b>Sign in</b></h2>
			<div class="social-container">
			</div>
			<span>use your account</span>
			<input name="email" type="email" placeholder="Email" required/>
			<input name="password" type="password" placeholder="Password" required/>
			<a href="#">Forgot your password?</a>
			<button type="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h2><b>Welcome Back!</b></h2>
				<p style="text-align:center;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
            @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
             @foreach ($errors->all() as $error)
              <li style="font-size:15px;">{{ $error }}</li>
             @endforeach
        </ul>
    </div>
@endif
@if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
			@if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
			@if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
				<h2><b>Hello, Friend!</b></h2>
				<p style="text-align:center;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
@endsection
