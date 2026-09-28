<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Datepricker -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Basic Datepricker
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The Datetimepicker is used to allow the user to select a date
                        and time, and to display that date and time in the specified
                        format.
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/flatpickr/flatpickr">Flatpickr</a>
                        is a lightweight and powerful datetime picker.
                    </p>
                    <div class="mt-5">
                        <label class="relative flex">
                            <input x-init="$el._x_flatpickr = flatpickr($el)"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose date..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Custom Format -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Custom Format
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The Datetimepicker is used to allow the user to select a date
                        and time, and to display that date and time in the specified
                        format.
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/flatpickr/flatpickr">Flatpickr</a>
                        is a lightweight and powerful datetime picker.
                    </p>
                    <div class="mt-5">
                        <label class="relative flex">
                            <input x-init="$el._x_flatpickr = flatpickr($el, { altInput: true, altFormat: 'F j, Y', dateFormat: 'Y-m-d' })"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose date..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Disabled Date -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Disabled Date
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The Datetimepicker is used to allow the user to select a date
                        and time, and to display that date and time in the specified
                        format.
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/flatpickr/flatpickr">Flatpickr</a>
                        is a lightweight and powerful datetime picker.
                    </p>
                    <div class="mt-5">
                        <label class="relative flex">
                            <input x-init="$el._x_flatpickr = flatpickr($el, {
                                disable: [
                                    function(date) {
                                        return (date.getDay() === 0 || date.getDay() === 6);
                                    }
                                ],
                                locale: {
                                    firstDayOfWeek: 1
                                }
                            })"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose date..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Multiple Date -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Multiple Date
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The Datetimepicker is used to allow the user to select a date
                        and time, and to display that date and time in the specified
                        format.
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/flatpickr/flatpickr">Flatpickr</a>
                        is a lightweight and powerful datetime picker.
                    </p>
                    <div class="mt-5">
                        <label class="relative flex">
                            <input x-init="$el._x_flatpickr = flatpickr($el, { mode: 'multiple', dateFormat: 'Y-m-d', defaultDate: ['2022-10-10', '2022-10-12', '2022-10-18'] })"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose date..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Date Range -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Date Range
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The Datetimepicker is used to allow the user to select a date
                        and time, and to display that date and time in the specified
                        format.
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/flatpickr/flatpickr">Flatpickr</a>
                        is a lightweight and powerful datetime picker.
                    </p>
                    <div class="mt-5">
                        <label class="relative flex">
                            <input x-init="$el._x_flatpickr = flatpickr($el, { mode: 'range', dateFormat: 'Y-m-d', defaultDate: ['2016-10-10', '2016-10-20'] })"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose date..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- External Elements -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        External Elements
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The Datetimepicker is used to allow the user to select a date
                        and time, and to display that date and time in the specified
                        format.
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/flatpickr/flatpickr">Flatpickr</a>
                        is a lightweight and powerful datetime picker.
                    </p>
                    <div class="mt-5">
                        <div class="flex -space-x-px" x-init="$el._x_flatpickr = flatpickr($el, { wrap: true })">
                            <input data-input
                                class="bb-field w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose date" type="text" />
                            <button data-toggle
                                class="bb-action rounded-none bg-slate-150 px-3 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </button>
                            <button data-clear
                                class="bb-action rounded-l-none bg-error px-3 font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
