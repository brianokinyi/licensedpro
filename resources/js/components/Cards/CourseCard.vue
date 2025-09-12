<script setup>
import PrimaryButton from '../Buttons/PrimaryButton.vue';

const product = {
    id: 1,
    name: 'Basic Tee 8-Pack',
    href: '#',
    price: '$256',
    description: 'Get the full lineup of our Basic Tees. Have a fresh shirt all week, and an extra for laundry day.',
    imageSrc: 'https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-02-image-card-01.jpg',
    imageAlt: 'Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green.',
};
</script>

<template>
    <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
        <img
            :src="product.imageSrc"
            :alt="product.imageAlt"
            class="aspect-4/3 w-full bg-gray-200 object-cover group-hover:opacity-75 sm:aspect-auto sm:h-60"
        />
        <div class="flex flex-1 flex-col space-y-2 p-4">
            <h3 class="text-sm font-medium text-gray-900">
                <a :href="product.href">
                    <span aria-hidden="true" class="absolute inset-0" />
                    {{ product.name }}
                </a>
            </h3>
            <p class="text-sm text-gray-500">{{ product.description }}</p>
            <div class="flex flex-1 flex-col justify-end">
                <p class="text-base font-medium text-gray-900">{{ product.price }}</p>
            </div>

            <div>
                <PrimaryButton>Book Now</PrimaryButton>
            </div>
        </div>
    </div>
</template>
