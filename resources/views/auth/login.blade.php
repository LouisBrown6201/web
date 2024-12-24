<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <base href="{{ asset('assets') }}/">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
    <link href="libs/flot/css/float-chart.css" rel="stylesheet" />
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        #login-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 0.5rem;
        }
        .btn-primary {
            background-color: #6f42c1;
            border-radius: 0.5rem;
        }
        .btn-primary:hover {
            background-color: #5a34a6;
        }
    </style>
</head>

<body>
    <div id="login-container" class="container">
        <form method="post" action="{{ route('login.perform') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Email or Username" required="required" autofocus>
                <label for="floatingName">Email or Username</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
    </div>

    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="libs/flot/excanvas.js"></script>
    <script src="libs/flot/jquery.flot.js"></script>
    <script src="libs/flot/jquery.flot.pie.js"></script>
    <script src="libs/flot/jquery.flot.time.js"></script>
    <script src="libs/flot/jquery.flot.stack.js"></script>
    <script src="libs/flot/jquery.flot.crosshair.js"></script>
    <script src="libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>
