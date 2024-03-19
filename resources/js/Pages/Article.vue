<script>
import CommonLayout from "../Layouts/CommonLayout.vue";

export default {
    // Using a render function...
    layout: (h, page) => h(CommonLayout, [page]),
    // Using shorthand syntax...
    layout: CommonLayout,
};
</script>

<script setup>
defineProps({ articles: Object });
</script>

<template>
    <header>
        <h1>Assan Article</h1>
    </header>
    <main>
        <li v-for="item in articles">
            {{ item.title }}
        </li>
    </main>
    <footer>
        <h2>Join our Newsletter</h2>
        <input type="email" />
    </footer>
</template>
