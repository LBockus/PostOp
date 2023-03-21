
{{-- Page that will be used to register patients condition (currently in progress) --}}

@extends('layouts.main')

@section('title', __('patients.add'))

@section('content')

    <form action="{{route('patients.update_condition', ['patient' => $patient])}}">
        <label for="previous_condition">{{__('patients.previous_condition')}}</label>
        <input type="disabled" value="{{$patient->condition}}">
    </form>

@endsection
