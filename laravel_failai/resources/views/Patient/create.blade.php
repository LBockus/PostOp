@extends('layouts.main')

@section('title', __('patients.add'))

@section('content')
    <form method="POST" action="{{ route('patients.store') }}">
        @csrf

        <label for="first_name">{{__('patients.first_name')}}</label>
        <input type="text" name="first_name" required>

        <label for="last_name">{{__('patients.last_name')}}</label>
        <input type="text" name="last_name" required>

        <label for="doctor_id">Doctor ID:</label>
        <input type="text" name="doctor_id" required>

        <label for="operation">{{__('patients.operation')}}</label>
        <textarea name="operation" required></textarea>

        <button type="submit">{{__('patients.add')}}</button>
    </form>

@endsection
