@extends('master')

@section('content')

<form method="post" action="upload">
    @csrf
    <input type="file" name="logo">
</form>

@endsection