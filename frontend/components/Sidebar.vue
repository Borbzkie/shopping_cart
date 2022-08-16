<template>
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <nuxt-link to="/" class="nav-link">Home</nuxt-link>
                </li>
                <li class="nav-item">
                    <nuxt-link to="/item"   class="nav-link">Item</nuxt-link>
                </li>
                <li class="nav-item">
                    <nuxt-link to="/cart"   class="nav-link">Cart</nuxt-link>
                </li>
                <li class="nav-item">
                   <nuxt-link to="/about"  class="nav-link">About</nuxt-link>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <aside>
        <ul>
            <li>
              
            </li>
            <li>
                
            </li>
            <li>
                
            </li>    
        </ul>
    </aside> -->
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