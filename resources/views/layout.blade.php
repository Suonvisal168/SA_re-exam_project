<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My CRUD App</title>
</head>
<body>
    <div style="padding: 20px;">
        <a href="/branches">Branches</a> |
        <a href="/categories">Categories</a> |
        <a href="/products">Products</a>
        <hr>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        @yield('content')
    </div>
</body>
</html>
