     // Mobile menu toggle
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    //...............................cart ......................................

    document.addEventListener('DOMContentLoaded', () => {
        const counterElement = document.getElementById('counter');
        const incrementButton = document.getElementById('increment');
        const decrementButton = document.getElementById('decrement');
        const itemCart = document.getElementById('items');
        const itemsButton= document.getElementById('cart');
        const cartModal = document.getElementById('cartmodal');
        const modalContent = document.getElementById('modalcontent');
        const OpenModal = document.getElementById('openmodal');
      
        let count = 0;
        let total = 0;
        
        // incrementar items
        incrementButton.addEventListener('click', () => {
            count++;
            counterElement.textContent = count;
        });
    
        // decrementar items
        decrementButton.addEventListener('click', () => {
            if (count > 0) {
                count--;
                counterElement.textContent = count;
            }
        });

        // agregar items al carrito
        itemsButton.addEventListener('click', () => {
            itemCart.textContent = count;
            updateModal();
        });

        // abrir modal y cerrar modal
        OpenModal.addEventListener('click', () => {
           
            if (cartModal.classList.contains('hidden')) {
                cartModal.classList.remove('hidden');
            }else {
                cartModal.classList.add('hidden');
            }
        });

        // actualizar modal
        function updateModal() {
            const imagePath = 'images/image-product-1-thumbnail.jpg';
            total = count * 125;
            if (count > 0) {
                modalContent.innerHTML = ` 
                <div class="flex  items-center">
                    <div class="flex-none w-20 px-3">
                        <img src="${imagePath}" alt="Imagen" class="w-full h-full object-cover rounded">
                    </div>
                    <div class=" text-left text-gray-600 ">
                        <span class="">Fall Limited Edition Sneakers</span>
                        <br>
                        <span>$125.00 x ${count} </span>
                        <span class="font-bold mx-2">${total }.00 </span>
                    </div>
                    <div class="flex-none w-5 ml-6  ">
                        <svg  width="14" height="16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 2.625V1.75C0 1.334.334 1 .75 1h3.5l.294-.584A.741.741 0 0 1 5.213 0h3.571a.75.75 0 0 1 .672.416L9.75 1h3.5c.416 0 .75.334.75.75v.875a.376.376 0 0 1-.375.375H.375A.376.376 0 0 1 0 2.625Zm13 1.75V14.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 1 14.5V4.375C1 4.169 1.169 4 1.375 4h11.25c.206 0 .375.169.375.375ZM4.5 6.5c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Zm3 0c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Zm3 0c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Z" id="a"/></defs><use fill="#C3CAD9" fill-rule="nonzero" xlink:href="#a"/></svg>
                    </div>
                </div>
                
                <div class="p-3">
                    <button id="checkoutButton" class="bg-orange-500 hover:bg-amber-700 text-white p-4 rounded-lg mt-4 w-full font-bold">Checkout</button>
                </div>
            `;
            
            } else {
                modalContent.innerHTML = `<p class="py-14 text-gray-500 font-bold">Your cart is empty.</p>`;

            }
        }

       
    });
