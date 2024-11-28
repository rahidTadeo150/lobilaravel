<div class="absolute px-[61px] py-[25px] w-full z-50">
    <div class="w-full flex flex-row justify-between">
        <a href="{{ route('Website.LandingPage') }}">
            <div class="w-[153px]">
                <img src="\webdevelp\logolobi\Logo-Lobi-White-Longtext.png">
            </div>
        </a>
        <div class="flex flex-row items-center justify-evenly gap-x-10">
            <a href="{{ route('Website.Beasiswa.Index') }}">
                <p class="text-[14px] font-medium text-white">Beasiswa</p>
            </a>
            <a href="{{ route('Website.Lomba.Index') }}">
                <p class="text-[14px] font-medium text-white">Lomba</p>
            </a>
            <p class="text-[14px] font-medium text-white">Prestasi</p>
            <a href="{{ route('Login.LoginMethod') }}">
                <div class="group ease-in-out duration-150 px-[50px] py-[7px] border-2 rounded-[5px] hover:scale-105 border-white hover:bg-white">
                    <p class="text-[13px] font-medium text-white group-hover:text-blue-600 group-hover:scale-105">Log In</p>
                </div>
            </a>
        </div>
    </div>
</div>
