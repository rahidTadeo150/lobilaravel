<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body class="font-Poppins bg-[#ffffff]">
    @include('NavigationBar.WebsiteNavbar')
    <div class="pt-16 ">
        @yield('Content')
    </div>
    <script>
        feather.replace();
    </script>
    <script src="\JavascriptDevelp\DropdownFilter.js"></script>
</body>
</html>
