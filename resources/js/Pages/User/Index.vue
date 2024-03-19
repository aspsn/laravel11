<script>
import { Link } from "@inertiajs/inertia-vue3";
import CommonLayout from "../../Layouts/CommonLayout.vue";

export default {
    // Using a render function...
    layout: (h, page) => h(CommonLayout, [page]),
    // Using shorthand syntax...
    layout: CommonLayout,
};
</script>

<script setup>
defineProps({ user: Object });
</script>

<template>
    <H1>Welcome</H1>
    <p>Hello {{ user.name }}, welcome to your first Inertia app!</p>
    <p>Your email is {{ user.email }}</p>
    <link href="Show.vue" />
</template>
