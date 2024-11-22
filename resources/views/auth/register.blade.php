@extends('auth.layouts')

@section('content')
<h1>Register</h1>
<a href="{{ route('login') }}">Login</a>
<br><br>
<!-- Fixed typo: <from> to <form> -->
<form action="{{ route('store') }}" method="POST">

@csrf
<label>Nama Lengkap</label>
<input type="text" id="name" name="name" value="{{ old('name') }}"><br>

@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span> <!-- Fixed 'text-denger' to 'text-danger' and 'frist' to 'first' -->
@endif

<br>
<label>Email Address</label>
<input type="email" id="email" name="email" value="{{ old('email') }}"><br> <!-- Added 'name' attribute and fixed old value syntax -->

@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span> <!-- Fixed 'text-denger' to 'text-danger' and 'frist' to 'first' -->
@endif

<br>
<label>Password</label>
<input type="password" id="password" name="password"><br>

@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span> <!-- Added error message display for password -->
@endif

<br>
<label for="password_confirmation">Confirm Password</label> <!-- Removed unnecessary classes -->
<input type="password" id="password_confirmation" name="password_confirmation"><br>

<input type="submit" value="Register">
</form> <!-- Fixed typo: </from> to </form> -->
@endsection
