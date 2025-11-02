<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
   
</head>
<body>
    <nav>
        <a href="/home">Home</a>
        <a href="/about">About</a>
    </nav>
    
    @yield('content')
</body>
</html>