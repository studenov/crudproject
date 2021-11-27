@extends('layout')

@section('title', 'Users')
@section('content')
    <a class="btn btn-primary" href="{{ route('users.create') }}" role="button">Create user</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection


