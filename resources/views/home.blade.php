@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1 class="mb-4">Welcome to Inventory App</h1>

    <div class="list-group w-50 mx-auto">
        <a href="{{ route('branches.index') }}" class="list-group-item list-group-item-action">Branches</a>
        <a href="{{ route('categories.index') }}" class="list-group-item list-group-item-action">Categories</a>
        <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action">Products</a>
    </div>

    <footer class="mt-4 text-muted">
        Student : Suon Visal
    </footer>
</div>
@endsection
