@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('Succ'))
            <div class="alert alert-success" role="alert">
                {{Session::get('Succ')}}            </div>

        @endif
        <a href="{{route('create')}}" class="link-secondary">Create New Jobs</a>

        <table class="table ">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Salary</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Jobs as $job)
                <tr>
                    <td>  {{$job->name}}</td>
                    <td>  {{$job->description}}</td>
                    <td>  {{$job->salary}}</td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection
