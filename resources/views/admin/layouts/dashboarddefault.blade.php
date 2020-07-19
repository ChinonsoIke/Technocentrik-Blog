<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head')
</head>
<body>
    @include('admin.includes.header')
    @include('admin.includes.sidebar')
    @include('admin.includes.alerts')
    @yield('content')
    @include('admin.includes.footer')
</body>
</html>