@extends('layout')

@section('title', 'User' . $user->name)

@section('content')
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to users</a>
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$user->id}}</li>
            <li class="list-group-item">Name: {{$user->name}}</li>
            <li class="list-group-item">Email: {{$user->email}}</li>
            <li class="list-group-item">Created: {{$user->created_at->format('d/m/y H:i:s')}}</li>
            <li class="list-group-item">Updated: {{$user->updated_at->format('d/m/y H:i:s')}}</li>
        </ul>
    </div>
    <form method="POST" action="{{ route('users.destroy', $user) }}" class="mt-3">
        <a type="button" href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
