@extends('layouts.admin.main')

@section('title', __('operations.list'))

@section('content')
    <h1>{{__('operations.list')}}</h1>
    <a href="{{route('operations.create')}}" class="waves-effect waves-light btn">{{__('operations.add_new')}}</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>{{__('operations.name')}}</th>
            <th>{{__('operations.category')}}</th>
            <th>{{__('operations.status')}}</th>

            <th>{{__('general.created_at')}}</th>
            <th>{{__('general.updated_at')}}</th>
            <th>{{__('general.actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($operations as $operation)
            <tr>
                <td>{{$operation?->id}}</td>
                <td>{{$operation?->Name}}</td>
                <td>{{$operation?->Category}}</td>
                <td>{{$operation?->Status}}</td>

                <td>{{$operation?->created_at}}</td>
                <td>{{$operation?->updated_at}}</td>
                <td>
                    Buttons
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
