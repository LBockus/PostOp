@extends('layouts.admin.main')
@section('title', __('operations.create'))
@section('content')

<h1>Creating operation</h1>
<form action="{{route('operations.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name" value=""><br>
    <input type="text" name="category" placeholder="Category" value=""><br>
    <input type="text" name="status" placeholder="Status" value=""><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>
@endsection
