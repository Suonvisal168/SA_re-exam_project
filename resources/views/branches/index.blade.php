@extends('layouts.app')

@section('title', 'Branches')

@section('content')
<div class="container">
    <h1>Branches</h1>

    <a href="{{ route('branches.create') }}" class="btn btn-primary mb-3">Add New Branch</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($branches as $branch)
            <tr>
                <td>{{ $branch->name }}</td>
                <td>{{ $branch->email }}</td>
                <td>{{ $branch->phone }}</td>
                <td>
                    @if($branch->logo)
                        <img src="{{ asset('storage/' . $branch->logo) }}" alt="Logo" width="80">
                    @else
                        N/A
                    @endif
                </td>
                <td>
                    <a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this branch?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
