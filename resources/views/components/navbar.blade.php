<header class="bg-white text-gray-600">
    <nav class="container mx-auto flex justify-between items-center p-5 md:p-0 border-b-2 border-gray-200">

        
        <div class="flex flex-row md:space-x-16 space-x-3 items-center ">
          <!-- Mobile Menu Button -->
             <div class="md:hidden  order-1 m-2 ">
                <button id="menuButton">
                    <img src="{{ asset('icons/icon-menu.svg') }}" alt="Boton responsivo" class="px-2" loading="lazy" >
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
                <button id="cartButton" class="relative">
                    <img src="{{ asset('icons/icon-cart.svg') }}" alt="Carrito de compras de sneakers" class="h-6 mt-2" loading="lazy" >
                    <span class="absolute top-0 left-4 bg-orange-500 text-white text-xs rounded-full px-2">2</span>
                    <!-- Modal -->
                    <div id="cartModal" class="hidden absolute right-0 mt-2 w-64 bg-white text-black p-4 shadow-lg z-50 rounded-lg">
                        <h2 class="text-lg font-bold mb-4">Cart</h2>
                        <p>Your cart is empty.</p>
                    </div>
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

