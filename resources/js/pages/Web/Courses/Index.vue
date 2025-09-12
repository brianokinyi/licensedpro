<script setup>
import CourseCard from '@/Components/Cards/CourseCard.vue';
import WebLayout from '@/Layouts/WebLayout.vue';
import { range } from 'lodash';
</script>

<template>
    <WebLayout :title="'Courses'">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Courses</h1>

            <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-3 lg:grid-cols-3 xl:gap-x-8">
                <CourseCard v-for="i in range(10)" :key="i" />
            </div>
        </div>
    </WebLayout>
</template>
