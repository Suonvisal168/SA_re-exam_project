@extends('layouts.app')

@section('title', 'Edit Branch')

@section('content')
<div class="container">
    <h1>Edit Branch</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('branches.update', $branch->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $branch->name) }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $branch->email) }}" required>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $branch->phone) }}" required>
        </div>

        <div class="mb-3">
            <label>Current Logo</label><br>
            @if ($branch->logo)
                <img src="{{ asset('storage/' . $branch->logo) }}" alt="Logo" width="100"><br><br>
            @else
                No logo uploaded
            @endif
        </div>

        <div class="mb-3">
            <label>Change Logo</label>
            <input type="file" name="logo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Branch</button>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
