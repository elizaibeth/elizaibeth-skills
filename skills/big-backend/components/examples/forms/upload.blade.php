<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Input File -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Input File
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Input elements with type
                        <code class="inline-code">"file"</code> let the user choose one
                        or more files from their device storage. Once chosen, the files
                        can be uploaded to a server using form submission.
                    </p>
                    <div class="bb-inline mt-5 flex flex-wrap">
                        <label
                            class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90">
                            <input tabindex="-1" type="file"
                                class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                            <span class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                                <span>Choose File</span>
                            </span>
                        </label>
                        <label
                            class="bb-action relative bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90">
                            <input tabindex="-1" type="file"
                                class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                            <span class="flex items-center space-x-2">
                                <i class="fa-solid fa-cloud-arrow-up text-base"></i>
                                <span>Choose File</span>
                            </span>
                        </label>
                        <label
                            class="bb-action border border-slate-300 font-medium text-slate-600 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-graphite-450 dark:text-graphite-100 dark:hover:bg-graphite-500 dark:focus:bg-graphite-500 dark:active:bg-graphite-500/90">
                            <input tabindex="-1" type="file"
                                class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </label>
                        <label
                            class="bb-action size-9 rounded-full bg-info p-0 font-medium text-white hover:bg-info-focus hover:shadow-lg hover:shadow-info/50 focus:bg-info-focus active:bg-info-focus/90">
                            <input tabindex="-1" type="file"
                                class="pointer-events-none absolute inset-0 h-full w-full opacity-0" />
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Basic Filepond -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Basic Filepond
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-bordered">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Filled Filepond -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Filled Filepond
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-bg-filled">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Filled & Bordered -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Filled & Bordered
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-bordered fp-bg-filled">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Two Grid -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Two Grid
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-grid fp-bordered [--fp-grid:2]">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Three Grid -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Three Grid
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-grid fp-bordered [--fp-grid:3]">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Four Grid -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Four Grid
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="mt-5">
                        <div class="filepond fp-grid fp-bordered [--fp-grid:4]">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Circle Filepond -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Circle Filepond
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        Filepond a JavaScript library that can upload anything you throw
                        at it, optimizes images for faster uploads, and offers a great,
                        accessible, silky smooth user experience. You can check the
                        plugin documentation on
                        <a class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                            href="https://github.com/pqina/filepond">Github.</a>
                    </p>
                    <div class="bb-inline mt-5 flex flex-wrap items-end">
                        <div class="filepond fp-bordered label-icon w-28">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el, {
                                stylePanelAspectRatio: '1:1',
                                stylePanelLayout: 'compact circle',
                                labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                                </svg>`
                            })"
                                accept="image/png, image/jpeg, image/gif" />
                        </div>
                        <div class="filepond fp-bordered label-icon w-24">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el, {
                                stylePanelAspectRatio: '1:1',
                                stylePanelLayout: 'compact circle',
                                labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                                </svg>`
                            })"
                                accept="image/png, image/jpeg, image/gif" />
                        </div>
                        <div class="filepond fp-bg-filled label-icon w-20">
                            <input type="file" x-init="$el._x_filepond = FilePond.create($el, {
                                stylePanelAspectRatio: '1:1',
                                stylePanelLayout: 'compact circle',
                                labelIdle: `<svg xmlns='http://www.w3.org/2000/svg' class='size-8' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
                                                  <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12'/>
                                                </svg>`
                            })"
                                accept="image/png, image/jpeg, image/gif" />
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
