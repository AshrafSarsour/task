@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-6">
    <form action="{{route('unicorn@update',['id'=>$unicorn->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text"  name="name" value="{{$unicorn->name}}" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Name">
          <small id="NameHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Color</label>
          <input type="text" name="color" value="{{$unicorn->color}}" class="form-control" id="exampleInputPassword1" placeholder="Color">
        </div>
        <div class="form-group" name="owners" id="owners">
            <label for="exampleFormControlSelect1">Owner</label>
            <select name="owner_id" class="form-control" id="exampleFormControlSelect1">
                @foreach ($owners as $owner)
                  <option value="{{$owner->id}}" {{($unicorn->id == $owner->id) ? 'selected':''}}>{{$owner->name}}</option>
               @endforeach
            </select>
        </div> 
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
</div>
@endsection
