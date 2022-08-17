<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/app.css">
        <title>@yield('title')</title>
    </head>
    <body style = "background-color:lightgray;">


        <div class="container-fluid m-0 row">

            <!-- <div class="row w-100 m-0 justify-content-end" style="background-color: gray;">
                <h3 class="text-dark text-center m-3 font-weight-bold">

                @yield('title')

                </h3>
            </div>

            <div style="background-color: gray;" class="col-md-4 mw-100 mh-100 border border-dark">
                <h1 class="text-dark text-center mt-0 mb-3">Complaint system</h1>
                <hr>
            </div> -->

        <!-- <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-md-8" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-sm-0 me-sm-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Complaint system</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Home
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              Orders
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              Products
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              Customers
            </a>
          </li>
        </ul>
            </div> -->

            <div class="col-md-8">
                @yield('content')
            </div>
        </div>
        <script src="../js/app.js"></script>
    </body>
</html>
