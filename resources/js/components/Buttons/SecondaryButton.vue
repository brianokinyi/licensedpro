<script setup>
import { computed } from 'vue';

const props = defineProps({
    theme: {
        type: String,
        required: false,
        default: 'default',
    },
    size: {
        type: String,
        required: false,
        default: 'base',
    },
    type: {
        type: String,
        default: 'submit',
    },
});

const theme = computed(() => {
    return {
        default: 'text-gray-900 inset-ring-gray-300 hover:bg-gray-50',
    }[props.theme.toString()];
});

const size = computed(() => {
    return {
        base: 'px-3 py-2 text-sm',
        sm: 'px-2 py-1 text-xs ',
        lg: 'px-4 py-3 text-base',
    }[props.size.toString()];
});
</script>

<template>
    <button :type="type" class="rounded-sm bg-white font-semibold shadow-xs inset-ring" :class="`${theme} ${size}`">
        <slot />
    </button>
</template>
