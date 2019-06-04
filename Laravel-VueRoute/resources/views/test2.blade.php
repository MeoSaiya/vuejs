<form action="{{route('content')}}" method="POST">
    @csrf
    <input type="text" name="content">
    <input type="submit">
</form>
@if($errors->has('content'))
    @foreach($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
@endif
