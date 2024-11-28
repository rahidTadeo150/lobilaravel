@extends('Layout.WebsiteLayout')

@section('Content')
@include('Website.Compnent.CarouselComponent')
<div class="flex flex-row justify-between mt-[45px]">
    <div>
        <div class="flex flex-row w-[942px] ml-[30px]">
            <div class="w-full flex flex-row gap-x-[30px]">
                <a href="{{ route('Website.Lomba.Index') }}">
                    <div class="px-[20px] flex flex-col items-center ActiveTabs">
                        <p class="text-[16px] font-medium">Terbaru</p>
                    </div>
                </a>
                <a href="{{ route('Website.Lomba.Index', 'ListBy=Lokal') }}">
                    <div class="px-[20px] flex flex-col items-center">
                        <p class="text-[16px] font-medium">Lokal</p>
                    </div>
                </a>
                <a href="{{ route('Website.Lomba.Index', 'ListBy=Internasional') }}">
                    <div class="px-[20px] flex flex-col items-center">
                        <p class="text-[16px] font-medium">Internasional</p>
                    </div>
                </a>
            </div>
            <div class="w-fit h-[33px] border-[2px] border-black rounded-full px-[10px]">
                <div class="relative flex flex-row items-center h-full w-full py-[2px] gap-x-2">
                    <i class="w-[17px] h-[17px]" data-feather="search"></i>
                    <form action="" class="-mt-[2px]">
                        <input class="w-[300px] text-[12px] placeholder:italic focus:outline-none" name="search" type="search" placeholder="Cari Beasiswa Anda Disini..." autocomplete="off">
                        <input id="FilterRequest" value="Nama Perlombaan" name="Filter" type="hidden">
                    </form>
                    <div class="h-full w-[2px] bg-[#CCCCCC] rounded-full"></div>
                    <button id="ButtonFilter" onclick="ShowDropdown()" class="focus:text-[#2F39FF]  group w-fit cursor-pointer">
                        <i class="w-[17px] h-[17px] group-hover:text-[#3A53F8]" data-feather="filter"></i>
                    </button>
                    <div id="DropdownFilter" class="hidden absolute rounded-md gap-y-[10px] p-[10px] z-[41] mt-[10px] top-[100%] -right-[5px] w-[200px] bg-white border-2 border-[#f5f5f5] shadow-xl">
                        <div class="group cursor-pointer w-full py-[5px] hover:bg-[#E7E7E7] flex flex-col items-center justify-center">
                            <p id="FilterOption" class="text-[13px] group-hover:text-[#2F39FF]">Nama Perlombaan</p>
                        </div>
                        <div class="group cursor-pointer w-full py-[5px] hover:bg-[#E7E7E7] flex flex-col items-center justify-center">
                            <p id="FilterOption" class="text-[13px] group-hover:text-[#2F39FF]">Nama Instansi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center w-[990px] pl-[30px] mt-[55px] gap-x-[30px] gap-y-[40px]">
            @foreach ($Lomba as $Data)
            <div class="group bg-white hover:scale-105 duration-200 ease-in cursor-pointer p-[15px] rounded-md border-2 border-[#f5f5f5] shadow-md w-fit h-fit">
                <div class="group relative overflow-hidden w-[240px] h-[221px] bg-black rounded-[3px]">
                    <div class="absolute z-40 group-hover:hidden bg-[#2F39FF] rounded-full top-[13px] right-[16px] px-[27px] py-[4px]">
                        <p class="text-[10px] font-medium text-white">Internasional</p>
                    </div>
                    <div class="group-hover:flex w-full h-full p-[20px] hidden flex-col justify-center items-center absolute z-30">
                        <p class="text-[11px] font-light line-clamp-6 italic text-white">"{{ $Data->persyaratan }}"</p>
                    </div>
                    <div class="w-full h-full absolute z-20 bg-black opacity-5 group-hover:opacity-75"></div>
                    <div>
                        <img src="storage{{ $Data->foto_lomba }}">
                    </div>
                </div>
                <div class="mx-[3px] mt-[10px] w-[240px]">
                    <p class="text-[16px] font-semibold line-clamp-1 -mb-[5px]">{{ $Data->nama_perlombaan }}</p>
                    <p class="text-[13px]">{{ $Data->Instansi->nama_instansi }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="flex flex-col gap-y-[50px]">
        <div class="grow mx-[20px] h-[390px] bg-white border-2 border-[#f5f5f5] rounded-[10px] shadow-lg">
            <p class="text-[18px] font-semibold mt-[17px] mx-[26px]">List Instansi Beasiswa</p>
            <div class="flex flex-col mt-[10px] mx-[15px] gap-y-[5px]">
                @foreach ($BestInstansi as $Data)
                <div class="flex flex-row gap-x-[11px] items-center px-[10px] py-[10px] hover:bg-slate-200">
                    <div class="w-[38px] h-[38px] rounded-full bg-black overflow-hidden">
                        <img src="\storage{{ $Data->foto_profile }}">
                    </div>
                    <div>
                        <p class="text-[13px] font-medium -mb-[3px]">{{ $Data->nama_instansi }}</p>
                        <p class="text-[11px]">Telah Mengajukan {{ $Data->lomba_count }} Beasiswa</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="grow mx-[20px] h-[390px] bg-white border-2 border-[#f5f5f5] rounded-[10px] shadow-lg">
            <p class="text-[18px] font-semibold mt-[17px] mx-[26px]">New Updates!</p>
            <div class="flex flex-col mt-[10px] mx-[15px] gap-y-[5px]">
                @foreach ($Highlight as $Data)
                <div class="flex flex-row items-center gap-x-[15px] px-[10px] py-[10px] hover:bg-slate-200">
                    <div class="w-[60px] h-[40px] bg-black overflow-hidden rounded-sm">
                        <img src="\storage{{ $Data->foto }}">
                    </div>
                    <div class="-mt-[5px]">
                        <p class="text-[13px] font-medium -mb-[3px] line-clamp-1">{{ $Data->nama_event }}</p>
                        <p class="text-[11px] line-clamp-1">"{{ $Data->persyaratan }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
