@extends('Layout.AdminLayout')

@section('Content')
    <div class="flex flex-row items-center gap-x-8">
        <div class="w-[308px] h-[308px] overflow-hidden">
            <img class="w-full h-full" src="/webdevelp/testermodule/posterdiesnat_ig-2.png">
        </div>
        <div>
            <div class="flex flex-row gap-x-3">
                <div class="flex flex-col justify-center items-center px-[37px] h-[29px] bg-[#2A4BC1] rounded-full text-white text-[13px] font-medium">
                    Beasiswa
                </div>
                <div class="flex flex-col justify-center items-center px-[37px] h-[29px] bg-[#D27B2B] rounded-full text-white text-[13px] font-medium">
                    Internasional
                </div>
            </div>
            <p class="text-[30px] font-bold mt-[30px] leading-8">Beasiswa Tahunan 2024</p>
            <p class="text-[14px] font-medium">Bank BCA Jember</p>
            <div class="mt-[25px] px-[23px] py-[23px] flex flex-col justify-center bg-white w-[642px] h-[145px] shadow-lg rounded-[7px]">
                <div class="flex flex-row items-center gap-x-2 w-full h-fit">
                    <div class="w-[40px] h-[40px] rounded-full overflow-hidden">
                        <img class="w-full h-full" src="\webdevelp\testermodule\BcaProfile.png">
                    </div>
                    <div>
                        <p class="text-[13px] font-semibold leading-tight">Bank BCA Jember</p>
                        <p class="text-[10px] font-medium">Guest Account</p>
                    </div>
                </div>
                <p class="text-[13px] tracking-tight mt-[16px]">Bank Mandiri Ingin mengajukan beasiswa ke lobi poliwangi untuk di sebar luas kan kepada masyarakat umum, Berikut detail beasiswa kami</p>
            </div>
        </div>
    </div>
    <div class="flex flex-row items-center mt-[47px] gap-x-2">
        <img class="w-[35px] h-[35px]" src="\webdevelp\icons\IconDescRequest.png">
        <p class="text-[20px] font-semibold tracking-tight">Persyaratan Beasiswa</p>
    </div>
    <div class="w-[937px] h-[180px] min-h-[180px] overflow-scroll mt-[26px] pr-5">
        <p class="text-[15px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium enim sed felis venenatis lobortis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam augue risus, iaculis porta sem sed, porttitor fringilla mi. Proin sed eros commodo, ultrices enim et, faucibus magna. Morbi facilisis rutrum semper. Etiam metus nunc, tempor euismod urna vel, accumsan dapibus nisi. Nunc lacinia, nulla at eleifend rhoncus, urna nibh ullamcorper velit, quis scelerisque mauris leo sit amet est. Mauris eu nisl gravida, faucibus lectus quis, ullamcorper erat. Ut lacus est, pretium vel enim in, vestibulum blandit nisi. In dignissim tellus in gravida viverra. Maecenas molestie et tellus ullamcorper convallis.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium enim sed felis venenatis lobortis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam augue risus, iaculis porta sem sed, porttitor fringilla mi. Proin sed eros commodo, ultrices enim et, faucibus magna. Morbi facilisis rutrum semper. Etiam metus nunc, tempor euismod urna vel, accumsan dapibus nisi. Nunc lacinia, nulla at eleifend rhoncus, urna nibh ullamcorper velit, quis scelerisque mauris leo sit amet est. Mauris eu nisl gravida, faucibus lectus quis, ullamcorper erat. Ut lacus est, pretium vel enim in, vestibulum blandit nisi. In dignissim tellus in gravida viverra. Maecenas molestie et tellus ullamcorper convallis.
        </p>
    </div>
    <div class="flex flex-row items-center mt-[47px] gap-x-2">
        <img class="w-[35px] h-[35px]" src="\webdevelp\icons\TimelineIconRequest.png">
        <p class="text-[20px] font-semibold tracking-tight">Timeline Beasiswa</p>
    </div>
    <div class="flex flex-row justify-between items-center w-[937px] mt-[30px]">
        <div class="w-[294px] h-[65px] bg-gradient-to-br from-[#6FC718] to-[#2CB129] rounded-[5px]">
            <div class="flex flex-row gap-x-3 w-full h-full justify-center items-center">
                <img class="w-[35px] h-[35px]" src="\webdevelp\icons\CalendarIconTimeline.png">
                <div class="text-white mt-[1px]">
                    <p class="text-[12px] font-medium">Open Registrasi</p>
                    <p class="text-[18px] font-semibold -mt-1">09-08-2024</p>
                </div>
            </div>
        </div>
        <div class=" w-[300px] outline-1 outline-dashed"></div>
        <div class="w-[294px] h-[65px] bg-gradient-to-br from-[#E84714] to-[#DB271B] rounded-[5px]">
            <div class="flex flex-row gap-x-3 w-full h-full justify-center items-center">
                <img class="w-[35px] h-[35px]" src="\webdevelp\icons\CalendarIconTimeline.png">
                <div class="text-white mt-[1px]">
                    <p class="text-[12px] font-medium">Closed Registrasi</p>
                    <p class="text-[18px] font-semibold -mt-1">10-08-2024</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row items-center mt-[47px] gap-x-2">
        <img class="w-[35px] h-[35px]" src="\webdevelp\icons\LinkIconRequest.png">
        <p class="text-[20px] font-semibold tracking-tight">Link Pendaftaran</p>
    </div>
    <div class="w-[1003px] h-[45px] bg-[#D2D1D1] rounded-[5px] flex flex-col justify-center px-[17px] mt-[24px]">
        <a class="test-[15px] tracking-wide underline hover:text-blue-500 ease-in-out duration-100 text-blue-700" href="https://PendaftaranBeasiswaGratis2024">
            https://PendaftaranBeasiswaGratis2024
        </a>
    </div>
    <div class="flex flex-row gap-x-8 mt-[57px]">
        <button class="px-[32px] py-[9px] bg-[#3052CC] rounded-[5px]">
            <div class="flex flex-row items-center justify-center gap-x-2">
                <img class="w-[25px] h-[25pxs]" src="\webdevelp\icons\AddDataIcon.png">
                <p class="text-[15px] text-white">Post On Lobi Poliwangi</p>
            </div>
        </button>
        <button class="px-[32px] py-[9px] bg-[#C80000] rounded-[5px]">
            <div class="flex flex-row items-center justify-center gap-x-2">
                <img class="w-[25px] h-[25pxs]" src="\webdevelp\icons\IconRejectSubmission.png">
                <p class="text-[15px] text-white">Reject Submission</p>
            </div>
        </button>
    </div>
@endsection
