<div class="fixed w-full h-16 bg-FFFEFE border-b-2 border-E8E8E8 z-50">
    <div class="h-full flex flex-row items-center justify-between px-10">
        <div>
            <img src="\webdevelp\logolobi\Logo-Lobi-01.png">
        </div>
        <div class="w-[766px] h-[34px] px-3 gap-x-3 flex flex-row items-center bg-E2DFDF rounded-[4px]">
            <img src="\webdevelp\icons\find-magnifier-search-zoom-look-svgrepo-com.svg" alt="">
            <form action="" class="w-full">
                @csrf
                <input type="search" class="w-full bg-transparent text-sm font-light italic focus:outline-none" placeholder="Search in here">
            </form>
        </div>
        <div class="flex flex-row items-center gap-x-9">
            <a href="/notification-request">
                <button class="p-[8px] rounded-full hover:bg-slate-200">
                    <img class="w-[22px] h-[17px]" src="\webdevelp\icons\icon _Envelope_.svg" alt="">
                </button>
            </a>
            <div class="flex flex-row items-center gap-x-4">
                <div class="w-[42px] h-[42px] overflow-hidden rounded-full">
                    <img class="w-full h-full" src="/webdevelp/testermodule/0876f937777e6c6c89f42b96c700dc37.png" alt="">
                </div>
                <div>
                    <p class="font-semibold text-xs">Admin Lobi Poliwangi</p>
                    <p class="font-light italic text-[10px]">User Id: 1</p>
                </div>
            </div>
        </div>
    </div>
        @include('admin.component.sidebar')
    </div>
</div>
