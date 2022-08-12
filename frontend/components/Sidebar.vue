<template>
    <aside>
        <ul>
            <li>
                <nuxt-link to="/">Home</nuxt-link>
            </li>
            <li>
                <nuxt-link to="/cart">Cart</nuxt-link>
            </li>
            <li>
                <nuxt-link to="/about">About</nuxt-link>
            </li>    
        </ul>
    </aside>
</template>

<script>
export default {

}
</script>

<style>
    ul li {
        list-style: none;
        margin: 10px 2px ;
        /* display: inline-block; */
    }

    aside {
        /* border: 1px solid black; */
        display: inline-block;
        width: 200px;
    }
</style>