<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- my own css was added -->
        <link rel="stylesheet" href="../css/homepage.css">
        <link rel="stylesheet" href="../css/categories.css">
        <link rel="stylesheet" href="../css/base.css">
        <link rel="stylesheet" href="../css/add_values.css">

        <title>HomePage</title>
        <!--  A Base layout page which other blade files extends  -->
    </head>
    <body>
        <div class="header">
        <ul>
            <!-- <li class="items">A</li>
            <li class="items">B</li>
            <li class="items">C</li> -->
            <!-- <li class="items">
                <input type="search" name="search" id="search" placeholder="Enter your Search">
                <button class="search">Search</button>
            </li> -->
            
        </ul>
        </div>

        @yield('content')
        <div class="footer">
             Copyright | &copy Aditya Poddar
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
    </html>