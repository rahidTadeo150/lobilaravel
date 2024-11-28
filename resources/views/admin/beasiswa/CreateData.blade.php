@extends('Layout.AdminLayout')

@section('Content')
    <div>
        <p class="text-2xl font-semibold">Form Beasiswa</p>
        <p class="text-sm text-gray-700 font-normal">Form Pengisian Data Beasiswa Lobi Poliwangi</p>
        <div class="w-full border-b-2 border-b-gray-700 mt-6 mb-14"></div>
        <p class="text-[14px] font-semibold">Step 1: Instansi Penyelenggara</p>
        <p class="mb-5 text-[12px]">Berikut Detail Instansi Yang Anda Inputkan Untuk Penyelenggara Beasiswa ini</p>
        <div class="mb-16 max-w-sm min-w-full px-6 py-5 pt-7 bg-white rounded-lg shadow border-l-8 border-l-sky-400 border border-gray-200">
            <div class="flex flex-row items-center gap-x-5">
                <div class="w-[60px] h-[60px] bg-black rounded-full overflow-hidden">
                    <img src="\storage\{{ $DataInstansi->foto_profile }}">
                </div>
                <div>
                    <h5 class="text-[17px] font-semibold text-gray-900">{{ $DataInstansi->nama_instansi }}</h5>
                    <p class="mt-[3px] text-[13px] text-gray-700">{{ $DataInstansi->email }} ({{ $DataInstansi->no_telephone }})</p>
                    <p class="text-[13px] text-gray-700">{{ $DataInstansi->alamat }}</p>
                </div>
            </div>
            <div class="w-full text-end">
                <a href="{{ route('Instansi.SelectInstansi') }}" class="text-blue-500 font-medium text-[13px] hover:underline">
                    Ganti Instansi
                </a>
            </div>
        </div>
        <div>
            <form action="/store-data-beasiswa" method="post" enctype="multipart/form-data">
                @csrf
                <p class="text-[14px] font-semibold">Step 2: Detail Beasiswa Yang Akan Di Publish</p>
                <p class="mb-10 text-[12px]">Harap Memasukan Detail Data dengan Teliti dan Benar Pada Saat Penginputan!</p>
                <div class="flex flex-row justify-between items-center px-5">
                    <div>
                        <input type="hidden" name="IdInstansi" value="{{ $DataInstansi->id }}">
                        <div class="relative z-0 w-96 mb-5">
                            <input name="NamaBeasiswa" value="{{ old('NamaBeasiswa') }}" autocomplete="off" type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" />
                            <label for="floating_standard" class="absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Nama Beasiswa</label>
                            @error ('NamaBeasiswa')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative z-0 w-96 mb-9">
                            <input name="LinkPendaftaran" value="{{ old('LinkPendaftaran') }}" autocomplete="off" type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" />
                            <label for="floating_standard" class="absolute text-sm text-gray-900 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Link Pendaftaran Beasiswa</label>
                            @error ('LinkPendaftaran')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative z-0 w-[280px] mb-9">
                            <input name="TanggalPendaftaran" value="{{ old('TanggalPendaftaran') }}" autocomplete="off" type="date" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" />
                            <label for="floating_standard" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-9 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Tanggal Pendaftaran Dibuka</label>
                            @error ('TanggalPendaftaran')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative z-0 w-[280px] mb-9">
                            <input name="TanggalPenutupan" value="{{ old('TanggalPenutupan') }}" autocomplete="off" type="date" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" />
                            <label for="floating_standard" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-7 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-9 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Tanggal Penutupan Terakhir</label>
                            @error ('TanggalPenutupan')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative z-0 w-80 mb-9">
                            <select name="Tingkatan" autocomplete="off" type="date" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option value="" selected> - Pilih Tingkatan Beasiswa - </option>
                                @foreach ($Tingkatan as $Tingkatan)
                                <option value="{{ $Tingkatan->id }}" class="text-sm font-normal pl-2 pr-2">{{ $Tingkatan->tingkatan }}</option>
                                @endforeach
                            </select>
                            @error ('Tingkatan')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>{{ $message }}</p>
                            @enderror
                            <label for="floating_standard" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-8 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-9 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Tingkatan Beasiswa</label>
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Persyaratan Beasiswa</label>
                            <textarea value="{{ old('TanggalPenutupan') }}" name="Persyaratan" rows="4" class="block p-2.5 w-full outline-0 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                            @error ('Persyaratan')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex mt-14">
                            <div class="flex items-center h-5">
                                <input id="SubmitCheckbox" onclick="SubmitEnabled()" type="checkbox" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded mt-4 outline-0" required>
                            </div>
                            <div class="ms-4 text-sm">
                                <label for="helper-checkbox" class="font-bold text-base text-gray-900">Harap Cek lagi Kevalidan Data</label>
                                <p id="helper-checkbox-text" class="text-sm font-normal text-gray-500">Pastikan Data Valid Dan Benar Sebelum di Post </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-3">
                        <p class="text-black font-semibold text-[20px]">Upload Brosur Beasiswa</p>
                        <div class="flex flex-col overflow-hidden justify-center items-center relative w-[330px] h-[330px] border-2 border-dashed rounded-md border-black">
                            <img id="ImagePreview" class="absolute z-50 bg-contain h-full w-full hidden" src="">
                            <i class="w-[100px] h-[100px] text-black" data-feather="upload-cloud"></i>
                            <p class="text-[18px] font-bold">Upload Image Here!</p>
                            <p class="text-[13px]">maximum file size 5mb and format .png .jpg</p>
                        </div>
                        <p class="font-medium text-[12px]">File Size: <span id="DescSize">0</span> MB</p>
                        @error('FotoBeasiswa')
                            <p class="text-sm text-red-600 mb-5">
                                {{ $message }}
                            </p>
                        @enderror
                        <label for="FotoInput" class="cursor-pointer w-[250px] h-[38px] bg-[#58D42B] flex flex-col items-center justify-center rounded">
                            <p class="text-white font-semibold">Browse File</p>
                        </label>
                        <input class="hidden" type="file" name="FotoBeasiswa" id="FotoInput">
                    </div>
                </div>
                <div class="flex flex-row">
                    <a href="/index-instansi-beasiswa" type="submit" class="p-3 pl-8 pr-8 bg-slate-400 mt-10 mb-10 w-fit rounded-md">
                        <p class="text-gray-900 text-md font-semibold">Cancel</p>
                    </a>
                    <button id="SubmitButton" onclick="confirm('Ingin Menyimpan Instansi Ini')" type="submit" class="disabled-submit-button ml-5 p-3 pl-8 pr-8 mt-10 mb-10 w-96 rounded-md" disabled>
                        <div class="flex flex-row justify-center items-center w-full h-full gap-x-2">
                            <i class="w-[20px] h-[20px] text-white" data-feather="file-plus"></i>
                            <p class="text-gray-100 font-semibold">Simpan Beasiswa</p>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="\JavascriptDevelp\PreviewImage.js"></script>
    <script src="\JavascriptDevelp\FormButtonSwitch.js"></script>
@endsection
