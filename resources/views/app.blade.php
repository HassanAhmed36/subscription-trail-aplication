<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('includes.navbar')
    <div class="container pt-5">
        @session('success')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> This is a dismissible alert message.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession
        @session('error')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> This is a dismissible alert message.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession
        <div>
            @yield('section')
        </div>
    </div>
    @stack('script')
    
</body>

</html>
