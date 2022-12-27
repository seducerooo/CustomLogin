@extends('layouts.authpanel')
@section('content')
dashboard page
<br>
<p>{{ $data->name }}</p>

<br>
<p>{{ $data->email }}</p>

<br>
<p><a href="{{ route('auth.logout') }}" class="btn btn-danger">logout</a></p>
@endsection
