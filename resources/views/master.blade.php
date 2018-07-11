<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Screenshooter</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ URL::asset('public/css/app.css') }}">

    <script src="{{ URL::asset('public/js/app.js') }}"></script>

    <meta name="token" content="{{ Session::token() }}">

</head>
<body>


<script type="text/javascript">

    $(document).ready(function(){
        setupAjax();
    });
    function setupAjax(){
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    }

</script>

<meta name="csrf-token" content="{{ csrf_token() }}" />


@yield('header')

<div class="container">
    @yield('content')
</div>
@yield('footer')

</body>

</html>
