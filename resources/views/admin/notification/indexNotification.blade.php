@extends('Layout.AdminLayout')

@section('Content')
    <div class="flex flex-row justify-between">
        <div>
            <p class="text-[28px] font-bold">Mail Request Notification</p>
            <div class="flex flex-row gap-x-3 mt-[21px] mb-[33px]">
                <button class="px-[50px] py-[5px] bg-[#3052CC] rounded-[3px] text-[13px] text-white font-medium">Belum Terbaca</button>
                <button class="px-[50px] py-[5px] border-2 border-[#3052CC] rounded-[3px] text-[13px] text-[#3052CC] font-medium">Sudah Terbaca</button>
            </div>
            <a href="/detail-notification">
                <div class="relative bg-white w-[718px] h-[136px] shadow-lg rounded-[5px] px-[20px] hover:-translate-y-2 ease-in duration-100">
                    <div class="flex flex-row items-center w-full h-full gap-x-6">
                        <div class="w-[75px] h-[75px] rounded-full overflow-hidden">
                            <img src="\webdevelp\testermodule\MandiriProfile.png" class="w-full h-full">
                        </div>
                        <div>
                            <p class="text-[17px] font-semibold leading-4">Bank Mandiri</p>
                            <p class="text-[10px] font-medium italic">Guest Account</p>
                            <p class="text-[10px] font-medium w-[565px] mt-[9px]">Bank Mandiri Ingin mengajukan beasiswa ke lobi poliwangi untuk di sebar luas kan kepada masyarakat umum, untuk detail selengkapnya silahkan click pesan ini</p>
                            <p class="text-[10px] mt-[9px]">Dikirim Pada 09-02-2024</p>
                        </div>
                    </div>
                    <div class="absolute w-[15px] h-[15px] bg-[#4370C8] rounded-full top-2 right-2"></div>
                </div>
            </a>
        </div>
        <div class="flex flex-col gap-y-3">
            <div class="w-[275px] h-[41px] rounded-md bg-gradient-to-r from-[#6889FF] to-[#8F31B0] flex flex-col justify-center items-center">
                <p class="text-white text-[13px] font-semibold">Category Message</p>
            </div>
            <button class="hover:scale-105 ease-in duration-100 px-[7px] flex flex-col justify-center w-[275px] h-[41px] rounded-md bg-[#E0E0EB]">
                <div class="flex flex-row justify-between items-center w-full h-full">
                    <div class="flex flex-row items-center gap-x-2">
                        <img class="w-[28px] h-[28px]" src="\webdevelp\icons\IconRequestBeasiswaActive.png">
                        <p class="text-[#426BFF] text-[13px]">Request Beasiswa</p>
                    </div>
                    <img class="w-[15px] h-[15px]" src="\webdevelp\icons\ChecklistActiveIcon.png">
                </div>
            </button>
            <button class="hover:scale-105 px-[7px] flex flex-col justify-center w-[275px] h-[41px] rounded-md bg-[#E0E0EB]">
                <div class="flex flex-row justify-between items-center w-full h-full">
                    <div class="flex flex-row items-center gap-x-2">
                        <img class="w-[28px] h-[28px]" src="\webdevelp\icons\IconRequestLomba.png">
                        <p class="text-black text-[13px]">Request Lomba</p>
                    </div>
                    <img class="w-[15px] h-[15px] hidden" src="\webdevelp\icons\ChecklistActiveIcon.png">
                </div>
            </button>
            <button class="hover:scale-105 px-[7px] flex flex-col justify-center w-[275px] h-[41px] rounded-md bg-[#E0E0EB]">
                <div class="flex flex-row justify-between items-center w-full h-full">
                    <div class="flex flex-row items-center gap-x-2">
                        <img class="w-[28px] h-[28px]" src="\webdevelp\icons\IconRequestPrestasi.png">
                        <p class="text-black text-[13px]">Request Prestasi</p>
                    </div>
                    <img class="w-[15px] h-[15px] hidden" src="\webdevelp\icons\ChecklistActiveIcon.png">
                </div>
            </button>
        </div>
    </div>
@endsection
