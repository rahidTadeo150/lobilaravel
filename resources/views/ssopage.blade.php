<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>SSO Poliwangi</title>
</head>
<body class="w-screen bg-gray-200 font-Poppins">
    {{-- Navbar --}}
    <div class="w-screen h-14 bg-slate-100 shadow-lg">
        {{-- Navbar elemen --}}
        <div class="h-full flex flex-row items-center justify-between px-12">
            <p class="text-lg font-medium">Poliwangi SSO</p>
            <p class="text-sm text-gray-600">Login</p>
        </div>
    </div>
    {{-- Bodypage --}}
    <div class="w-full">
        {{-- Login field --}}
        <div class="flex justify-center items-center m-24">
            {{-- Login card --}}
            <div class="w-3/5 bg-white shadow-md rounded-md">
                <div class="w-full pl-10 bg-gray-100 h-12 shadow-md flex items-center">
                    <p class="font-normal text-sm">Login</p>
                </div>
                {{-- Login form field --}}
                <div class="w-full px-36 py-14">
                    <form action="/auth-user" method="POST" class="w-full flex flex-col justify-center items-center  gap-y-4">
                        {{-- Input Area --}}
                        @csrf
                        <div class="w-full flex flex-row justify-between items-center">
                            <label for="username" class="text-sm">Username</label>
                            <input id="username" name="username" type="text" class="inputcolumn1">
                        </div>
                        <div class="w-full flex flex-row justify-between items-center">
                            <label for="password" class="text-sm">Password</label>
                            <input id="password" name="password" type="password" class="inputcolumn1">
                        </div>
                        {{-- Submit form --}}
                        <div class="w-2/4 flex flex-row items-center gap-x-4">
                            <input type="submit" class="login-btn" value="Login">
                            <a href="" class="text-sm text-blue-400 underline">Lupa Passoword?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
