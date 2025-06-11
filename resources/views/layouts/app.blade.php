<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Inventory App')</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">InventoryApp</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('branches.index') }}">Branches</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Products</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>

<!-- Bootstrap JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
