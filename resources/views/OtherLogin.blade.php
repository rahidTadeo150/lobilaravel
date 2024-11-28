<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/3197b77032.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Login Page</title>
</head>
<body class="font-montserrat">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <div class="flex flex-col justify-center p-8 -pt-4 md:p-14">
                <span class="text-3xl font-extrabold">Selamat Datang!</span>
                <span class="mb-16 text-4xl font-extrabold">Di Lobi Poliwangi</span>
                <span class="font-light text-gray-700 mb-5 text-center">Silahkan Pilih Metode Login</span>
                <div class="w-[500px] mb-16">
                    <button class="w-full border border-gray-300 text-md p-3 rounded-md mb-6 hover:bg-black hover:text-white"><img src="\webdevelp\image\poliwangi.png" alt="img" class="w-6 h-6 inline mr-3">Login With SSO Poliwangi</button>
                    <button class="w-full border border-gray-300 text-md p-3 rounded-md hover:bg-black hover:text-white"><a href="/landingpage"><i class="fa-solid fa-user mr-3 w-6 h-6"></i>Sebagai Pengunjung</a></button>
                </div>
                <div class="text-center text-gray-400">Dont Have Any Account?
                    <span class="font-bold text-black">Click Here</span>
                </div>
            </div>
            <div class="relative">
                <img src="\webdevelp\image\poliwangiviewdrone.jpg" alt="" class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover">
                <div class="absolute hidden bottom-10 right-6 left-6 p-6 bg-white bg-opacity-20 backdrop-blur-sm rounded drop-shadow-lg md:block">
                    <span class="text-white text-sm">Jika Kamu Ingin Menyerah Akan Masalahmu, Ingat Itu Awal dari Level Up Mu!</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
