<x-layout>
    <div class="header">
        <x-slot:title>Home Page</x-slot:title>
    </div>
    <div class="max-w-auto mx-auto" style="z-index: 999 !important;">
        <!-- Slider -->
        <div data-hs-carousel='{
            "loadingClasses": "opacity-0",
            "isAutoPlay": true
        }' class="relative">
        <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
            <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-100 p-6">
                <span class="self-center text-4xl text-gray-800 transition duration-700">First slide</span>
                </div>
            </div>
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-200 p-6">
                <span class="self-center text-4xl text-gray-800 transition duration-700">Second slide</span>
                </div>
            </div>
            <div class="hs-carousel-slide">
                <div class="flex justify-center h-full bg-gray-300 p-6">
                <span class="self-center text-4xl text-gray-800 transition duration-700">Third slide</span>
                </div>
            </div>
            </div>
        </div>

        <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-s-lg">
            <span class="text-2xl" aria-hidden="true">
            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m15 18-6-6 6-6"></path>
            </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 rounded-e-lg">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
            </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
            <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
            <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
            <span class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer"></span>
        </div>
    </div>
    <!-- End Slider -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 mt-4 bg-white">
            <div class="col-span-1">
                <h3 class="text-left">Our Top Categories</h3>
            </div>
            <div class="col-span-1 flex justify-end">
                <a href="#" class="text-blue-500 btn">See All</a>
            </div>
        </div>
        <div class="relative flex overflow-x-auto justify-center text-center mt-4">
            <div class="py-4 whitespace-nowrap flex flex-wrap justify-center sm:justify-start">
                <span class="text-xl mx-4 my-2">
                    <img src="" class="bg-gray-100 w-20 h-20 rounded-full object-cover">
                    <p>Product 1</p>
                </span>
                <span class="text-xl mx-4">
                    <img src="" class="bg-gray-100 w-20 h-20 rounded-full object-cover">
                    <p>Product 2</p>
                </span>
                <span class="text-xl mx-4">
                    <img src="" class="bg-gray-100 w-20 h-20 rounded-full object-cover">
                    <p>Product 3</p>
                </span>
                <span class="text-xl mx-4">
                    <img src="" class="bg-gray-100 w-20 h-20 rounded-full object-cover">
                    <p>Product 4</p>
                </span>
                <span class="text-xl mx-4">
                    <img src="" class="bg-gray-100 w-20 h-20 rounded-full object-cover">
                    <p>Product 5</p>
                </span>
                <span class="text-xl mx-4">
                    <img src="" class="bg-gray-100 w-20 h-20 rounded-full object-cover">
                    <p>Product 6</p>
                </span>
                <span class="text-xl mx-4">
                    <img src="" class="bg-gray-100 w-20 h-20 rounded-full object-cover">
                    <p>Product 7</p>
                </span>
                <span class="text-xl mx-4">
                    <img src="" class="bg-gray-100 w-20 h-20 rounded-full object-cover">
                    <p>Product 8</p>
                </span>
            </div>
        </div>
        <div class="grid grid-cols-2 mt-4 bg-white rounded-2xl text-center p-2 justify-center">
        <div class="col-span-1">
            <h3 class="text-left">Our Top Product</h3>
        </div>
        <div class="col-span-1 flex justify-end">
            <div class="flex items-center justify-center rounded-full bg-gray-300 w-8 h-8 m-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                </svg>
            </div>                
            <div class="flex items-center justify-center rounded-full bg-gray-300 w-8 h-8 m-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>                      
            </div>                
        </div>
    </div>

<!-- top product content -->
<div class="mx-auto">
    <div class="p-1 flex flex-wrap items-center justify-center">
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-300 rounded-lg max-w-xs shadow hover:scale-110 ease-in duration-150">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative pt-10 h-full bg-white px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Rp. 1</span>
                <span class="block opacity-75 -mb-1">Indoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Peace Lily</span>
                    <span>
                        <button class="rounded-full bg-white text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-orange-600 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                              </svg>                              
                        </button>

                        <button class="rounded-full bg-white text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-orange-600 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-300 rounded-lg max-w-xs shadow hover:scale-110 ease-in duration-150">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative pt-10 h-full bg-white px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Rp. 1</span>
                <span class="block opacity-75 -mb-1">Indoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Peace Lily</span>
                    <span class="block">
                        <button class="rounded-full bg-white text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-orange-600 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                              </svg>                              
                        </button>
                        <button class="rounded-full bg-white text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-orange-600 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-300 rounded-lg max-w-xs shadow hover:scale-110 ease-in duration-150">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative pt-10 h-full bg-white px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Rp. 1</span>
                <span class="block opacity-75 -mb-1">Indoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Peace Lily</span>
                    <span>
                        <button class="rounded-full bg-white text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-orange-600 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                              </svg>                              
                        </button>

                        <button class="rounded-full bg-white text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-orange-600 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-300 rounded-lg max-w-xs shadow hover:scale-110 ease-in duration-150">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative pt-10 h-full bg-white px-10 flex items-center justify-center">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">Rp. 1</span>
                <span class="block opacity-75 -mb-1">Indoor</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl">Peace Lily</span>
                    <span>
                        <button class="rounded-full bg-white text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-orange-600 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                              </svg>                              
                        </button>

                        <button class="rounded-full bg-white text-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-orange-600 w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-layout>
