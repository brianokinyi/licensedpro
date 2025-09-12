<script setup>
import WebFooter from '@/Components/Footers/WebFooter.vue';
import WebHeader from '@/Components/Headers/WebHeader.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    title: String,
});
</script>

<template>
    <div>
        <Head :title="title" />

        <WebHeader />

        <main>
            <slot />
        </main>

        <WebFooter />
    </div>
</template>
