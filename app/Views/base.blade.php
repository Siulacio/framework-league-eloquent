<html>
    <head>
        <title>PHPLEAGUE - @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    @section('sidebar')
                        <p>Primer texto del sidebar</p>
                    @show
                </div>

                <div class="col-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
