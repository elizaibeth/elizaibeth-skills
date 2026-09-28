<div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 grid lg:col-span-4 lg:place-items-center">
                <div>
                    <ol class="bb-stepper is-vertical line-space [--size:2.75rem] [--line:.5rem]">
                        <li class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-graphite-500">
                            <div class="step-header bb-shape is-hexagon bg-brand text-white dark:bg-signal">
                                <i class="fa-solid fa-layer-group text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400 dark:text-graphite-300">
                                    Step 1
                                </p>
                                <h3 class="text-base font-medium text-brand dark:text-signal-soft">
                                    General
                                </h3>
                            </div>
                        </li>
                        <li class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-graphite-500">
                            <div
                                class="step-header bb-shape is-hexagon bg-slate-200 text-slate-500 dark:bg-graphite-500 dark:text-graphite-100">
                                <i class="fa-solid fa-list text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400 dark:text-graphite-300">
                                    Step 2
                                </p>
                                <h3 class="text-base font-medium">Description</h3>
                            </div>
                        </li>
                        <li class="step space-x-4 pb-12 before:bg-slate-200 dark:before:bg-graphite-500">
                            <div
                                class="step-header bb-shape is-hexagon bg-slate-200 text-slate-500 dark:bg-graphite-500 dark:text-graphite-100">
                                <i class="fa-solid fa-truck-fast text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400 dark:text-graphite-300">
                                    Step 3
                                </p>
                                <h3 class="text-base font-medium">Shipping</h3>
                            </div>
                        </li>
                        <li class="step space-x-4 before:bg-slate-200 dark:before:bg-graphite-500">
                            <div
                                class="step-header bb-shape is-hexagon bg-slate-200 text-slate-500 dark:bg-graphite-500 dark:text-graphite-100">
                                <i class="fa-solid fa-check text-base"></i>
                            </div>
                            <div class="text-left">
                                <p class="text-xs text-slate-400 dark:text-graphite-300">
                                    Step 4
                                </p>
                                <h3 class="text-base font-medium">Confirm</h3>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-span-12 grid lg:col-span-8">
                <div class="bb-surface">
                    <div class="border-b border-slate-200 p-4 dark:border-graphite-500 sm:px-5">
                        <div class="flex items-center space-x-2">
                            <div
                                class="flex size-7 items-center justify-center rounded-xl bg-brand/10 p-1 text-brand dark:bg-signal-soft/10 dark:text-signal-soft">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <h4 class="text-lg font-medium text-slate-700 dark:text-graphite-100">
                                General
                            </h4>
                        </div>
                    </div>
                    <div class="space-y-4 p-4 sm:p-5">
                        <label class="block">
                            <span>Product name</span>

                            <input
                                class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                placeholder="Enter product name" type="text" />
                        </label>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <label class="block">
                                <span>Category</span>
                                <select class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { create: true, sortField: { field: 'text', direction: 'asc' } })">
                                    <option>Digital</option>
                                    <option>Technology</option>
                                    <option>Home</option>
                                    <option>Other</option>
                                </select>
                            </label>

                            <div class="grid grid-cols-2 gap-4">
                                <label class="block">
                                    <span>SKU</span>
                                    <input
                                        class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                        placeholder="SKU" type="text" />
                                </label>

                                <label class="block">
                                    <span>Price</span>
                                    <input
                                        class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                                        placeholder="Price" type="text" />
                                </label>
                            </div>
                        </div>
                        <div>
                            <span>Images</span>
                            <div class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]">
                                <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                            </div>
                        </div>
                        <div class="flex justify-center space-x-2 pt-4">
                            <button
                                class="bb-action space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button
                                class="bb-action space-x-2 bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90">
                                <span>Next</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
