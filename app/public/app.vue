<template>
    <table>
        <tr>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Telefon</th>
            <th>Geburtstag</th>
            <th>Level</th>
        </tr>
        <contactitem></contactitem>

    </table>
</template>

<script>
    import ProductList from './ProductList.vue'
    import ShoppingCart from './ShoppingCart.vue'
    export default {
        components: { ProductList, ShoppingCart }
    }
</script>