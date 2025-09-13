<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    theme: {
        type: String,
        required: false,
        default: 'blue',
    },
    size: {
        type: String,
        required: false,
        default: 'base',
    },
    href: {
        type: String,
        required: true,
    },
});

const theme = computed(() => {
    return {
        default:
            'focus:outline-none focus:border-gray-600 focus:ring focus:ring-gray-300 hover:bg-gray-700 active:bg-gray-900 bg-gray-800 text-white',
        secondary:
            'bg-gray-100 active:bg-gray-200 text-gray-700 focus:outline-none focus:border-gray-100 focus:ring focus:ring-gray-300 hover:bg-gray-200',
        dark: 'bg-gray-900 active:bg-gray-950 text-white focus:outline-none focus:border-gray-600 focus:ring focus:ring-gray-900 hover:bg-gray-700 ',
        red: 'text-white focus:outline-none focus:border-red-900 focus:ring focus:ring-red-300 hover:bg-red-700 active:bg-red-900 bg-red-500',
        orange: 'text-white focus:outline-none focus:border-orange-600 focus:ring focus:ring-orange-300 hover:bg-orange-600 active:bg-orange-600 bg-orange-500',
        green: 'text-white focus:outline-none focus:border-green-600 focus:ring focus:ring-green-300 hover:bg-green-600 active:bg-green-600 bg-green-500',
        blue: 'text-white bg-blue-500 focus:outline-none focus:border-blue-600 focus:ring focus:ring-blue-300 hover:bg-blue-600 active:bg-blue-600 bg-blue-50',
        indigo: 'text-white block bg-indigo-600 text-center font-semibold shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
        transparent: 'text-gray-500',
        secondaryOutline: 'bg-white text-gray-700  ring-1 ring-gray-300 ring-inset hover:bg-gray-50 shadow-xs',
    }[props.theme.toString()];
});

const size = computed(() => {
    return {
        sm: 'px-2 py-1 text-xs ',
        base: 'px-3 py-2 text-sm',
        lg: 'px-4 py-3 text-base',
    }[props.size.toString()];
});
</script>

<template>
    <Link
        :href="href"
        class="inline-flex items-center rounded-md border border-transparent font-semibold transition disabled:opacity-25"
        :class="`${theme} ${size}`"
    >
        <slot />
    </Link>
</template>
