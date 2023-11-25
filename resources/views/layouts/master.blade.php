<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-udNfZ+Ra+E0eTOwpgi9/fW3UPKBtrLV0jCa4zlb7LXXFkJiSKw0aDwFEWLRcYUd2og8Cx7n8cJYqMlVnq45/9Q==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.navbar')
    
    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')
    <script src="https://kit.fontawesome.com/40efee845b.js" crossorigin="anonymous"></script>
</body>
</html>
