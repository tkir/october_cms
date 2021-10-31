<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
@include('includes.header')

@if(Request::is('/'))
@include('includes.hero')
@endif

<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            @include('includes.aside')
        </div>
    </div>
</div>


@include('includes.footer')
</body>
</html>
