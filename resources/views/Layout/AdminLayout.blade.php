<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://kit.fontawesome.com/3197b77032.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Form Pengisian Data Instansi | Lobi Poliwangi</title>
</head>
<body class="font-Poppins bg-[#ECECEC]">
    @include('admin.component.navbaradmin')
    <div class="pt-[90px] pl-[293px] pr-[25px] pb-[25px]">
        @yield('Content')
    </div>
    <script>
        feather.replace();
    </script>
</body>
</html>
