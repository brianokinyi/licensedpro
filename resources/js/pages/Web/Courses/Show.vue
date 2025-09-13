<script setup>
import SimpleFlatBadge from '@/Components/Badges/SimpleFlatBadge.vue';
import { default as ButtonLink, default as PrimaryButtonLink } from '@/Components/Links/PrimaryButtonLink.vue';
import SecondaryButtonLink from '@/Components/Links/SecondaryButtonLink.vue';
import WebLayout from '@/Layouts/WebLayout.vue';
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
import { Calendar, ChevronDown, ChevronUp, Clock, Lightbulb, MapPin } from 'lucide-vue-next';

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

const locations = [
    { name: 'Middlesbrough', href: '#' },
    { name: 'Stockton', href: '#' },
    { name: 'Darlington', href: '#' },
    { name: 'Hartlepool', href: '#' },
    { name: 'Yarm', href: '#' },
];
</script>

<template>
    <WebLayout title="Door Supervisor Training">
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
            <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow-sm">
                <div class="px-4 py-3 sm:px-3">
                    <h2 class="text-lg font-medium text-gray-900">Course Dates</h2>
                </div>
                <div class="px-2 py-4 sm:p-3">
                    <dl class="divide-y divide-gray-900/10">
                        <Disclosure as="div" class="rounded-lg border border-gray-200 px-4 py-3" v-slot="{ open }">
                            <dt>
                                <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-900">
                                    <div class="flex items-center gap-2">
                                        <MapPin class="size-5" />
                                        <span class="text-base/7 font-semibold">Middlesbrough</span>
                                        <span class="text-xs text-gray-600">Unit 35 - Romsey Industrial Estate, Hampshire, SO51 0HR</span>
                                    </div>
                                    <span class="ml-6 flex h-7 items-center">
                                        <SimpleFlatBadge>3 dates</SimpleFlatBadge>
                                        <ChevronDown v-if="!open" class="size-6" aria-hidden="true" />
                                        <ChevronUp v-else class="size-6" aria-hidden="true" />
                                    </span>
                                </DisclosureButton>
                            </dt>
                            <DisclosurePanel as="dd" class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6">
                                <div
                                    v-for="tier in 5"
                                    :key="tier"
                                    class="flex flex-col justify-between rounded-lg bg-white p-4 shadow-sm outline-1 outline-gray-900/10 sm:p-6"
                                >
                                    <div>
                                        <h3 :id="tier.id" class="text-sm text-gray-600">Starting from</h3>
                                        <div class="mt-4 flex items-baseline gap-x-2">
                                            <span class="text-3xl font-semibold tracking-tight text-gray-900">449.99</span>
                                            <span class="text-sm font-semibold text-gray-600">Incl. VAT</span>
                                        </div>
                                        <ul role="list" class="mt-10 space-y-2 text-sm/6 text-gray-600">
                                            <li class="flex gap-x-3">
                                                <Calendar class="h-6 w-5 flex-none text-gray-600" aria-hidden="true" />
                                                Mon 29th Sep 2025 to Sat 4th Oct 2025
                                            </li>
                                            <li class="flex gap-x-3">
                                                <Clock class="h-6 w-5 flex-none text-gray-600" aria-hidden="true" />
                                                9am to 6pm
                                            </li>
                                            <li class="flex gap-x-3">
                                                <Calendar class="h-6 w-5 flex-none text-gray-600" aria-hidden="true" />
                                                6-day course
                                            </li>
                                        </ul>
                                    </div>
                                    <PrimaryButtonLink class="mt-4 justify-center">Book Now</PrimaryButtonLink>
                                </div>
                            </DisclosurePanel>
                        </Disclosure>
                    </dl>
                </div>
            </div>

            <div class="mt-8 divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow-sm">
                <div class="px-4 py-3 sm:px-3">
                    <h2 class="text-lg font-medium text-gray-900">Locations</h2>
                </div>
                <div class="flex flex-wrap gap-2 px-2 py-4 sm:p-3">
                    <SecondaryButtonLink v-for="location in locations" :key="location.name" :href="location.href" theme="default" size="base">{{
                        location.name
                    }}</SecondaryButtonLink>
                </div>
            </div>
        </div>
    </WebLayout>
</template>
