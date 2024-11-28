<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Login Admin</title>
</head>
<body class="font-Poppins">
    <div class="absolute z-50 w-full ">
        <div class="py-[18px] px-[33px] flex flex-row items-center justify-between">
            <img class="" src="webdevelp\logolobi\Logo-Lobi-White-Longtext (1).png">
            <button class="w-[240px] h-[43px] border-[0.5px] mb-1 text-sm rounded-sm text-white font-medium hover:bg-white hover:text-black">Pergi ke Lobi Poliwangi</button>
        </div>
        <div class="flex flex-col items-center mt-12">
            <div class="flex flex-row justify-between px-[13px] pt-[19px] bg-[#B2B2B2] bg-opacity-20 rounded-xl backdrop-blur-md w-[844px] h-[417px] border-2 border-[#DEDEDE] border-opacity-75">
                <div class="ml-[35px]">
                    <p class="text-3xl font-bold text-white mt-[10px] mb-[50px]">Login Admin</p>
                    <form action="/auth-admin" method="POST" class="flex flex-col gap-y-4">
                        @csrf
                        <div class="py-[10px] gap-x-2 flex flex-row focus:border-2 justify-between border-b-[1px] border-b-white w-[360px]">
                            <input autocomplete="off" name="username" class="input-form-style-1 w-full" type="text" placeholder="Username" required>
                            <img class="w-[12.52px] h-fit" src="\webdevelp\icons\Usericon-mini.png">
                        </div>
                        <div class="py-[10px] gap-x-2 flex flex-row justify-between border-b-[1px] border-b-white w-[360px]">
                            <input autocomplete="off" name="password" class="input-form-style-1 w-full" type="text" placeholder="Password" required>
                            <img class="w-[12.52px] h-fit" src="\webdevelp\icons\PasswordIcon.png">
                        </div>
                        <button type="submit" class="mt-7 w-full py-[13px] bg-[#1B7CB8] text-white font-semibold rounded-[7px]">
                            Login
                        </button>
                    </form>
                </div>
                <img class="w-[398px] h-[385px]" src="\webdevelp\image\Iconpasskey.png">
            </div>
        </div>
    </div>
    <div class="w-full h-[641px]">
        <div class="bg-black absolute w-full h-full bg-opacity-60"></div>
        <img src="webdevelp\image\GedungA3Poliwangi.png">
    </div>
</body>
</html>
