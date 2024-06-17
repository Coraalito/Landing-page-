<header class="bg-white text-gray-600">
    <nav class="container mx-auto flex justify-between items-center p-5 md:p-0 border-b-2 border-gray-200 ">
        <div class="flex flex-row md:space-x-16 space-x-3 items-center ">
          <!-- Mobile Menu Button -->
             <div class="md:hidden  order-1 m-2 ">
                <button id="menuButton">
                    <svg width="16" height="15" xmlns="http://www.w3.org/2000/svg"><path d="M16 12v3H0v-3h16Zm0-6v3H0V6h16Zm0-6v3H0V0h16Z" fill="#69707D" fill-rule="evenodd"/></svg>               
                </button>
            </div>
      
            <!-- Logo -->
            <div class="order-2 md:order-1 ">
                <img src="{{ asset('logo.svg') }}" alt="Logo" loading="lazy"  > 
            </div>

            <!-- Links -->
            <div class="hidden md:flex order-1 md:order-2 mt-12 space-x-2">
                <a href="#" class="hover:text-black px-3 text-gray-500 border-b-4 hover:border-orange-500 border-white pb-10">Collections</a>
                <a href="#" class="hover:text-black px-3 text-gray-500 border-b-4 hover:border-orange-500 border-white pb-10">Men</a>
                <a href="#" class="hover:text-black px-3 text-gray-500 border-b-4 hover:border-orange-500 border-white pb-10">Women</a>
                <a href="#" class="hover:text-black px-3 text-gray-500 border-b-4 hover:border-orange-500 border-white pb-10">About</a>
                <a href="#" class="hover:text-black px-3 text-gray-500 border-b-4 hover:border-orange-500 border-white pb-10">Contact</a>
            </div>
        </div>

        <!-- Icons -->
        <div class="flex items-center space-x-5 sm:space-x-12 order-3 px-5 ">
            <!-- Cart Icon -->
            <div>
                <button id="openmodal" class="relative mt-4">
                    <svg width="26" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="#69707D" fill-rule="nonzero"/></svg>
                    <span id ="items" class="absolute -top-3 left-3 bg-orange-500 text-white text-sm rounded-full px-2 py-0"></span>
                   <!-- Modal -->
                   @include('components.modal')
                </button>
            </div>

            <!-- User Icon -->
            <div>
                <img src="{{ asset('images/image-avatar.png') }}" loading="lazy"  alt="Icon User" class="h-8 md:h-12 w-auto rounded-full hover:ring-2 hover:ring-orange-400 cursor-pointer">
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white text-black font-extrabold">
        <a href="#" class="block px-5 py-2 hover:bg-gray-100">Collections</a>
        <a href="#" class="block px-5 py-2 hover:bg-gray-100">Men</a>
        <a href="#" class="block px-5 py-2 hover:bg-gray-100">Women</a>
        <a href="#" class="block px-5 py-2 hover:bg-gray-100">About</a>
        <a href="#" class="block px-5 py-2 hover:bg-gray-100">Contact</a>
    </div>

</header>

