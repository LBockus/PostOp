<h1>Editing {{$operation->name}}</h1>
<span>Redagavimo forma</span>
<form action="{{route('operation.update', $operation->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{$operation->name}}"><br>
    <input type="text" name="category" placeholder="Category" value="{{$operation->slug}}"><br>
    <input type="text" name="status" placeholder="Status" value="{{$operation->description}}"><br>
    <hr>
    <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
</form>
