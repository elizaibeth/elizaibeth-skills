<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Text Editor -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Text Editor
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The textarea provides a native and essential solution to almost
                        any web application. But at some point you may need to add
                        formatting to text input.
                        <a href="https://github.com/quilljs/quill/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Quill</a>
                        is a free, open source WYSIWYG editor built for the modern web.
                    </p>
                    <div class="mt-5">
                        <div class="w-full">
                            <div class="h-48" x-init="$el._x_quill = new Quill($el, {
                                modules: {
                                    toolbar: [
                                        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                                        ['blockquote', 'code-block'],
                                        [{ header: 1 }, { header: 2 }], // custom button values
                                        [{ list: 'ordered' }, { list: 'bullet' }],
                                        [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
                                        [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
                                        [{ direction: 'rtl' }], // text direction
                                        [{ size: ['small', false, 'large', 'huge'] }], // custom dropdown
                                        [{ header: [1, 2, 3, 4, 5, 6, false] }],
                                        [{ color: [] }, { background: [] }], // dropdown with defaults from theme
                                        [{ font: [] }],
                                        [{ align: [] }],
                                        ['clean'], // remove formatting button
                                    ],
                                },
                                placeholder: 'Enter your content...',
                                theme: 'snow',
                            })"></div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Minimal -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Minimal
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The textarea provides a native and essential solution to almost
                        any web application. But at some point you may need to add
                        formatting to text input.
                        <a href="https://github.com/quilljs/quill/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Quill</a>
                        is a free, open source WYSIWYG editor built for the modern web.
                    </p>
                    <div class="mt-5 w-full">

                        <div class="h-48" x-init="$el._x_quill = new Quill($el, {
                            modules: {
                                toolbar: [
                                    ['bold', 'italic', 'underline'],
                                    [
                                        { list: 'ordered' },
                                        { list: 'bullet' },
                                        { header: 1 },
                                        { background: [] },
                                    ],
                                ],
                            },
                            placeholder: 'Enter your content...',
                            theme: 'snow',
                        })"></div>

                    </div>
                </div>
                
            </div>

            <!-- Filled Header -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Filled Header
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The textarea provides a native and essential solution to almost
                        any web application. But at some point you may need to add
                        formatting to text input.
                        <a href="https://github.com/quilljs/quill/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Quill</a>
                        is a free, open source WYSIWYG editor built for the modern web.
                    </p>
                    <div class="mt-5">
                        <div class="ql-header-filled w-full">
                            <div class="h-48" x-init="$el._x_quill = new Quill($el, {
                                modules: {
                                    toolbar: [
                                        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                                        ['blockquote', 'code-block'],
                                        [{ header: 1 }, { header: 2 }], // custom button values
                                        [{ list: 'ordered' }, { list: 'bullet' }],
                                        [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
                                        [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
                                        [{ direction: 'rtl' }], // text direction
                                        [{ size: ['small', false, 'large', 'huge'] }], // custom dropdown
                                        [{ header: [1, 2, 3, 4, 5, 6, false] }],
                                        [{ color: [] }, { background: [] }], // dropdown with defaults from theme
                                        [{ font: [] }],
                                        [{ align: [] }],
                                        ['clean'], // remove formatting button
                                    ],
                                },
                                placeholder: 'Enter your content...',
                                theme: 'snow',
                            })"></div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Customizing -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Customizing
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        The textarea provides a native and essential solution to almost
                        any web application. But at some point you may need to add
                        formatting to text input.
                        <a href="https://github.com/quilljs/quill/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Quill</a>
                        is a free, open source WYSIWYG editor built for the modern web.
                    </p>
                    <div class="mt-5">
                        <div class="ql-header-filled w-full">
                            <div class="h-48" x-init="$el._x_quill = new Quill($el, {
                                modules: {
                                    toolbar: [
                                        ['bold', 'italic', 'underline', 'strike'],
                                        ['blockquote', 'code-block'],
                                        [{ header: [1, 2, 3, 4, 5, 6, false] }],
                                        [{ color: [] }, { background: [] }],
                                        ['clean'],
                                    ]
                                },
                                placeholder: 'Enter your content...',
                                theme: 'snow',
                            })"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
