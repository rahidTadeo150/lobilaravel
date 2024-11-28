<div class="relative w-full overflow-hidden">
    <div id="ContainerCarouselSlide" class="w-full">
        @foreach ($Highlight as $Data)
        <div id="CarouselSlide" class="CarouselNthChild transition-all duration-500 ease-in absolute w-[150px] h-[180px] rounded-lg overflow-hidden bg-slate-600 bottom-36">
            <img class="w-full h-full object-center" src="storage{{ $Data->foto }}">
        </div>
        @endforeach
    </div>
    <div class="absolute z-30 h-[467px] w-full">
        <div class="pt-[98px] pl-[90px]">
            <div class="w-fit h-[280px]">
                <div class="w-full h-full overflow-hidden">
                    <div id="ContainerCarousel" class="w-full flex flex-col">
                        @foreach ($Highlight as $Data)
                        <div id="CarouselContent" class="delay-100 hidden ease-in-out duration-200">
                            <p class="text-[33px] font-bold text-white">{{ $Data->nama_event }}</p>
                            <p class="text-[15px] font-medium -mt-2 text-white">{{ $Data->Instansi->nama_instansi }}</p>
                            <p class="text-[11px] mt-[21px] w-[569px] text-white">{{ $Data->persyaratan }}</p>
                            <button class="text-white text-[11px] mt-[21px] border-2 border-white rounded-full px-[36px] py-[9px]">
                                Lihat Selengkapnya
                            </button>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full flex flex-row items-center justify-center gap-x-2">
                    <button id="PreviousCarousel" class="cursor-pointer">
                        <i class="text-white w-[22px]" data-feather="chevron-left"></i>
                    </button>
                    <div id="ContainerIndicator" class="flex flex-row items-center gap-x-[8px]">
                        <div id="IndicatorCarousel" class="ease-in duration-150 scale-150 w-[4px] h-[4px] rounded-full bg-white"></div>
                        <div id="IndicatorCarousel" class="ease-in duration-150 scale-100 w-[4px] h-[4px] rounded-full bg-white"></div>
                        <div id="IndicatorCarousel" class="ease-in duration-150 scale-100 w-[4px] h-[4px] rounded-full bg-white"></div>
                        <div id="IndicatorCarousel" class="ease-in duration-150 scale-100 w-[4px] h-[4px] rounded-full bg-white"></div>
                        <div id="IndicatorCarousel" class="ease-in duration-150 scale-100 w-[4px] h-[4px] rounded-full bg-white"></div>
                    </div>
                    <button id="NextCarousel" class="cursor-pointer">
                        <i class="text-white w-[22px]" data-feather="chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full absolute z-20 h-[500px] bg-gradient-to-r from-[#6c6eeb] from-40%"></div>
    <div id="ContainerImageCarousel" class="absolute z-10 flex flex-col items-end w-full h-fit">
        @foreach ($Highlight as $Data)
        <div id="HighlightImg" class="hidden w-[869px] h-full">
            <img class="w-full" src="storage{{ $Data->foto }}">
        </div>
        @endforeach
    </div>
    <div class="w-full h-[500px] bg-[#6c6eeb]"></div>
</div>
<script src="\JavascriptDevelp\CarouselWebsite.js"></script>
