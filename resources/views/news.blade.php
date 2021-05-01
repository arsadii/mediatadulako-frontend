<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <title>Berita</title>
</head>
<body class='bg-gray-200'>
    {{-- Section Sosmed Atas --}}
    <div class="flex items-center justify-center text-white bg-gray-900 h-14">
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

    <div class="flex items-center justify-center h-32 overflow-hidden bg-white">
        <div class="flex w-4/5 ">
            <div class="h-16 overflow-hidden">
                <img class='h-32 overflow-hidden' src="/img/logo.png" alt="">
            </div>
        </div>
    </div>

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

        <div class="w-4/5 mt-2">
            <div class="relative w-full h-64 overflow-hidden">
                <div style='background-color: rgba(0,0,0,0.500)' class="absolute flex items-center justify-center w-full h-full">
                    <h1 class='text-6xl font-bold text-white'>Image Post</h1>
                </div>
                <div class="">
                    <img src="/img/image.jpg" alt="">
                </div>
            </div>
        </div>

        {{-- Breaking News --}}
        <div class="w-4/5 p-4 mt-2 bg-white">
            <h1>
                <span class='text-red-500'>Breaking News:</span>  Astronomy Binoculars A Great Alternative
            </h1>
        </div>

        {{-- Isi Berita --}}
        <div class="grid w-4/5 grid-cols-3 gap-10 mt-10">

            {{-- Berita Terbaru --}}
            <div class="col-span-2 p-4 bg-white">
                <div class="mt-2">
                    <div class="flex flex-col justify-between">

                        {{-- Gambar artikel --}}
                        <div class="relative overflow-hidden text-white border-box">
                            <img class='' src="/img/image.jpg" alt="">
                        </div>


                        <div class="p-5 ">
                            <h1 class='px-3 py-2 mb-4 text-white bg-indigo-700 w-min'> Automotive </h1>
                            <h1 class='mb-5 text-2xl font-bold transition-all duration-300 hover:text-indigo-700'>A Discount Toner Caetridge is Better Than Ever</h1>
                            
                            {{-- Isi Berita --}}
                            <p class='mb-3 text-gray-600'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, provident totam maiores nihil ipsum quos earum corporis odit doloribus obcaecati vitae ipsa delectus maxime molestiae eveniet vel animi, blanditiis libero excepturi iure sequi dolorum ab ullam voluptate. Perspiciatis, a itaque?</p>
                            <p class='mb-3 text-gray-600'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam veniam corrupti modi quas ea ut quam nam rem odio! Labore laudantium aperiam quam eaque quibusdam.</p>
                            <p class='pl-3 mb-3 text-gray-600 border-l-2 border-indigo-700'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem praesentium eum doloribus maiores consectetur quibusdam, minus iste nihil laboriosam sapiente corporis deserunt blanditiis totam inventore, magnam adipisci placeat aut alias.</p>
                        </div>

                        <div class="flex justify-between">
                            <a href="" class='p-3 text-xs font-light text-white bg-gray-900'>Berita sebelumnya</a>
                            <a href="" class='p-3 text-xs font-light text-white bg-gray-900'>Berita selanjutnya</a>
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