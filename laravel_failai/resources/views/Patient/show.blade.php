@extends('layouts.admin.main')

@section('title', __('patients.list'))

@section('content')

{{--  Single Patient table  --}}

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
                <a href="{{route('patients.edit', ['patient' => $patient])}}"><button>{{__('general.edit')}}</button></a>
                <form action="{{route('patients.destroy', ['patient' => $patient->id])}}" method="POST"
                      style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button>{{__('general.delete')}}</button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
