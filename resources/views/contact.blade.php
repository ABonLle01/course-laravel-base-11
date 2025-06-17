@extends('master')

@section('content')
    <h1>Contact1</h1>
    @if($name)
        <p>Hello, {{ $name }}!</p>
    @else
        <p>Hello, Guest!</p>
    @endif
@endsection