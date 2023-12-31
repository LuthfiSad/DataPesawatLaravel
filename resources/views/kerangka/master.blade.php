<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    @include('include.style')
    
<link rel="stylesheet" href="{{ asset('template/assets/css/shared/iconly.css') }}">

</head>
<body>
    


@include('include.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            

@yield('content')

    @include('include.footer')

@include('include.script')

</body>

</html>