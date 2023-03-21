@extends('layouts.admin.main')

@section('title', __('patients.list'))

@section('content')
    <h1>{{__('patients.list')}}</h1>

                {{--  Button to add new patients  --}}
    <a href="{{route('patients.create')}}" class="waves-effect waves-light btn a.center">{{__('patients.add_new')}}</a>

        {{--    All current patients table for admin purposes  --}}
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>{{__('patients.first_name')}}</th>
            <th>{{__('patients.last_name')}}</th>
            <th>{{__('patients.operation')}}</th>
            <th>{{__('patients.condition')}}</th>

            <th>{{__('general.created_at')}}</th>
            <th>{{__('general.updated_at')}}</th>
            <th>{{__('patients.login_code')}}</th>
            <th>{{__('general.actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($patients as $patient)
            <tr>
                <td>{{$patient?->id}}</td>
                <td>{{$patient?->first_name}}</td>
                <td>{{$patient?->last_name}}</td>
                <td>{{$patient?->operation}}</td>
                <td>{{$patient?->condition}}</td>

                <td>{{$patient?->created_at}}</td>
                <td>{{$patient?->updated_at}}</td>
                <td>{{$patient?->login_code}}</td>
                <td>
                    <a href="{{route('patients.show', $patient)}}">Show</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


