@extends('layouts.main')

@section('title', __('patients.edit'))

@section('content')

                {{--  Patient edit form with current values  --}}

    <form method="POST" action="{{ route('patients.update', ['patient' => $patient]) }}">
        @csrf
        @method('PUT')
        <label for="first_name">{{__('patients.first_name')}}</label>
        <input type="text" name="first_name" required value="{{$patient->first_name}}">

        <label for="last_name">{{__('patients.last_name')}}</label>
        <input type="text" name="last_name" required value="{{$patient->last_name}}">

        <label for="doctor_id">Doctor ID:</label>
        <input type="text" name="doctor_id" required value="{{$patient->doctor_id}}">

        <label for="operation">{{__('patients.operation')}}</label>
        <input type="text" name="operation" required value="{{$patient->operation}}">

        <button type="submit">{{__('patients.update')}}</button>
    </form>

@endsection
