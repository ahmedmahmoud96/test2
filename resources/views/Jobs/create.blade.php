@extends('layouts.app')

@section('content')

    <div class="container">

        <a href="{{route('home')}}" class="link-secondary">Back To Home</a>

        <form action="{{route('store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{__('Name')}}</label>
                <input type="text" class="form-control" name="name">
                @error('name')
                <small class=" alert-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">{{__('Description')}}</label>
                <input type="text" class="form-control" name="description">
                @error('description')
                <small class=" alert-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">{{__('Salary')}}</label>
                <input type="text" class="form-control" name="salary">
                @error('salary')
                <small class=" alert-danger">{{$message}}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
