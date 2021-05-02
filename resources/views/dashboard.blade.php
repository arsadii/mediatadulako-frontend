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
    <div class="flex items-center justify-center w-full text-white bg-gray-900 h-14">
        <div class="flex items-center justify-between w-4/5">
            <div class="flex">
                <h1>F</h1>
                <h1>T</h1>
                <h1>Y</h1>
            </div>
            <div class ='flex text-xs font-normal'>
                <h1 class='mr-6' >+11 222 3333 44444</h1>
                <h1 > support@animediatadulako.com</h1>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center w-4/5 h-32 overflow-hidden bg-indigo-900">
        <div class="flex justify-center w-full ">
            <div class="flex items-end h-16 overflow-hidden">
                <img class='h-36' src="/img/logo.png" alt="">
            </div>
        </div>
    </div>

    {{-- Main Section --}}
    <div class="flex flex-col items-center justify-center ">

        {{-- Nav --}}
        <div class="sticky w-4/5 px-8 py-5 bg-gray-900">
            <nav class='flex items-center justify-between text-xs text-white'>
                <ul class='flex space-x-10'>
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

                <div class="text-gray-800">
                    <input type="text" placeholder='Search' class='w-64 p-2'>
                </div>
            </nav>
        </div>

        {{-- Berita Utama --}}
        <div class="grid w-4/5 grid-cols-3 gap-2 mt-2 text-white">
            <div class="col-span-2">
                <div class="relative overflow-hidden border-box">
                    <div class="absolute z-20 flex flex-col right-5 bottom-5 left-5">
                       <h1 class='px-3 py-2 mb-4 bg-indigo-700 w-min'> Automotive </h1>
                       <h1 class='text-xl font-bold'> A Discount Toner Caetridge is Better Than Ever</h1>
                    </div>
                    <img class='transition-all transform hover:scale-105' src="/img/image.jpg" alt="">
                </div>
            </div>
            <div class="flex flex-col space-y-2">
                <div class="relative overflow-hidden border-box">
                    <div class="absolute z-20 flex flex-col right-5 bottom-5 left-5">
                       <h1 class='px-3 py-2 mb-4 bg-indigo-700 w-min'> Automotive </h1>
                       <h1 class='text-lg font-bold'> A Discount Toner Caetridge is Better Than Ever</h1>
                    </div>
                    <img class='transition-all transform hover:scale-105' src="/img/image.jpg" alt="">
                </div>
                <div class="relative overflow-hidden border-box">
                    <div class="absolute z-20 flex flex-col right-5 bottom-5 left-5">
                       <h1 class='px-3 py-2 mb-4 bg-indigo-700 w-min'> Automotive </h1>
                       <h1 class='text-lg font-bold'> A Discount Toner Caetridge is Better Than Ever</h1>
                    </div>
                    <img class='transition-all transform hover:scale-105' src="/img/image.jpg" alt="">
                </div>
            </div>
        </div>


        {{-- Breaking News --}}
        <div class="w-4/5 p-4 mt-2 bg-white">
            <h1>
                <span class='text-red-500'>Breaking News:</span>  Astronomy Binoculars A Great Alternative
            </h1>
        </div>

        {{-- Berita --}}
        
        <div class="grid w-4/5 grid-cols-3 gap-10 mt-10">

            {{-- Berita Terbaru --}}
            <div class="col-span-2 p-4 bg-white">
                <div class="p-3 text-white bg-gray-900">
                    <h1 class='font-bold'>Berita Terbaru</h1>
                </div>

                <div class="mt-2">
                    <div class="flex justify-between">
                        <div class="relative w-2/5 overflow-hidden text-white border-box">
                            <div class="absolute z-20 flex flex-col right-5 bottom-5 left-5">
                                <h1 class='px-3 py-2 mb-4 bg-indigo-700 w-min'> Automotive </h1>
                            </div>
                            <img class='transition-all transform hover:scale-105' src="/img/image.jpg" alt="">
                        </div>
                        <div class="w-3/5 p-5">
                            <h1 class='text-lg font-bold transition-all duration-300 hover:text-indigo-700'>A Discount Toner Caetridge is Better Than Ever</h1>
                            <p class='text-gray-600'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam veniam corrupti modi quas ea ut quam nam rem odio! Labore laudantium aperiam quam eaque quibusdam.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="flex justify-between">
                        <div class="relative w-2/5 overflow-hidden text-white border-box">
                            <div class="absolute z-20 flex flex-col right-5 bottom-5 left-5">
                                <h1 class='px-3 py-2 mb-4 bg-indigo-700 w-min'> Automotive </h1>
                            </div>
                            <img class='transition-all transform hover:scale-105' src="/img/image.jpg" alt="">
                        </div>
                        <div class="w-3/5 p-5">
                            <h1 class='text-lg font-bold transition-all duration-300 hover:text-indigo-700'>A Discount Toner Caetridge is Better Than Ever</h1>
                            <p class='text-gray-600'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam veniam corrupti modi quas ea ut quam nam rem odio! Labore laudantium aperiam quam eaque quibusdam.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="flex justify-between">
                        <div class="relative w-2/5 overflow-hidden text-white border-box">
                            <div class="absolute z-20 flex flex-col right-5 bottom-5 left-5">
                                <h1 class='px-3 py-2 mb-4 bg-indigo-700 w-min'> Automotive </h1>
                            </div>
                            <img class='transition-all transform hover:scale-105' src="/img/image.jpg" alt="">
                        </div>
                        <div class="w-3/5 p-5">
                            <h1 class='text-lg font-bold transition-all duration-300 hover:text-indigo-700'>A Discount Toner Caetridge is Better Than Ever</h1>
                            <p class='text-gray-600'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam veniam corrupti modi quas ea ut quam nam rem odio! Labore laudantium aperiam quam eaque quibusdam.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Berita Pilihan--}}
            <div class="p-4 bg-white">
                <div class="p-3 text-white bg-gray-900">
                    <h1 class='font-bold'>Berita Pilihan</h1>
                </div>
                <div class="mt-2">
                    <div class="flex flex-col">
                        <div class="relative overflow-hidden text-white border-box">
                            <div class="absolute z-20 flex flex-col right-5 bottom-5 left-5">
                                <h1 class='px-3 py-2 mb-4 bg-indigo-700 w-min'> Automotive </h1>
                            </div>
                            <img class='transition-all transform hover:scale-105' src="/img/image.jpg" alt="">
                        </div>
                        <div class="py-5 ">
                            <h1 class='text-lg font-bold transition-all duration-300 hover:text-indigo-700'>A Discount Toner Caetridge is Better Than Ever</h1>
                            <p class='text-gray-600'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam veniam corrupti modi quas ea ut quam nam rem odio! Labore laudantium aperiam quam eaque quibusdam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="flex flex-col items-center justify-center w-full mt-40 text-white bg-gray-900">
            <div class="grid w-4/5 grid-cols-4 pt-40 pb-10">
                <div class="">
                    <h1 class='mb-5 text-xl font-bold'>Berita Teratas</h1>
                    <div class="flex flex-col space-y-3 font-light opacity-80">
                        <a href="">Managed Website</a>
                        <a href="">Manage Reputation</a>
                        <a href="">Power Tools</a>
                        <a href="">Marketing Service</a>
                    </div>
                </div>
                <div class="">
                    <h1 class='mb-5 text-xl font-bold'>Quick Links</h1>
                    <div class="flex flex-col space-y-3 font-light opacity-80">
                        <a href="">Jobs
                        <a href="">Brand Assets</a>
                        <a href="">Investor Relations</a>
                        <a href="">Terms of Services</a>
                    </div>
                </div>
                <div class="">
                    <h1 class='mb-5 text-xl font-bold'>Features</h1>
                    <div class="flex flex-col space-y-3 font-light opacity-80">
                        <a href="">Jobs
                        <a href="">Brand Assets</a>
                        <a href="">Investor Relations</a>
                        <a href="">Terms of Services</a>
                    </div>
                </div>
                <div class="">
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