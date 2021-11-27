@extends('layout')

@section('title', isset($user) ? 'Update ' . $user->name : 'Create user')

@section('content')
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to users</a>
    <form method="POST"
          @if(isset($user))
          action="{{ route('users.update', $user) }}">
          @else
          action="{{ route('users.store') }}">
          @endif
        @csrf
        @isset($user)
            @method('PUT')
        @endisset

        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input name="name"
                       value="{{ isset($user) ? $user->name : null }}"
                       type="text" class="form-control" placeholder="Name" aria-label="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email"
                       value="{{ isset($user) ? $user->email : null }}"
                       type="text" class="form-control" placeholder="Email" aria-label="email">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>

@endsection
