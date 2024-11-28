<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://kit.fontawesome.com/3197b77032.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Landing Page | Lobi Poliwangi</title>
</head>
<body class="relative font-Poppins bg-[#f5f5f5]">
    @include('NavigationBar.LandingPageNavbar')
    <div class="relative w-[1349px] h-[585px] overflow-hidden">
        <div class="w-full h-full absolute">
            <div class="flex flex-row justify-between px-[73px]">
                <div class="pt-[141px]">
                    <p class="text-[15px] text-white">Pengen Cari Pengalaman Tapi Bingung Dimana?</p>
                    <p class="-mt-1 text-[40px] font-bold w-[500px] text-white">Explore Pengalamanmu Disini Sekarang!</p>
                    <p class="mt-[20px] text-[12px] w-[500px] text-white">Selamat datang di Lobi Poliwangi! Kami hadir sebagai platform yang menyediakan informasi terbaru tentang berbagai peluang beasiswa di dalam dan luar negeri. Dengan visi membantu generasi muda meraih cita-cita melalui pendidikan, kami memudahkan pencarian beasiswa yang sesuai dengan minat, kebutuhan, dan tujuanmu.</p>
                    <a href="">
                        <div class="duration-150 ease-in-out hover:text-blue-600 hover:scale-105 hover:bg-white mt-[50px] w-fit text-[14px] rounded-[3px] text-white border-2 border-white px-[73px] py-[8px]">Jelajahi Sekarang!</div>
                    </a>
                </div>
                <div class="w-[700px] translate-x-[75px] translate-y-1">
                    <img src="\webdevelp\image\ActorHeroLandingPage.png">
                </div>
            </div>
        </div>
        <img src="\webdevelp\image\HeroLandingPage.png">
    </div>
    <div class="absolute -mt-12 w-full">
        <div class="flex flex-row justify-center gap-x-[25px]">
            <div class="bg-white pl-[40px] pr-[25px] w-fit flex flex-row items-center shadow-BoxLandingPage rounded-md gap-x-[40px]">
                <div>
                    <p class="text-[13px] text-[#166DCF] -mb-1.5 font-semibold">Informasi Data</p>
                    <p class="text-[22px] text-[#166DCF] font-semibold">Terlengkap</p>
                </div>
                <div class="h-[85px] w-[85px]">
                    <img src="\webdevelp\image\WorldDatabaseIcon.png">
                </div>
            </div>
            <div class="bg-white pl-[40px] pr-[25px] w-fit flex flex-row items-center shadow-BoxLandingPage rounded-md gap-x-[40px]">
                <div>
                    <p class="text-[14px] text-[#166DCF] -mb-1.5 font-semibold">Data Yang</p>
                    <p class="text-[22px] text-[#166DCF] font-semibold">Up To Date</p>
                </div>
                <div class="h-[85px] w-[85px]">
                    <img src="\webdevelp\image\UpToDateIcon.png">
                </div>
            </div>
            <div class="bg-white pl-[40px] pr-[25px] w-fit flex flex-row items-center shadow-BoxLandingPage rounded-md gap-x-[40px]">
                <div>
                    <p class="text-[14px] text-[#166DCF] -mb-1.5 font-semibold">Cari Informasi</p>
                    <p class="text-[22px] text-[#166DCF] font-semibold">Tanpa Biaya</p>
                </div>
                <div class="h-[85px] w-[85px]">
                    <img src="\webdevelp\image\WorldDatabaseIcon.png">
                </div>
            </div>
        </div>
    </div>
    <div class="mt-[116px] mb-[75px] w-full">
        <div class="flex flex-row justify-center gap-x-[101px]">
            <div class="w-[415px] rounded-br-[148px] shadow-BoxLandingPage">
                <img src="\webdevelp\image\OrangBertanyaTanya.png">
            </div>
            <div class="w-fit">
                <div class="bg-[#166DCF] w-fit rounded-full py-[3px] px-[35px]">
                    <p class="text-[14px] font-light text-white">Apa Yang Kami Layankan?</p>
                </div>
                <p class="text-[33px] font-bold mt-[20px]">Website Informatif Lobi Poliwangi</p>
                <p class="text-[13px] w-[585px]">Kami Melayankan Pempublikasian Informasi Terkait Beasiswa dan lomba Yang diselenggarakan oleh berbagai Instansi dan juga menawarkan tempat mempublikasi ke masyarakat bagi anda yang mengadakan lomba dan juga beasiswa. Dengan Total Data Yang Telah kami Publikasikan</p>
                <div class="mt-[50px] flex flex-row items-center gap-x-[50px]">
                    <div class="flex flex-row gap-x-[18px] items-center">
                        <div class="w-[51px]">
                            <img src="\webdevelp\image\DBIcon.png">
                        </div>
                        <div class="-mt-2">
                            <p class="text-[26px] font-bold">2000+</p>
                            <p class="text-[10px] -mt-2">Total Data Beasiswa dan Lomba</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-x-[18px] items-center">
                        <div class="w-[51px]">
                            <img src="\webdevelp\image\BuldingApartIcon.png">
                        </div>
                        <div class="-mt-2">
                            <p class="text-[26px] font-bold">50+</p>
                            <p class="text-[10px] -mt-2">Total Instansi Yang Mempublikasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        feather.replace();
    </script>
</body>
</html>
