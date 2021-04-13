@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                            <div class="col-8">Unicorn</div>
                            <div class="col-4"><a id="add_unicorn" href="{{route('unicorn@add') }}" class="btn btn-small">Add New Item</a>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Color</th>
                        <th scope="col">Owner</th>
                        <th scope="col" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($unicorn as $item)
                        <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->color}}</td>
                        <td>{{$item->owner->name}}</td>
                        <td><a href="{{ route('unicorn@edit',['id'=>$item->id]) }}">Edit</a></td>
                        <td><a href="{{ route('unicorn@delete',['id'=>$item->id]) }}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection