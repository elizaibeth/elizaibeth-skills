<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Accordion -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Basic Accordion
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }" class="mt-5 flex flex-col">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-graphite-100">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-graphite-100">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-graphite-100">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }"
                        class="mt-5 flex flex-col divide-y divide-slate-150 dark:divide-graphite-500">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-graphite-100">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-graphite-100">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between py-4 text-base font-medium text-slate-700 dark:text-graphite-100">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="pb-4">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Full Bordered -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Full Bordered
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }"
                        class="mt-5 flex flex-col divide-y divide-slate-150 rounded-xl border border-slate-150 dark:divide-graphite-500 dark:border-graphite-500">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 dark:text-graphite-100 sm:px-5">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 dark:text-graphite-100 sm:px-5">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 dark:text-graphite-100 sm:px-5">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Divided Items -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Divided Items
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }"
                        class="mt-5 flex flex-col space-y-4 rounded-xl sm:space-y-5 lg:space-y-6">
                        <div x-data="accordionItem('item-1')" class="rounded-xl border border-slate-150 dark:border-graphite-500">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 dark:text-graphite-100 sm:px-5">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs-plus uppercase text-white ring-3 ring-white dark:ring-graphite-700">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="bb-action size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')" class="rounded-xl border border-slate-150 dark:border-graphite-500">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 dark:text-graphite-100 sm:px-5">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs-plus uppercase text-white ring-3 ring-white dark:ring-graphite-700">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="bb-action size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')" class="rounded-xl border border-slate-150 dark:border-graphite-500">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between px-4 py-4 text-base font-medium text-slate-700 dark:text-graphite-100 sm:px-5">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-graphite-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 pb-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs-plus uppercase text-white ring-3 ring-white dark:ring-graphite-700">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="bb-action size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Primary Accordion -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Primary Accordion
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }"
                        class="mt-5 flex flex-col divide-y divide-indigo-400 overflow-hidden rounded-xl border border-brand dark:border-signal">
                        <div x-data="accordionItem('item-1')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between bg-brand px-4 py-4 text-base font-medium text-white dark:bg-signal sm:px-5">
                                <p>Accordion Item 1</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between bg-brand px-4 py-4 text-base font-medium text-white dark:bg-signal sm:px-5">
                                <p>Accordion Item 2</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')">
                            <div @click="expanded = !expanded"
                                class="flex cursor-pointer items-center justify-between bg-brand px-4 py-4 text-base font-medium text-white dark:bg-signal sm:px-5">
                                <p>Accordion Item 3</p>
                                <div :class="expanded && '-rotate-180'"
                                    class="text-sm font-normal leading-none text-indigo-100 transition-transform duration-300">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Advanced Accordion -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Advanced Accordion
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The accordion component allows the user to show and hide
                        sections of related content on a page. Check out code for detail
                        of usage.
                    </p>
                    <div x-data="{ expandedItem: null }" class="mt-5 flex flex-col space-y-4 sm:space-y-5 lg:space-y-6">
                        <div x-data="accordionItem('item-1')"
                            class="overflow-hidden rounded-xl border border-slate-150 dark:border-graphite-500">
                            <div
                                class="flex items-center justify-between bg-slate-150 px-4 py-4 dark:bg-graphite-500 sm:px-5">
                                <div class="flex items-center space-x-3.5 tracking-wide outline-hidden transition-all">
                                    <div class="bb-avatar size-10">
                                        <img class="rounded-full" src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                    </div>
                                    <div>
                                        <p class="text-slate-700 line-clamp-1 dark:text-graphite-100">
                                            Simon Tods
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-graphite-300">
                                            Web Developer
                                        </p>
                                    </div>
                                </div>
                                <button @click="expanded = !expanded"
                                    class="bb-action -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25">
                                    <i :class="expanded && '-rotate-180'"
                                        class="fas fa-chevron-down text-sm transition-transform"></i>
                                </button>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs-plus uppercase text-white ring-3 ring-white dark:ring-graphite-700">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="bb-action size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-2')"
                            class="overflow-hidden rounded-xl border border-slate-150 dark:border-graphite-500">
                            <div
                                class="flex items-center justify-between bg-slate-150 px-4 py-4 dark:bg-graphite-500 sm:px-5">
                                <div class="flex items-center space-x-3.5 tracking-wide outline-hidden transition-all">
                                    <div class="bb-avatar size-10">
                                        <div class="is-initial rounded-full bg-warning uppercase text-white">
                                            KG
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-slate-700 line-clamp-1 dark:text-graphite-100">
                                            Konnor Guzman
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-graphite-300">
                                            Frontend Developer
                                        </p>
                                    </div>
                                </div>
                                <button @click="expanded = !expanded"
                                    class="bb-action -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25">
                                    <i :class="expanded && '-rotate-180'"
                                        class="fas fa-chevron-down text-sm transition-transform"></i>
                                </button>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs-plus uppercase text-white ring-3 ring-white dark:ring-graphite-700">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="bb-action size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="accordionItem('item-3')"
                            class="overflow-hidden rounded-xl border border-slate-150 dark:border-graphite-500">
                            <div
                                class="flex items-center justify-between bg-slate-150 px-4 py-4 dark:bg-graphite-500 sm:px-5">
                                <div class="flex items-center space-x-3.5 tracking-wide outline-hidden transition-all">
                                    <div class="bb-avatar size-10">
                                        <img class="rounded-full" src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                    </div>
                                    <div>
                                        <p class="text-slate-700 line-clamp-1 dark:text-graphite-100">
                                            Derrick Simmons
                                        </p>
                                        <p class="text-xs text-slate-500 dark:text-graphite-300">
                                            UI/UX Designer
                                        </p>
                                    </div>
                                </div>
                                <button @click="expanded = !expanded"
                                    class="bb-action -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25">
                                    <i :class="expanded && '-rotate-180'"
                                        class="fas fa-chevron-down text-sm transition-transform"></i>
                                </button>
                            </div>
                            <div x-collapse x-show="expanded">
                                <div class="px-4 py-4 sm:px-5">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Commodi earum magni officiis possimus repellendus.
                                        Accusantium adipisci aliquid praesentium quaerat
                                        voluptate.
                                    </p>
                                    <div class="mt-4 flex justify-between">
                                        <div class="flex flex-wrap -space-x-2">
                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <div
                                                    class="is-initial rounded-full bg-info text-xs-plus uppercase text-white ring-3 ring-white dark:ring-graphite-700">
                                                    jd
                                                </div>
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>

                                            <div class="bb-avatar size-7 hover:z-10">
                                                <img class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                                                    src="{{asset('images/components/bb-avatar.svg')}}" alt="bb-avatar" />
                                            </div>
                                        </div>
                                        <button
                                            class="bb-action size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
