<!--  this layout is for the repeated html codes in different files -->
<html>
    <head>
        <title> @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
        <style>@yield('design')</style>
    </head>
    <body>
        <div class="container w-25 index ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around">
                <a class="navbar-brand" href="/">Home</a>
                <a class="nav-item nav-link active" href="/posts">All Posts</a>
                <a class="nav-item nav-link active" href="/posts/create">New Post</a>
            </nav>
        </div>  
        @yield('home')

        <div class="container">
            @yield('data')
        </div>
        

    </body>
</html>
