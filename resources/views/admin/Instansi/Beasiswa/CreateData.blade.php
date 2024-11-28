@extends('Layout.AdminLayout')

@section('Content')
    <div class="w-full h-fit bg-white rounded-md py-5 px-8">
        <form action="/store-data-instansi-beasiswa" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-row justify-between">
                <div>
                    <p class="text-lg font-semibold">Tambah Instansi Baru</p>
                    <p class="text-sm font-normal text-gray-500 mb-5">Masukan Data Instansi Dengan Teliti</p>
                    <div class="relative z-0 w-96 mb-5">
                        <input name="NamaInstansi" value="{{ old('NamaInstansi') }}" autocomplete="off" type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" value="{{ old('namaInstansi') }}"/>
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Nama Instansi</label>
                    </div>
                    @error('NamaInstansi')
                        <p class="text-sm text-red-600 mb-5">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="relative z-0 w-96 mb-5">
                        <input name="NoTelephone" value="{{ old('NoTelephone') }}" autocomplete="off" type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" value="{{ old('noTelephone') }}"/>
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">No Telephone</label>
                    </div>
                    @error('NoTelephone')
                        <p class="text-sm text-red-600 mb-5">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="relative z-0 w-96 mb-5">
                        <input name="Alamat" value="{{ old('Alamat') }}" autocomplete="off" type="text" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" value="{{ old('alamatInstansi') }}"/>
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Alamat Instansi</label>
                    </div>
                    @error('Alamat')
                        <p class="text-sm text-red-600 mb-5">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="relative z-0 w-96 mb-5">
                        <input name="Email" value="{{ old('Email') }}" autocomplete="off" type="email" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" value="{{ old('emailInstansi') }}"/>
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email Instansi</label>
                    </div>
                    @error('Email')
                        <p class="text-sm text-red-600 mb-5">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="flex mt-14">
                        <div class="flex items-center h-5">
                            <input id="SubmitCheckbox" onclick="SubmitEnabled()" type="checkbox" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded mt-4 outline-0" required>
                        </div>
                        <div class="ms-4 text-sm">
                            <label for="helper-checkbox" class="font-bold text-base text-gray-900">Harap Cek lagi Kevalidan Data</label>
                            <p id="helper-checkbox-text" class="text-sm font-normal text-gray-500">Pastikan Data Valid Dan Benar Sebelum di Post </p>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <a href="/index-instansi-beasiswa" type="submit" class="p-3 pl-8 pr-8 bg-slate-400 mt-10 mb-10 w-fit rounded-md">
                            <p class="text-gray-900 text-md font-semibold">Cancel</p>
                        </a>
                        <button id="SubmitButton" onclick="confirm('Ingin Menyimpan Instansi Ini')" type="submit" class="disabled-submit-button ml-5 p-3 pl-8 pr-8 mt-10 mb-10 w-96 rounded-md" disabled>
                            <div class="flex flex-row justify-center items-center w-full h-full gap-x-2">
                                <i class="w-[20px] h-[20px] text-white" data-feather="file-plus"></i>
                                <p class="text-gray-100 font-semibold">Simpan Instansi</p>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-y-3">
                    <p class="text-[#B00101] font-medium text-[12px]">*Image Ini Bersifat Opsional Untuk foto Profile instansi</p>
                    <div class="flex flex-col overflow-hidden justify-center items-center relative w-[330px] h-[330px] border-2 border-dashed rounded-md border-black">
                        <img id="ImagePreview" class="absolute z-50 bg-contain h-full w-full hidden" src="">
                        <i class="w-[100px] h-[100px] text-black" data-feather="upload-cloud"></i>
                        <p class="text-[18px] font-bold">Upload Image Here!</p>
                        <p class="text-[13px]">maximum file size 5mb and format .png .jpg</p>
                    </div>
                    <p class="font-medium text-[12px]">File Size: <span id="DescSize">0</span> MB</p>
                    @error('FotoInstansi')
                        <p class="text-sm text-red-600 mb-5">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="FotoInput" class="cursor-pointer w-[250px] h-[38px] bg-[#58D42B] flex flex-col items-center justify-center rounded">
                        <p class="text-white font-semibold">Browse File</p>
                    </label>
                    <input class="hidden" type="file" name="FotoInstansi" id="FotoInput">
                </div>
            </div>
        </form>
    </div>
    <script src="\JavascriptDevelp\PreviewImage.js"></script>
    <script src="\JavascriptDevelp\FormButtonSwitch.js"></script>
@endsection
