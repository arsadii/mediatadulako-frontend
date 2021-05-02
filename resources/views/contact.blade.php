<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 

    <title>Media Tadulako</title>
</head>
<body class='flex flex-col items-center w-screen bg-gray-200'>

    {{-- Section Sosmed Atas --}}
    <div class="flex items-center justify-between w-full p-2 text-white bg-gray-900 sm:justify-center h-14">
        <div class="flex items-center justify-between w-full sm:w-4/5">
            <div class="flex">
                <h1>F</h1>
                <h1>T</h1>
                <h1>Y</h1>
            </div>
            <div class ='flex flex-col text-xs font-normal text-right sm:flex-row'>
                <h1 class='sm:mr-6' >+11 222 3333 44444</h1>
                <h1 > support@animediatadulako.com</h1>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center w-full h-32 overflow-hidden bg-indigo-900 sm:w-4/5">
        <div class="flex justify-center w-full ">
            <div class="flex items-end h-16 overflow-hidden">
                <img class='h-36' src="/img/logo.png" alt="">
            </div>
        </div>
    </div>


    <div class="flex flex-col items-center justify-center">

        {{-- Nav --}}
        <div class="flex w-full px-8 py-5 bg-gray-900 sm:w-4/5">
            <nav class='flex flex-col items-center justify-between w-full space-y-2 text-xs text-white sm:space-y-0 sm:flex-row'>
                <ul class='flex flex-col space-y-2 text-center sm:space-y-0 sm:space-x-10 sm:flex-row'>
                    <li>
                        HOME
                    </li> 
                    <li>
                        ARCHIVE
                    </li>
                     <li>
                        CATEGORY
                    </li>
                     <li>
                        POST TYPES
                    </li>
                     <li>
                        ABOUT
                    </li>
                    <li>
                        CONTACT
                    </li>
                </ul>

                <div class="text-gray-800 ">
                    <input type="text" placeholder='Search' class='w-64 p-2'>
                </div>
            </nav>
        </div>

        {{-- Section Hero --}}

        <div class="w-full mt-2 sm:w-4/5">
            <div class="relative w-full h-64 overflow-hidden">
                <div style='background-color: rgba(0,0,0,0.500)' class="absolute flex items-center justify-center w-full h-full">
                    <h1 class='text-3xl font-bold text-white sm:text-6xl '>Kontak Kami</h1>
                </div>
                <div class="flex items-center justify-center w-full h-full overflow-hidden">
                    <img src="/img/image.jpg" class='min-h-full' alt="">
                </div>
            </div>
        </div>

        {{-- Kontak --}}
        <div class="grid w-full grid-rows-2 gap-10 p-4 mt-10 bg-white rounded sm:grid-rows-1 sm:grid-cols-3 sm:w-4/5">
            <div class="grid justify-center grid-rows-3 gap-1">
                <div class="flex items-start p-3 space-x-6">
                    <img src="/icon/home.svg" class='w-6' alt="">
                    <div class="">
                        <h1 class='mb-2 text-xl font-bold text-gray-800'>Kantor Kami</h1>
                        <p class='text-sm text-gray-500'>Lorem ipsum dolor sit amet consectetur</p>
                    </div>
                </div>
                <div class="flex items-start p-3 space-x-6">
                    <img src="/icon/email.svg" class='w-6' alt="">
                    <div class="">
                        <h1 class='mb-2 text-xl font-bold text-gray-800'>Email Kami</h1>
                        <p class='text-sm text-gray-500'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ipsam.</p>
                    </div>
                </div> 
                <div class="flex items-start p-3 space-x-6">
                    <img src="/icon/phone-call.svg" class='w-6' alt="">
                    <div class="">
                        <h1 class='mb-2 text-xl font-bold text-gray-800'>Telephone Kami</h1>
                        <p class='text-sm text-gray-500'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, ipsam.</p>
                    </div>
                </div>    
            </div>
            <form action="" class='flex flex-col col-span-2 '>
                <div class="flex flex-col space-y-2 sm:space-y-0 sm:space-x-2 sm:flex-row">
                    <div class="flex flex-col items-center w-full space-y-2 sm:w-1/2">
                        <input type="text" class='w-full p-3 border border-gray-300' placeholder="Nama">
                        <input type="text" class='w-full p-3 border border-gray-300' placeholder="Email">
                        <input type="text" class='w-full p-3 border border-gray-300' placeholder="Subject">
                    </div>
                    <div class="flex flex-col items-center justify-between w-full sm:w-1/2">
                        <textarea class='w-full p-3 bg-white border border-gray-300' placeholder="Pesan">
                        </textarea>
                    </div>
                </div>
                <button class='w-full p-3 mt-4 text-white bg-indigo-900'>Kirim</button>    

            </form>
        </div>

       
        {{-- Footer --}}
        <div class="flex flex-col items-center justify-center w-full mt-40 text-white bg-gray-900">
            <div class="grid w-4/5 grid-rows-4 pt-20 pb-10 sm:pt-40 sm:grid-rows-1 sm:grid-cols-4">
                <div class="mb-5">
                    <h1 class='mb-5 text-xl font-bold'>Berita Teratas</h1>
                    <div class="flex flex-col space-y-3 font-light opacity-80">
                        <a href="">Managed Website</a>
                        <a href="">Manage Reputation</a>
                        <a href="">Power Tools</a>
                        <a href="">Marketing Service</a>
                    </div>
                </div>
                <div class="mb-5">
                    <h1 class='mb-5 text-xl font-bold'>Quick Links</h1>
                    <div class="flex flex-col space-y-3 font-light opacity-80">
                        <a href="">Jobs
                        <a href="">Brand Assets</a>
                        <a href="">Investor Relations</a>
                        <a href="">Terms of Services</a>
                    </div>
                </div>
                <div class="mb-5">
                    <h1 class='mb-5 text-xl font-bold'>Features</h1>
                    <div class="flex flex-col space-y-3 font-light opacity-80">
                        <a href="">Jobs
                        <a href="">Brand Assets</a>
                        <a href="">Investor Relations</a>
                        <a href="">Terms of Services</a>
                    </div>
                </div>
                <div class="mb-5">
                    <h1 class='mb-5 text-xl font-bold'>Resources</h1>
                    <div class="flex flex-col space-y-3 font-light opacity-80">
                        <a href="">Guides</a>
                        <a href="">Research</a>
                        <a href="">Experts</a>
                        <a href="">Agencies</a>
                    </div>
                </div>
            </div>
            <div class="w-4/5 mb-40">
                Copyright ©2021 Media Tadulako
            </div>
        </div>

    </div>
    
</body>
</html>