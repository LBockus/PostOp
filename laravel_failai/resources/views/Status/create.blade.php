@extends('layouts.main')

@section('title', 'New status')

@section('content')
    <form action="{{route('statuses.store')}}" method="post">
        <x-forms.input :model="(new \App\Models\Status())" field="name"/>
        <div class="divider">NOW SAVE IT</div>
        <x-primary-button>{{ __('Save') }}</x-primary-button>
        @csrf
    </form>

@endsection
