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
       
            <div class="card w-96 bg-sky-100 text-gray-500  shadow-lg shadow-sky-200 shadow-inner ">
                <div class="card-body items-center text-center">
                    <h1 class="card-title">manage your support tickets now !</h1>
                   
                    <div class="card-actions justify-end mt-10">
                        <a href="{{('login')}}"  class="btn btn-primary bg-sky-600 shadow-lg shadow-sky-200 shadow-inner hover:bg-sky-500">Login</a>
                        <a  href="{{route('register.create')}}" class="btn btn-primary bg-gray-500 shadow-lg shadow-sky-200 shadow-inner hover:bg-gray-400">Register</a>
                    </div>
                </div>
            </div>

        </div>
    </div>




    @vite(['resources/js/main.ts','resources/js/file-upload.ts'])
</body>

</html>