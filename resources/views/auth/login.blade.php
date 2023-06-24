<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <!DOCTYPE html>
    <html lang="en" data-theme="light">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>

<body>
    <div class=" min-h-screen  justify-center  flex flex-col items-center bg-gray-100">
        <div class="w-2/5">
            <div class="card h-min bg-orange-300   z-2 shadow-lg shadow-gray-400 relative ">
                <div class="avatar text-center bg-stone-400 w-24 h-24 rounded-full justify-center text-white   mx-auto -translate-y-12">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 m-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                <form method="POST" action="{{route('login.store')}}" class=" mx-0 px-10 -translate-y-8">
                    @csrf
                    <label class="input-group my-3 ">
                        <span class="bg-stone-400 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input name="email" type="email" placeholder="Enter your Email" class="w-full input  " required />
                    </label>
                    <label class="input-group">
                        <span class="bg-stone-400 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input name="password" type="password" placeholder="Enter your password" class="w-full input " required />
                    </label>
                    <p class="text-white mt-8 -mb-5" >Dont have an account!<a  href="{{route('register.create')}}">Login </a> </p>
            </div>
            <div class="px-8 ">
                <button type="submit" class=" w-full bg-orange-300 rounded-b-lg  h-12 text-white shadow-lg shadow-gray-400">Submit</button>
            </div>
            </form>
        </div>
    </div>




    @vite(['resources/js/main.ts','resources/js/file-upload.ts'])
</body>

</html>