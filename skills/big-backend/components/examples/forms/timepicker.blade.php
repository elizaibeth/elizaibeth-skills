<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Timepicker -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Basic Timepicker
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
                            <input x-init="$el._x_flatpickr = flatpickr($el, { enableTime: true, noCalendar: true, dateFormat: 'H:i' })"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose time..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- 24h clock -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        24h Timepicker
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
                            <input x-init="$el._x_flatpickr = flatpickr($el, { enableTime: true, noCalendar: true, dateFormat: 'H:i', time_24hr: true })"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose time..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Limit Time -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Limit Time
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
                            <input x-init="$el._x_flatpickr = flatpickr($el, { enableTime: true, noCalendar: true, dateFormat: 'H:i', minTime: '15:00', maxTime: '22:30' })"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose time..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Default Time -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Default Time
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
                            <input x-init="$el._x_flatpickr = flatpickr($el, { enableTime: true, noCalendar: true, dateFormat: 'H:i', defaultDate: '13:13' })"
                                class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose time..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Inline Time -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Inline Time
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
                        <label>
                            <input x-init="$el._x_flatpickr = flatpickr($el, { inline: true, enableTime: true, noCalendar: true, dateFormat: 'h : m', defaultDate: dayjs().format('h : m') })"
                                class="bb-field w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Choose time..." type="text" />
                        </label>
                    </div>
                </div>
                
            </div>
        </div>
