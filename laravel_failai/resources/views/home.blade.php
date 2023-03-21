@extends('layouts.main')
@section('title', 'Home')
@section('content')
    {{--  Seperating main screen to doctor login and patient login  --}}
    <a href="{{route('patient.login')}}">Patient</a>
    <a href="{{route('doctor.login')}}">Doctor</a>

@endsection
