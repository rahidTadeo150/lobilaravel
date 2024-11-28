@extends('Layout.AdminLayout')

@section('Content')
    <div class=" h-96 overflow-hidden relative -ml-4 -mr-4">
        <img class=" h-80 absolute shadow-xl border border-gray-700 z-20 rounded-md -translate-y-[50%] -translate-x-[50%] top-[50%] left-[50%]" src="\webdevelp\testermodule\posterdiesnat_ig-2.png">
        <div class="w-full h-full bg-black opacity-40 absolute z-10"></div>
        <div class="w-full overflow-hidden">
            <img class="bg-contain z-0 w-full -translate-y-1/4 blur-sm" src="\webdevelp\testermodule\posterdiesnat_ig-2.png">
        </div>
    </div>
    <div class="w-full flex flex-row justify-between mt-8">
        <div class="w-2/6 bg-white shadow-lg border border-gray-300 border-l-4 border-l-[#315BC9] pt-8 pb-14 pl-8 pr-8 rounded-md">
            <div>
                <p class="text-3xl font-bold mb-2">Lomba Poster Tahunan</p>
                <p class="w-fit h-fit p-1.5 pl-4 pr-4 bg-[#315BC9] rounded-lg text-sm text-slate-100 font-medium">Bank BCA</p>
            </div>
            <div class="mt-6">
                <p class="text-sm font-medium">Status Saat Ini</p>
                <p class="text-sm font-semibold text-emerald-700">
                    <span class="mr-2"><i class="fa-solid fa-circle-check"></i></span>Aktif
                </p>
            </div>
            <div class="mt-6">
                <p class="text-sm font-medium">Tanggal Pembukaan Register</p>
                <p class="text-sm font-semibold"><span class="mr-2"><i class="fa-regular fa-calendar"></i></span>12-09-2025</p>
            </div>
            <div class="mt-6">
                <p class="text-sm font-medium">Tanggal Penutupan Register</p>
                <p class="text-sm font-semibold"><span class="mr-2"><i class="fa-regular fa-calendar"></i></span>12-09-2025</p>
            </div>
            <div class="mt-6">
                <p class="text-sm font-medium">Tingkatan Beasiswa</p>
                <p class="text-sm font-semibold"><span class="mr-2"><i class="fa-solid fa-earth-americas"></i></span>Internasional</p>
            </div>
        </div>
        <div class="w-[650px] bg-white shadow-lg border border-gray-300 border-l-4 border-l-[#315BC9] rounded-md p-6">
            <div class="">
                <p class="text-base font-semibold mb-2">Persyaratan Beasiswa</p>
                <div class="w-full h-[100px] py-2 px-3 bg-gray-200 rounded-md overflow-y-scroll">
                    <p class="text-sm font-normal">Bebas</p>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-base font-semibold mb-2">Link Pendaftaran Beasiswa</p>
                <div class="w-full py-2 px-3 bg-gray-200 rounded-md">
                    <a href="asdasdasdasdasd">
                        <p class="text-sm text-blue-600 font-normal hover:underline"><span class="mr-2 text-black"><i class="fa-solid fa-link"></i></span>asdasdasdasdasd</p>
                    </a>
                </div>
            </div>
            <p class="mt-5 text-base font-semibold mb-2">Di Buat Atau Di Edit Oleh</p>
            <div class="flex flex-row items-center">
                <div class="w-12 h-12 rounded-full overflow-hidden">
                    <img src="\webdevelp\testermodule\0876f937777e6c6c89f42b96c700dc37.png" class="w-full h-full">
                </div>
                <div class="-mt-1">
                    <p class="text-sm font-medium ml-2">Admin Lobi Poliwangi</p>
                    <p class="text-xs font-normal ml-2">Pada 12-09-2024</p>
                </div>
            </div>
            <div class="w-full flex flex-row mt-10">
                <a href="/dashboard-admin/index-data-beasiswa/edit-data/" class="text-sm w-fit h-fit p-3 rounded cursor-pointer bg-yellow-500 text-gray-100 mr-4" type="submit"><span class="mr-2"><i class="fa-solid fa-pen-to-square"></i></span>Edit Data Ini</a>
                <form action="/dashboard-admin/delete-data-beasiswa/" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="idInstansiLama" value="">
                    <button class="w-fit h-fit p-3 bg-red-600 hover:bg-red-500 text-sm text-gray-200 rounded cursor-pointer"type="submit"><span class="mr-2"><i class="fa-solid fa-trash"></i></span>Nonaktifkan Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
