@extends('layouts.admin.main')

@section('title', __('operations.list'))

@section('content')
    <h1>{{__('operations.list')}}</h1>
    <td>{{$operation?->id}}</td>
    <td>{{$operation?->Name}}</td>
    <td>{{$operation?->Category}}</td>
    <td>{{$operation?->Status}}</td>

    <td>{{$operation?->created_at}}</td>
    <td>{{$operation?->updated_at}}</td>
    <td>
        Buttons
    </td>
@endsection
