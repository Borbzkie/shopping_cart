<template>
    <div class="basis-1/6 bg-gray-200 ">
        <nav id="sidebarMenu" >
            <div class="">
                <ul class="flex flex-col">
                    <li class="py-4 text-lg text-gray-700 font-bold text-justify  pl-8 mb-1 mt-1 hover:bg-sky-800 hover:text-white active:bg-sky-700" >
                        <nuxt-link to="/" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2 align-middle" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>Home
                        </nuxt-link>
                    </li>
                    <li class="py-4 text-lg text-gray-700 font-bold text-justify  pl-8 mb-1 mt-1 hover:bg-sky-800 hover:text-white  active:bg-sky-700" >
                        <nuxt-link to="/item"  class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2 align-middle"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>Item
                        </nuxt-link>
                    </li>
                    <li class="py-4 text-lg text-gray-700 font-bold text-justify  pl-8 mb-1 mt-1 hover:bg-sky-800 hover:text-white  active:bg-sky-700" >
                        <nuxt-link to="/cart"   class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2 align-middle"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>Cart
                        </nuxt-link>
                    </li>
                    <li class="py-4 text-lg text-gray-700 font-bold text-justify  pl-8 mb-1 mt-1 hover:bg-sky-800 hover:text-white  active:bg-sky-700" >
                        <nuxt-link to="/about"  class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block mr-2 align-middle" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>About
                        </nuxt-link>
                    </li>
                </ul>
            </div>
           
        </nav>
    </div>
</template>

<script>
export default {
   
}
</script>

<style>
    /* ul li {
        list-style: none;
        margin: 10px 2px ;
        display: inline-block;
    }

    aside {
        border: 1px solid black;
        display: inline-block;
        width: 200px;
    } */
</style>