@extends('Layout.AdminLayout')

@section('Content')
    <p class="text-2xl font-semibold">Index Data Beasiswa</p>
    <p class="text-sm text-gray-700 font-normal">Daftar beasiswa yang telah terposting</p>
    <div class="w-full border-b-2 border-b-gray-700 mt-6 mb-8"></div>
    <a href="{{ route('Instansi.SelectInstansi', ['Beasiswa' => 'true']) }}">
        <button class=" flex flex-row gap-x-2 items-center py-[10px] px-[20px] bg-[#21CF11] mb-8 rounded">
            <i class="w-[20px] h-[20px] text-white" data-feather="plus"></i>
            <p class="text-white text-[13px] font-medium">Tambah Data</p>
        </button>
    </a>
    <div class="flex flex-row justify-between mb-3">
        <form action="{{ route('Beasiswa.Index') }}" method="get">
            @csrf
            <div class="flex flex-row gap-x-3">
                <div class="flex flex-row items-center gap-x-2 rounded-md px-3 bg-white border-[1px] ring-offset-1 border-gray-400">
                    <i class="w-[20px] h-[20px]" data-feather="search"></i>
                    <input name="search" class="focus:outline-none bg-transparent w-[350px] py-[9px] text-[14px]" type="search">
                </div>
                <div class="relative bg-[#3A3838] px-[15px] w-[140px] h-[41px] rounded-md">
                    <div id="ButtonFilter" onclick="ShowDropdown()" class="w-full h-full flex flex-row justify-between items-center">
                        <p class="text-white text-[15px]">Filter</p>
                        <i class="w-[20px] h-[20px] text-white" data-feather="chevron-down"></i>
                    </div>
                    <div id="DropdownFilter" class="hidden left-0 mt-[10px] py-[10px] px-[10px] w-[180px] bg-white shadow-xl rounded-md absolute z-50">
                        <ul class="w-full flex flex-col gap-y-2">
                            <li id="FilterOption" class="cursor-pointer hover:bg-gray-300 px-[5px] rounded-sm text-[13px] py-[5px] w-full">Nama Beasiswa</li>
                            <li id="FilterOption" class="cursor-pointer hover:bg-gray-300 px-[5px] rounded-sm text-[13px] py-[5px] w-full">Instansi Beasiswa</li>
                            <li id="FilterOption" class="cursor-pointer hover:bg-gray-300 px-[5px] rounded-sm text-[13px] py-[5px] w-full">Link Beasiswa</li>
                        </ul>
                        <input id="FilterRequest" value="Nama Beasiswa" name="Filter" type="hidden">
                    </div>
                </div>
            </div>
        </form>
        <div class="flex flex-row gap-x-3">
            <div>
                <a href="/index-instansi-beasiswa">
                    <button class="flex flex-row items-center justify-center gap-x-3 w-fit h-[41px] px-3 bg-blue-600 rounded-md">
                        <i class="w-[20px] h-[20px] text-white" data-feather="list"></i>
                        <p class="text-sm text-gray-50">Daftar Instansi</p>
                    </button>
                </a>
            </div>
            <div>
                <a href="/index-history-beasiswa">
                    <button class="flex flex-row items-center justify-center gap-x-3 w-fit h-[41px] px-3 bg-black rounded-md">
                        <i class="w-[20px] h-[20px] text-white" data-feather="clock"></i>
                        <p class="text-sm text-gray-50">History Data</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <p class="text-sm text-slate-800 mb-3">Data Yang Ditemukan : 12</p>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rounded-md rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-semibold">
                        Foto Brosur
                    </th>
                    <th scope="col" class="px-6 py-3 font-semibold">
                        Nama Beasiswa
                    </th>
                    <th scope="col" class="px-6 py-3 font-semibold">
                        Nama Instansi
                    </th>
                    <th scope="col" class="px-6 py-3 font-semibold">
                        Tanggal Register Terakhir
                    </th>
                    <th scope="col" class="px-6 py-3 font-semibold">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($Datas[0]))
                @foreach ($Datas as $Beasiswa)
                <tr class="bg-transparent border-b border-gray-300 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 text-sm font-normal text-gray-700 dark:text-white">
                        <img src="\storage{{ $Beasiswa->foto_beasiswa }}" class="w-20 h-20 rounded">
                    </th>
                    <td class="px-6 py-4 text-sm font-normal text-white">
                        {{ $Beasiswa->nama_beasiswa }}
                    </td>
                    <td class="px-6 py-4 text-sm font-normal text-white">
                        {{ $Beasiswa->Instansi->nama_instansi }}
                    </td>
                    <td class="px-6 py-4 text-sm font-normal text-white">
                        {{ $Beasiswa->tanggal_penutupan }}
                    </td>
                    <td class="px-6 py-4 text-sm font-normal text-white text-center">
                        <a href="/detail-lomba?id={{ $Beasiswa->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Preview</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5" class="text-center text-black py-6">Data Tidak Tersedia</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <script src="\JavascriptDevelp\DropdownFilter.js"></script>
@endsection
