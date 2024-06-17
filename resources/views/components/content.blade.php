<div class="flex items-center justify-center ">
    <div class="flex flex-col md:flex-row items-center bg-white overflow-hidden max-w-6xl ">
        <!-- Sección de swiper -->
        <div class="w-full md:w-1/2 md:p-20">
            <img src="{{asset('images/image-product-1.jpg')}}" alt="Imagen" class="w-full h-full object-cover md:rounded-2xl">
        </div>
        <!-- Sección de Contenido -->
        <div class="w-full md:w-1/2 p-12">
            <p class="text-amber-600 mb-4 text-md font-bold tracking-widest">SNEAKER COMPANY</p>
            <h2 class="text-slate-800 font-bold text-4xl leading-tight">Fall Limited Edition Sneakers</h2>
            <p class="text-gray-500 text-base mb-5 mt-8 leading-relaxed">These low-profile sneakers are your perfect casual wear companion.
                Featuring a durable rubber outer sole, they’ll withstand everything the weather can offer.</p>
            </p>
       
        
            <div class="grid grid-flow-row-dense md:grid-cols-1 md:grid-rows-1  grid-cols-2  justify-between ">
                <div class="flex items-center space-x-4 my-1">
                    <p class="text-slate-800 text-2xl font-bold">$125.00</p>
                    <p class="text-orange-500 bg-orange-100 px-2 py-1 rounded-lg text-xs font-bold">50%</p>
                </div>
                <div class="flex justify-end items-center  md:justify-start md:items-center">
                    <p id="price" class="text-gray-300 text-base line-through font-semibold">$250.00</p>
                </div>
            </div>
          
            <div class="md:flex items-center md:space-x-6 mt-5 ">
                <div class="bg-slate-50 rounded-md  flex items-center space-x-6 font-bold text-2xl justify-between  my-2 ">
                    <!-- Botón de menos -->
                    <button id="decrement" class=" text-amber-600 px-3 py-1">
                        -
                    </button>
                    <!-- Contador -->
                    <span id="counter" class="text-md">0</span>
                    <!-- Botón de más -->
                    <button id="increment" class=" text-amber-600 px-3 py-1">
                        +
                    </button>
                </div>      

                  <button idd="cart" class="w-full bg-orange-950 shadow-xl text-white text-md font-bold px-16 py-4 my-2 rounded-lg hover:bg-orange-700 flex items-center space-x-5 justify-center ">
                    <svg id="icon" width="22" height="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="currentColor" fill-rule="nonzero"/>
                    </svg>
                    <p>Add to card</p>    
                </button>

            </div>
        </div>
    </div>
</div>