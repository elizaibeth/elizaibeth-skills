<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Tabs -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Basic Tabs
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
                            <div class="bb-scrollbar-hidden overflow-x-auto">
                                <div class="tabs-list flex">
                                    <button @click="activeTab = 'tabHome'"
                                        :class="activeTab === 'tabHome' ?
                                            'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Home
                                    </button>
                                    <button @click="activeTab = 'tabProfile'"
                                        :class="activeTab === 'tabProfile' ?
                                            'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Profile
                                    </button>
                                    <button @click="activeTab = 'tabMessages'"
                                        :class="activeTab === 'tabMessages' ?
                                            'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Messages
                                    </button>
                                    <button @click="activeTab = 'tabSettings'"
                                        :class="activeTab === 'tabSettings' ?
                                            'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                            'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                        Settings
                                    </button>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Praesent elementum finibus arcu vitae
                                            scelerisque. Etiam rutrum blandit condimentum.
                                            Maecenas condimentum massa vitae quam interdum, et
                                            lacinia urna tempor
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabSettings'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Border Bottom -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Border Bottom
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
                            <div class="bb-scrollbar-hidden overflow-x-auto">
                                <div class="border-b-2 border-slate-150 dark:border-graphite-500">
                                    <div class="tabs-list flex">
                                        <button @click="activeTab = 'tabHome'"
                                            :class="activeTab === 'tabHome' ?
                                                'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                            class="bb-action shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                            Home
                                        </button>
                                        <button @click="activeTab = 'tabProfile'"
                                            :class="activeTab === 'tabProfile' ?
                                                'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                            class="bb-action shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                            Profile
                                        </button>
                                        <button @click="activeTab = 'tabMessages'"
                                            :class="activeTab === 'tabMessages' ?
                                                'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                            class="bb-action shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                            Messages
                                        </button>
                                        <button @click="activeTab = 'tabSettings'"
                                            :class="activeTab === 'tabSettings' ?
                                                'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                            class="bb-action shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                                            Settings
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Praesent elementum finibus arcu vitae
                                            scelerisque. Etiam rutrum blandit condimentum.
                                            Maecenas condimentum massa vitae quam interdum, et
                                            lacinia urna tempor
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabSettings'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Tab With Icon -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Tab With Icon
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabProfile' }" class="tabs flex flex-col">
                            <div class="bb-scrollbar-hidden overflow-x-auto">
                                <div class="border-b-2 border-slate-150 dark:border-graphite-500">
                                    <div class="tabs-list -mb-0.5 flex">
                                        <button @click="activeTab = 'tabHome'"
                                            :class="activeTab === 'tabHome' ?
                                                'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                            class="bb-action shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <span>Home</span>
                                        </button>
                                        <button @click="activeTab = 'tabProfile'"
                                            :class="activeTab === 'tabProfile' ?
                                                'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                            class="bb-action shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                            <span>Profile</span>
                                        </button>
                                        <button @click="activeTab = 'tabMessages'"
                                            :class="activeTab === 'tabMessages' ?
                                                'border-brand dark:border-signal text-brand dark:text-signal-soft' :
                                                'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                            class="bb-action shrink-0 space-x-2 rounded-none border-b-2 px-3 py-2 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            <span> Messages </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Boxed Tabs -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Boxed Tabs
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
                            <div
                                class="bb-scrollbar-hidden overflow-x-auto rounded-xl bg-slate-200 text-slate-600 dark:bg-graphite-800 dark:text-graphite-200">
                                <div class="tabs-list flex px-1.5 py-1">
                                    <button @click="activeTab = 'tabHome'"
                                        :class="activeTab === 'tabHome' ?
                                            'bg-white shadow-sm dark:bg-graphite-500 dark:text-graphite-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 px-3 py-1.5 font-medium">
                                        Home
                                    </button>
                                    <button @click="activeTab = 'tabProfile'"
                                        :class="activeTab === 'tabProfile' ?
                                            'bg-white shadow-sm dark:bg-graphite-500 dark:text-graphite-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 px-3 py-1.5 font-medium">
                                        Profile
                                    </button>
                                    <button @click="activeTab = 'tabMessages'"
                                        :class="activeTab === 'tabMessages' ?
                                            'bg-white shadow-sm dark:bg-graphite-500 dark:text-graphite-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 px-3 py-1.5 font-medium">
                                        Messages
                                    </button>
                                    <button @click="activeTab = 'tabSettings'"
                                        :class="activeTab === 'tabSettings' ?
                                            'bg-white shadow-sm dark:bg-graphite-500 dark:text-graphite-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 px-3 py-1.5 font-medium">
                                        Settings
                                    </button>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Praesent elementum finibus arcu vitae
                                            scelerisque. Etiam rutrum blandit condimentum.
                                            Maecenas condimentum massa vitae quam interdum, et
                                            lacinia urna tempor
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabSettings'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Boxed Tabs With Icon -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Boxed Tabs With Icon
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Tabs make it easy to explore and switch between different views.
                        Check out code for detail of usage.
                    </p>
                    <div class="mt-5">
                        <div x-data="{ activeTab: 'tabHome' }" class="tabs flex flex-col">
                            <div
                                class="bb-scrollbar-hidden overflow-x-auto rounded-xl bg-slate-200 text-slate-600 dark:bg-graphite-800 dark:text-graphite-200">
                                <div class="tabs-list flex px-1.5 py-1">
                                    <button @click="activeTab = 'tabHome'"
                                        :class="activeTab === 'tabHome' ?
                                            'bg-white shadow-sm dark:bg-graphite-500 dark:text-graphite-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 space-x-2 px-3 py-1.5 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        <span> Home </span>
                                    </button>
                                    <button @click="activeTab = 'tabProfile'"
                                        :class="activeTab === 'tabProfile' ?
                                            'bg-white shadow-sm dark:bg-graphite-500 dark:text-graphite-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 space-x-2 px-3 py-1.5 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span>Profile</span>
                                    </button>
                                    <button @click="activeTab = 'tabMessages'"
                                        :class="activeTab === 'tabMessages' ?
                                            'bg-white shadow-sm dark:bg-graphite-500 dark:text-graphite-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-graphite-100 dark:focus:text-graphite-100'"
                                        class="bb-action shrink-0 space-x-2 px-3 py-1.5 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span>Messages</span>
                                    </button>
                                </div>
                            </div>
                            <div class="tab-content pt-4">
                                <div x-show="activeTab === 'tabHome'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Etiam nec ante eget lacus vulputate egestas non
                                            iaculis tellus. Suspendisse tempus ex in tortor
                                            venenatis malesuada. Aenean consequat dui vitae nibh
                                            lobortis condimentum. Duis vel risus est.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabProfile'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Cras iaculis ipsum quis lectus faucibus, in mattis
                                            nulla molestie. Vestibulum vel tristique libero. Morbi
                                            vulputate odio at viverra sodales. Curabitur accumsan
                                            justo eu libero porta ultrices vitae eu leo.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                                <div x-show="activeTab === 'tabMessages'"
                                    x-transition:enter="transition-all duration-500 easy-in-out"
                                    x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                    x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
                                    <div>
                                        <p>
                                            Pellentesque pulvinar, sapien eget fermentum sodales,
                                            felis lacus viverra magna, id pulvinar odio metus non
                                            enim. Ut id augue interdum, ultrices felis eu,
                                            tincidunt libero.
                                        </p>
                                        <div class="flex space-x-2 pt-3">
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 1
                                            </a>
                                            <a href="#"
                                                class="bb-tag rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft">
                                                Tag 2
                                            </a>
                                        </div>

                                        <p class="pt-3 text-xs text-slate-400 dark:text-graphite-300">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Tempore dolore non atque?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
