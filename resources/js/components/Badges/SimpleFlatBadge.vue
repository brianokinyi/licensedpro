<script setup>
import { computed } from 'vue';

const props = defineProps({
    theme: {
        type: String,
        required: true,
        default: 'default',
    },
});

const theme = computed(() => {
    return {
        default: 'bg-gray-50 text-gray-600 inset-ring-gray-500/10',
        red: 'bg-red-100 text-red-700 inset-ring-red-600/10',
        yellow: 'bg-yellow-50 text-orange-800 inset-ring-orange-600/20',
        green: 'bg-green-50 text-green-700 inset-ring-green-600/20',
        blue: 'bg-blue-50 text-blue-700 inset-ring-blue-700/20',
        indigo: 'bg-indigo-50 text-indigo-700 inset-ring-indigo-700/10',
        purple: 'bg-purple-50 text-purple-700 inset-ring-purple-700/10',
        pink: 'bg-pink-50 text-pink-700 inset-ring-pink-700/10',
    }[props.theme.toString()];
});
</script>

<template>
    <span class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium inset-ring" :class="[theme]">
        <slot />
    </span>
</template>
