@extends('layouts.admin.main')

@section('title', __('statuses.list'))

@section('content')
    <h1>{{__('statuses.list')}}</h1>
    <td>{{$status?->id}}</td>
    <td>{{$status?->Name}}</td>

    <td>{{$status?->created_at}}</td>
    <td>{{$status?->updated_at}}</td>
    <td>
        Buttons
    </td>
@endsection
