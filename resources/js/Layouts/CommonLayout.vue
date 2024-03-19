<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
  <main>
    <header class="header">
      <Link href="/">Home</Link>
      <Link href="/users">User</Link>
      <Link href="/articles">Article</Link>
      <Link href="/contact">Contact</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<style>
.header {
  display: flex;
  gap: 16px;
}
</style>