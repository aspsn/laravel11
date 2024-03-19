<script>
import CommonLayout from "../Layouts/CommonLayout.vue";

export default {
    // Using a render function...
    layout: (h, page) => h(CommonLayout, [page]),
    // Using shorthand syntax...
    layout: CommonLayout,
};
</script>

<template>
<h1>
    Home Page
</h1>
</template>
