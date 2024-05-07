<nav class="bg-white" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <!-- Logo -->
        <div class="flex-shrink-0 inline-flex justify-start">
          {{-- <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> --}}
          <h2 class="text-amber-400 font-extrabold">TOKO</h2>
          <h2 class="text-black">AnJaY</h2>
        </div>
        <!-- Navbar Links -->
        <div class="hidden md:block">
          {{-- {{-- <div class="ml-10 flex items-center space-x-4"> --}}
            {{-- <x-nav-link href="/" :active="request()->is('/')"> --}}
              {{-- <span class="inline-flex justify-center items-center mr-2 size-[20px] rounded-full text-gray-700 dark:text-neutral-200">
                <svg class="inline-flex justify-center item-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
              </span>Home
            </x-nav-link> --}}
            {{-- <x-nav-link href="blog" :active="request()->is('blog')">Blog</x-nav-link>
            <x-nav-link href="about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="contact" :active="request()->is('contact')">Contact</x-nav-link> --}}
          {{-- </div> --}}
        </div>
      </div>

      <!-- Search Bar -->
    <div class="inline-flex justify-end text-center m-2 md:px-2">
      <div class="md:block relative ml-3">
        <form class="w-xl mx-auto">
          <label for="default-search" class="sr-only">Search</label>
          <div class="relative">
            <input type="search" id="default-search" class="block mr-40 w-full pl-10 pr-3 py-2 text-sm text-gray-900 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-800" placeholder="Search Products, Type..." required />
            <button type="submit" class="absolute right-0 inset-y-0 px-4 py-2 text-white bg-amber-500 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:bg-amber-300 font-medium rounded-lg text-sm dark:bg-amber-400 dark:hover:bg-amber-500 dark:focus:ring-amber-700">Search</button>
          </div>
        </form>
      </div>

      <!-- Shop Chart Icon -->
      <div class="flex justify-end text-center m-2 sm:px-3">
        <div class="block sm:mx-auto">
          <a href="/shoppingCart" class="text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
          </a>
        </div>
  
        <!-- Favourite icon -->
        <div class="block ml-3 sm:mx-auto">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:fill-red-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
          </svg>
        </div>
      </div>
      
      <!-- Profile Dropdown -->
      <div class="hidden md:block relative text-center">
        <div>
          <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </button>
        </div>
        <div 
          x-show="isOpen"
          x-transition:enter="transition ease-out duration-100 transform"
          x-transition:enter-start="opacity-0 scale-95"
          x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-75 transform"
          x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-95"
          class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
          <!-- Active: "bg-gray-100", Not Active: "" -->
          <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Your Profile</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
        </div>
      </div>
    </div>

      <!-- Mobile Menu Button -->
      <div class="-mr-2 flex md:hidden">
        <button type="button" @click="isOpen = !isOpen" class="inline-flex items-center justify-center rounded-md bg-gray-100 p-2 text-gray-400 hover:bg-gray-300 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>


  <!-- Mobile Menu -->
  <div x-show="isOpen" class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
      <!-- Navbar Links -->
      {{-- <x-mobile-nav-link href="/" :active="request()->is('/')">Home</x-mobile-nav-link>
      <x-mobile-nav-link href="blog" :active="request()->is('blog')">Blog</x-mobile-nav-link>
      <x-mobile-nav-link href="about" :active="request()->is('about')">About</x-mobile-nav-link>
      <x-mobile-nav-link href="contact" :active="request()->is('contact')">Contact</x-mobile-nav-link> --}}
    </div>
    <!-- Profile Dropdown -->
    <div class="border-t border-gray-700 pb-3 pt-4">
      <div class="flex items-center px-5">
        <div class="flex-shrink-0">
          <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </div>
        <div class="ml-3">
          <div class="text-base font-medium leading-none text-white">Tom Cook</div>
          <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
        </div>
      </div>
      <div class="mt-3 space-y-1 px-2">
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Dashboard</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
      </div>
    </div>
  </div>
</nav>

<!-- sidebar -->
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-3" x-data="{ open: false }">
  <div class="flex items-center justify-between">
    <div class="flex justify-start items-center">
      <!-- Open sidebar button -->
      <button x-on:click="open = true" class="inline-flex justify-center px-4 py-2 text-gray-700 rounded-md">
        <svg class="w-6 h-6 text-gray-800 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
        </svg>
        <span class="block ml-2">Categories</span>
    </button>
  </div>
    <div class="flex justify-end space-x-4">
        <a href="/" class="text-gray-500">Home</a>
        <a href="/product" class="text-gray-500">Product</a>
        <a href="#" class="text-gray-500">Trending Product</a>
        <a href="/blog" class="text-gray-500">Blog</a>
        <a href="#" class="text-gray-500">Discount</a>
    </div>
  </div>
   <!-- Sidebar Overlay -->
  <div x-show="open" class="fixed inset-0 z-50 overflow-hidden">
    <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <!-- Sidebar Content -->
    <section class="absolute inset-y-0 left-0 pr-10 max-w-full flex">
      <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform -translate-x-full" class="w-screen max-w-md">
        <div class="h-full flex flex-col py-6 bg-white shadow-xl">
          <!-- Sidebar Header -->
          <div class="flex items-center justify-between px-4">
            <h2 class="text-xl font-semibold text-black">Search Categories</h2>
            <button x-on:click="open = false" class="text-gray-500 hover:text-gray-700">
              <span class="sr-only">Close</span>
              <svg class="h-6 w-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
          <!-- Search Input -->
          <div class="mt-4 px-4">
            <input type="text" placeholder="Search post here" class="w-full p-2 border border-gray-300 rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
          </div>
          <div class="mt-4 px-4">
            <p class="ml-2 text-gray-400">Results</p>
          </div>
          <!-- Sidebar Content -->
          <div class="mt-4 px-4 h-full overflow-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <!-- Card 1 -->
              <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-black mb-2">Cat. product 1</h3>
                <p class="text-gray-600">Content for card 1</p>
              </div>
              <!-- Card 2 -->
              <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-black mb-2">Cat. product 2</h3>
                <p class="text-gray-600">Content for card 2</p>
              </div>
              <!-- Card 3 -->
              <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-black mb-2">Cat. product 3</h3>
                <p class="text-gray-600">Content for card 3</p>
              </div>
              <!-- Card 4 -->
              <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-black mb-2">Cat. product 4</h3>
                <p class="text-gray-600">Content for card 4</p>
              </div>
              <!-- Card 5 -->
              <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-black mb-2">Cat. product 5</h3>
                <p class="text-gray-600">Content for card 5</p>
              </div>
              <!-- Card 6 -->
              <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-black mb-2">Cat. product 6</h3>
                <p class="text-gray-600">Content for card 6</p>
              </div>
              <!-- Card 7 -->
              <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-black mb-2">Cat. product 7</h3>
                <p class="text-gray-600">Content for card 7</p>
              </div>
              <!-- Card 8 -->
              <div class="bg-gray-50 hover:bg-gray-100 p-4 cursor-pointer rounded-md border border-gray-300 transition-colors duration-300">
                <h3 class="text-lg font-semibold text-black mb-2">Cat. product 8</h3>
                <p class="text-gray-600">Content for card 8</p>
              </div>
            </div>
          </div>
          <!-- Sidebar Footer -->
          <div class="mt-6 px-4">
            <button class="flex justify-center items-center bg-black text-white rounded-md text-sm p-2 gap-1">
              <svg width="1rem" height="1rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3 7C3 6.44772 3.44772 6 4 6H20C20.5523 6 21 6.44772 21 7C21 7.55228 20.5523 8 20 8H4C3.44772 8 3 7.55228 3 7ZM6 12C6 11.4477 6.44772 11 7 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H7C6.44772 13 6 12.5523 6 12ZM9 17C9 16.4477 9.44772 16 10 16H14C14.5523 16 15 16.4477 15 17C15 17.5523 14.5523 18 14 18H10C9.44772 18 9 17.5523 9 17Z" fill="currentColor"></path>
                </g>
              </svg> Filters </button>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
