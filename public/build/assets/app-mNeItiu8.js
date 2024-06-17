const r=document.getElementById("menuButton"),g=document.getElementById("mobileMenu");r.addEventListener("click",()=>{g.classList.toggle("hidden")});document.addEventListener("DOMContentLoaded",()=>{const n=document.getElementById("counter"),o=document.getElementById("increment"),c=document.getElementById("decrement"),l=document.getElementById("items"),i=document.getElementById("cart"),e=document.getElementById("cartmodal"),d=document.getElementById("modalcontent"),a=document.getElementById("openmodal");let t=0,s=0;o.addEventListener("click",()=>{t++,n.textContent=t}),c.addEventListener("click",()=>{t>0&&(t--,n.textContent=t)}),i.addEventListener("click",()=>{l.textContent=t,m()}),a.addEventListener("click",()=>{e.classList.contains("hidden")?e.classList.remove("hidden"):e.classList.add("hidden")});function m(){const u="images/image-product-1-thumbnail.jpg";s=t*125,t>0?d.innerHTML=` 
                <div class="flex  items-center">
                    <div class="flex-none w-20 px-3">
                        <img src="${u}" alt="Imagen" class="w-full h-full object-cover rounded">
                    </div>
                    <div class=" text-left text-gray-600 ">
                        <span class="">Fall Limited Edition Sneakers</span>
                        <br>
                        <span>$125.00 x ${t} </span>
                        <span class="font-bold mx-2">${s}.00 </span>
                    </div>
                    <div class="flex-none w-5 ml-6  ">
                        <svg  width="14" height="16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M0 2.625V1.75C0 1.334.334 1 .75 1h3.5l.294-.584A.741.741 0 0 1 5.213 0h3.571a.75.75 0 0 1 .672.416L9.75 1h3.5c.416 0 .75.334.75.75v.875a.376.376 0 0 1-.375.375H.375A.376.376 0 0 1 0 2.625Zm13 1.75V14.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 1 14.5V4.375C1 4.169 1.169 4 1.375 4h11.25c.206 0 .375.169.375.375ZM4.5 6.5c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Zm3 0c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Zm3 0c0-.275-.225-.5-.5-.5s-.5.225-.5.5v7c0 .275.225.5.5.5s.5-.225.5-.5v-7Z" id="a"/></defs><use fill="#C3CAD9" fill-rule="nonzero" xlink:href="#a"/></svg>
                    </div>
                </div>
                
                <div class="p-3">
                    <button id="checkoutButton" class="bg-orange-500 hover:bg-amber-700 text-white p-4 rounded-lg mt-4 w-full font-bold">Checkout</button>
                </div>
            `:d.innerHTML='<p class="py-14 text-gray-500 font-bold">Your cart is empty.</p>'}});
