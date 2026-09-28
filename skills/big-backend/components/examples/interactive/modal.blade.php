<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Modal -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Basic Modal
                    </h2>
                    
                </div>
                <div>
                    <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                    </p>
                    <div class="mt-5" x-data="{ showModal: false }">
                        <button @click="showModal = true"
                            class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                            Basic Modal
                        </button>
                        <template x-teleport="#x-teleport-target">
                            <div class="fixed inset-0 z-100 flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                    @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"></div>
                                <div class="relative max-w-lg rounded-xl flex overflow-y-auto flex-col bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-graphite-700 sm:px-5"
                                    x-show="showModal" x-transition:enter="ease-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="inline size-28 text-success mx-auto shrink-0" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                    <div class="mt-4">
                                        <h2 class="text-2xl text-slate-700 dark:text-graphite-100">
                                            Success Message
                                        </h2>
                                        <p class="mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Consequuntur dignissimos soluta totam?
                                        </p>
                                        <button @click="showModal = false"
                                            class="bb-action mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                
            </div>

            <!-- Backdrop Blur -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Backdrop Blur
                    </h2>
                    
                </div>
                <div>
                    <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                    </p>
                    <div class="mt-5" x-data="{ showModal: false }">
                        <button @click="showModal = true"
                            class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                            Backdrop Blur
                        </button>
                        <template x-teleport="#x-teleport-target">
                            <div class="fixed inset-0 z-100 flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300"
                                    @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"></div>
                                <div class="relative max-w-lg flex flex-col overflow-y-auto rounded-xl bg-white px-4 py-10 text-center transition-opacity duration-300 dark:bg-graphite-700 sm:px-5"
                                    x-show="showModal" x-transition:enter="ease-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="inline size-28 text-success shrink-0 mx-auto" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                    <div class="mt-4">
                                        <h2 class="text-2xl text-slate-700 dark:text-graphite-100">
                                            Success Message
                                        </h2>
                                        <p class="mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Consequuntur dignissimos soluta totam?
                                        </p>
                                        <button @click="showModal = false"
                                            class="bb-action mt-6 bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                
            </div>

            <!-- Modal Transition -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Modal Transition
                    </h2>
                    
                </div>
                <div>
                    <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                    </p>
                    <div class="bb-inline mt-5 flex">
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true"
                                class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                Shift Up
                            </button>
                            <template x-teleport="#x-teleport-target">
                                <div class="fixed inset-0 z-100 flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"></div>
                                    <div class="relative max-w-md flex flex-col overflow-y-auto rounded-xl bg-white pt-10 pb-4 text-center transition-all duration-300 dark:bg-graphite-700"
                                        x-show="showModal" x-transition:enter="easy-out"
                                        x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                        x-transition:leave="easy-in"
                                        x-transition:leave-start="opacity-100 [transform:translate3d(0,0,0)]"
                                        x-transition:leave-end="opacity-0 [transform:translate3d(0,1rem,0)]">
                                        <div class="bb-avatar size-20 mx-auto">
                                            <img class="rounded-full" src="{{ asset('images/components/bb-avatar.svg') }}"
                                                alt="bb-avatar" />
                                            <div
                                                class="absolute right-0 m-1 size-4 rounded-full border-2 border-white bg-brand dark:border-graphite-700 dark:bg-signal">
                                            </div>
                                        </div>
                                        <div class="mt-4 px-4 sm:px-12">
                                            <h3 class="text-lg text-slate-800 dark:text-graphite-50">
                                                Follow Request
                                            </h3>
                                            <p class="mt-1 text-slate-500 dark:text-graphite-200">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Fuga sunt vel vero.
                                            </p>
                                        </div>
                                        <div class="my-4 mt-16 h-px bg-slate-200 dark:bg-graphite-500"></div>

                                        <div class="space-x-3">
                                            <button @click="showModal = false"
                                                class="bb-action min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-graphite-450 dark:text-graphite-50 dark:hover:bg-graphite-500 dark:focus:bg-graphite-500 dark:active:bg-graphite-500/90">
                                                Cancel
                                            </button>
                                            <button @click="showModal = false"
                                                class="bb-action min-w-[7rem] rounded-full bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90">
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true"
                                class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                Shift Down
                            </button>
                            <template x-teleport="#x-teleport-target">
                                <div class="fixed inset-0 z-100 flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"></div>
                                    <div class="relative max-w-sm flex flex-col overflow-y-auto rounded-xl bg-white px-4 pb-4 transition-all duration-300 dark:bg-graphite-700 sm:px-5"
                                        x-show="showModal" x-transition:enter="easy-out"
                                        x-transition:enter-start="opacity-0 [transform:translate3d(0,-1rem,0)]"
                                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                        x-transition:leave="easy-in"
                                        x-transition:leave-start="opacity-100 [transform:translate3d(0,0,0)]"
                                        x-transition:leave-end="opacity-0 [transform:translate3d(0,-1rem,0)]">
                                        <div class="my-3 flex h-8 items-center justify-between">
                                            <h2
                                                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                                                Table Settings
                                            </h2>

                                            <button @click="showModal = !showModal"
                                                class="bb-action -mr-1.5 size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Aut dignissimos.
                                        </p>
                                        <div class="mt-4 grid grid-cols-2 gap-4">
                                            <label class="inline-flex items-center space-x-2">
                                                <input checked
                                                    class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                                                    type="checkbox" />
                                                <p>ID</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input checked
                                                    class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                                                    type="checkbox" />
                                                <p>Name</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input checked
                                                    class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                                                    type="checkbox" />
                                                <p>Email</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input
                                                    class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                                                    type="checkbox" />
                                                <p>Address</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input checked
                                                    class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                                                    type="checkbox" />
                                                <p>Created at</p>
                                            </label>
                                            <label class="inline-flex items-center space-x-2">
                                                <input
                                                    class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                                                    type="checkbox" />
                                                <p>Updated at</p>
                                            </label>
                                            <label class="col-span-2 inline-flex items-center space-x-2">
                                                <input
                                                    class="bb-switch is-outline h-5 w-10 rounded-full border border-slate-400/70 bg-transparent before:rounded-full before:bg-slate-300 checked:border-brand checked:before:bg-brand dark:border-graphite-400 dark:before:bg-graphite-300 dark:checked:border-signal dark:checked:before:bg-signal"
                                                    type="checkbox" />
                                                <span>Show Avatar</span>
                                            </label>
                                        </div>
                                        <div class="mt-4 text-right">
                                            <button
                                                class="bb-action h-8 rounded-full text-xs-plus font-medium text-slate-700 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-graphite-100 dark:hover:bg-graphite-300/20 dark:active:bg-graphite-300/25">
                                                Cancel
                                            </button>
                                            <button @click="showModal = false"
                                                class="bb-action h-8 rounded-full bg-brand text-xs-plus font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90">
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Modal Scale -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Modal Scale
                    </h2>
                    
                </div>
                <div>
                    <p class="max-w-xl">
                        The Modal component inform users about a specific task and may
                        contain critical information, require decisions, or involve
                        multiple tasks.
                    </p>
                    <div class="bb-inline mt-5 flex">
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true"
                                class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                Origin Top
                            </button>
                            <template x-teleport="#x-teleport-target">
                                <div class="fixed inset-0 z-100 flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"></div>
                                    <div class="relative w-full flex flex-col overflow-hidden max-w-lg origin-top rounded-xl bg-white transition-all duration-300 dark:bg-graphite-700"
                                        x-show="showModal" x-transition:enter="easy-out"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        <div
                                            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-graphite-800 sm:px-5">
                                            <h3 class="text-base font-medium text-slate-700 dark:text-graphite-100">
                                                Edit Pin
                                            </h3>
                                            <button @click="showModal = !showModal"
                                                class="bb-action -mr-1.5 size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="overflow-y-auto px-4 py-4 sm:px-5">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Assumenda incidunt
                                            </p>
                                            <div class="mt-4 space-y-4">
                                                <label class="block">
                                                    <span>Choose category :</span>
                                                    <select
                                                        class="bb-select mt-1.5 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:bg-graphite-700 dark:hover:border-graphite-400 dark:focus:border-signal">
                                                        <option>Laravel</option>
                                                        <option>Node JS</option>
                                                        <option>Django</option>
                                                        <option>Other</option>
                                                    </select>
                                                </label>
                                                <label class="block">
                                                    <span>Description:</span>
                                                    <textarea rows="4" placeholder=" Enter Text"
                                                        class="bb-textarea mt-1.5 w-full resize-none rounded-xl border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"></textarea>
                                                </label>
                                                <label class="block">
                                                    <span>Website Address:</span>
                                                    <input
                                                        class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                                        placeholder="URL Address" type="text" />
                                                </label>
                                                <label class="inline-flex items-center space-x-2">
                                                    <input
                                                        class="bb-switch is-outline h-5 w-10 rounded-full border border-slate-400/70 bg-transparent before:rounded-full before:bg-slate-300 checked:border-brand checked:before:bg-brand dark:border-graphite-400 dark:before:bg-graphite-300 dark:checked:border-signal dark:checked:before:bg-signal"
                                                        type="checkbox" />
                                                    <span>Public pin</span>
                                                </label>
                                                <div class="space-x-2 text-right">
                                                    <button @click="showModal = false"
                                                        class="bb-action min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-graphite-450 dark:text-graphite-50 dark:hover:bg-graphite-500 dark:focus:bg-graphite-500 dark:active:bg-graphite-500/90">
                                                        Cancel
                                                    </button>
                                                    <button @click="showModal = false"
                                                        class="bb-action min-w-[7rem] rounded-full bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90">
                                                        Apply
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true"
                                class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                Origin bottom
                            </button>
                            <template x-teleport="#x-teleport-target">
                                <div class="fixed inset-0 z-100 flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                                    x-show="showModal" role="dialog" @keydown.window.escape="showModal = false">
                                    <div class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                                        @click="showModal = false" x-show="showModal" x-transition:enter="ease-out"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"></div>
                                    <div class="relative w-full flex flex-col overflow-hidden max-w-2xl origin-bottom rounded-xl bg-white pb-4 transition-all duration-300 dark:bg-graphite-700"
                                        x-show="showModal" x-transition:enter="easy-out"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        <div
                                            class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-graphite-800 sm:px-5">
                                            <h3 class="text-base font-medium text-slate-700 dark:text-graphite-100">
                                                Users Status
                                            </h3>
                                            <button @click="showModal = !showModal"
                                                class="bb-action -mr-1.5 size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="scrollbar-sm min-w-full overflow-auto">
                                            <table class="w-full text-left">
                                                <thead>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-graphite-500">
                                                        <th
                                                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-graphite-100 lg:px-5">
                                                            #
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-graphite-100 lg:px-5">
                                                            Name
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-graphite-100 lg:px-5">
                                                            Role
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-graphite-100 lg:px-5">
                                                            Status
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-graphite-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            1
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Cy Ganderton
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Admin
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="bb-badge space-x-2.5 rounded-full bg-brand/10 text-brand dark:bg-signal-soft/15 dark:text-signal-soft">
                                                                <div class="size-2 rounded-full bg-current"></div>
                                                                <span>Online</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-graphite-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            2
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Travis Fuller
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Teacher
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="bb-badge space-x-2.5 rounded-full bg-brand/10 text-brand dark:bg-signal-soft/15 dark:text-signal-soft">
                                                                <div class="size-2 rounded-full bg-current"></div>
                                                                <span>Online</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-graphite-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            3
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Konnor Guzman
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Moderator
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="bb-badge space-x-2.5 rounded-full bg-brand/10 text-brand dark:bg-signal-soft/15 dark:text-signal-soft">
                                                                <div class="size-2 rounded-full bg-current"></div>
                                                                <span>Online</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-graphite-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            4
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Alfredo Elliott
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Admin
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="bb-badge space-x-2.5 rounded-full bg-warning/10 text-warning dark:bg-warning/15">
                                                                <div class="size-2 rounded-full bg-current"></div>
                                                                <span>Offline</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-graphite-500">
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            5
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Derrick Simmons
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            Teacher
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div
                                                                class="bb-badge space-x-2.5 rounded-full bg-brand/10 text-brand dark:bg-signal-soft/15 dark:text-signal-soft">
                                                                <div class="size-2 rounded-full bg-current"></div>
                                                                <span>Offline</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center">
                                            <button
                                                class="bb-action mt-4 border border-brand/30 bg-brand/10 font-medium text-brand hover:bg-brand/20 focus:bg-brand/20 active:bg-brand/25 dark:border-signal-soft/30 dark:bg-signal-soft/10 dark:text-signal-soft dark:hover:bg-signal-soft/20 dark:focus:bg-signal-soft/20 dark:active:bg-signal-soft/25">
                                                Show All
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
