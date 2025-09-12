<script setup>
import ButtonLink from '@/Components/Links/ButtonLink.vue';
import WebLayout from '@/Layouts/WebLayout.vue';
import { Lightbulb } from 'lucide-vue-next';

const pages = [
    { name: 'Home', href: '#', current: false },
    { name: 'Projects', href: '#', current: false },
    { name: 'Project Nero', href: '#', current: true },
];

const props = defineProps({
    course: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <WebLayout :title="course.name">
        <section aria-labelledby="sale-heading">
            <div class="overflow-hidden">
                <div class="bg-gray-950">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="relative pt-16 pb-16">
                            <div>
                                <nav class="flex" aria-label="Breadcrumb">
                                    <ol role="list" class="flex items-center space-x-2">
                                        <li v-for="(page, index) in pages" :key="page.name">
                                            <div class="flex items-center">
                                                <svg
                                                    v-if="index !== 0"
                                                    class="size-5 shrink-0 text-gray-300"
                                                    fill="currentColor"
                                                    viewBox="0 0 20 20"
                                                    aria-hidden="true"
                                                >
                                                    <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                                                </svg>
                                                <a
                                                    :href="page.href"
                                                    class="ml-2 text-sm font-medium text-gray-500 hover:text-gray-700"
                                                    :aria-current="page.current ? 'page' : undefined"
                                                    >{{ page.name }}</a
                                                >
                                            </div>
                                        </li>
                                    </ol>
                                </nav>

                                <div class="mt-8 flex items-center gap-2">
                                    <div class="isolate flex -space-x-2 overflow-hidden">
                                        <img
                                            class="relative z-30 inline-block size-8 rounded-full ring-2 ring-gray-950 outline -outline-offset-1 outline-black/5"
                                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt=""
                                        />
                                        <img
                                            class="relative z-10 inline-block size-8 rounded-full ring-2 ring-gray-950 outline -outline-offset-1 outline-black/5"
                                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                            alt=""
                                        />
                                        <img
                                            class="relative z-0 inline-block size-8 rounded-full ring-2 ring-gray-950 outline -outline-offset-1 outline-black/5"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt=""
                                        />
                                    </div>

                                    <span class="text-white">Join 400,000+ people working in security! </span>
                                </div>

                                <h2 id="sale-heading" class="mt-8 text-4xl font-bold tracking-tight text-white md:text-5xl">
                                    Fast-track your career with
                                    <br />

                                    <span class="bg-gradient-to-r from-violet-600 to-indigo-600 bg-clip-text text-transparent">
                                        Door Supervisor Training
                                    </span>
                                </h2>

                                <p class="mt-8 text-lg text-white">
                                    Gain your SIA licence and earn up to £4,000/month in security roles across retail, corporate and hospitality.
                                </p>

                                <div class="mt-8">
                                    <ButtonLink :theme="'blue'">View Dates & Prices</ButtonLink>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-r from-violet-600 to-indigo-600 py-4">
                    <div class="mx-auto flex max-w-7xl items-center justify-between gap-2 px-4 text-blue-50 sm:px-6 lg:px-8">
                        <div class="flex items-center gap-2"><Lightbulb class="size-6" /> Online Courses</div>
                        <div class="flex items-center gap-2"><Lightbulb class="size-6" /> Online Courses</div>
                        <div class="flex items-center gap-2"><Lightbulb class="size-6" /> Clear step-by-step support</div>
                        <div class="flex items-center gap-2"><Lightbulb class="size-6" /> Trusted: 400,000+ trained</div>
                        <div class="flex items-center gap-2"><Lightbulb class="size-6" /> Proven: 95% pass rate</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1>Course</h1>
        </div>
    </WebLayout>
</template>
