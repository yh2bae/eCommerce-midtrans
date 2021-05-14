<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{ url('/backend/css/style.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

@yield('content')

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="{{ url('/backend/vendor/global/global.min.js') }}"></script>
<script src="{{ url('/backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ url('/backend/js/custom.min.js') }}"></script>
<script src="{{ url('/backend/js/deznav-init.js') }}"></script>

</body>

</html>
