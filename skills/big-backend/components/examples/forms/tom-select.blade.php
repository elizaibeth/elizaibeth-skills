<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Input Tags -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Input Tags
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        <a href="https://tom-select.js.org/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Tom
                            Select</a>
                        is a versatile and dynamic &lt;select&gt; UI control. With
                        autocomplete and native-feeling keyboard navigation, it's useful
                        for tagging, contact lists, country selectors, and so on.
                    </p>
                    <div class="bb-inline mt-5">
                        <label class="block">
                            <span>Enter Tags:</span>
                            <input class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { create: true, plugins: ['caret_position', 'input_autogrow'] })" placeholder="Enter tags"
                                type="text" />
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Remove Button -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Remove Button
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        <a href="https://tom-select.js.org/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Tom
                            Select</a>
                        is a versatile and dynamic &lt;select&gt; UI control. With
                        autocomplete and native-feeling keyboard navigation, it's useful
                        for tagging, contact lists, country selectors, and so on.
                    </p>
                    <div class="mt-5">
                        <label class="block">
                            <span>Enter Tags:</span>
                            <input class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, {
                                plugins: ['remove_button'],
                                create: true,
                                onItemRemove: function(val) {
                                    $notification({ text: `${val} removed` })
                                }
                            })" placeholder="Enter tags"
                                type="text" />
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Restore on Backspace -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Restore on Backspace
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        <a href="https://tom-select.js.org/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Tom
                            Select</a>
                        is a versatile and dynamic &lt;select&gt; UI control. With
                        autocomplete and native-feeling keyboard navigation, it's useful
                        for tagging, contact lists, country selectors, and so on.
                    </p>
                    <div class="bb-inline mt-5">
                        <label class="block">
                            <span>Enter Tags:</span>
                            <input class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { plugins: ['restore_on_backspace'], create: true })" placeholder="Enter tags"
                                value="awesome,neat" type="text" />
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Clear Button -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Clear Button
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        <a href="https://tom-select.js.org/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Tom
                            Select</a>
                        is a versatile and dynamic &lt;select&gt; UI control. With
                        autocomplete and native-feeling keyboard navigation, it's useful
                        for tagging, contact lists, country selectors, and so on.
                    </p>
                    <div class="bb-inline mt-5">
                        <label class="block">
                            <span>Enter Tags:</span>
                            <input class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, {
                                plugins: {
                                    'clear_button': {
                                        'title': 'Remove all selected options',
                                    }
                                },
                                persist: false,
                                create: true
                            })" placeholder="Enter tags"
                                value="clear,items" type="text" />
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Single Select -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Single Select
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        <a href="https://tom-select.js.org/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Tom
                            Select</a>
                        is a versatile and dynamic &lt;select&gt; UI control. With
                        autocomplete and native-feeling keyboard navigation, it's useful
                        for tagging, contact lists, country selectors, and so on.
                    </p>
                    <div class="bb-inline mt-5">
                        <label class="block">
                            <span>What type of event is it?</span>
                            <select class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { create: true, sortField: { field: 'text', direction: 'asc' } })">
                                <option>Corporate event</option>
                                <option>Wedding</option>
                                <option>Birthday</option>
                                <option>Other</option>
                            </select>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Select Multiple -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Select Multiple
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        <a href="https://tom-select.js.org/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Tom
                            Select</a>
                        is a versatile and dynamic &lt;select&gt; UI control. With
                        autocomplete and native-feeling keyboard navigation, it's useful
                        for tagging, contact lists, country selectors, and so on.
                    </p>
                    <div class="bb-inline mt-5">
                        <label class="block">
                            <span>Select Countries</span>
                            <select x-init="$el._x_tom = new Tom($el)" class="mt-1.5 w-full" multiple
                                placeholder="Select a state..." autocomplete="off">
                                <option value="">Select a state...</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA" selected>California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY" selected>Wyoming</option>
                            </select>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Custom HTML -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Custom HTML
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        <a href="https://tom-select.js.org/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Tom
                            Select</a>
                        is a versatile and dynamic &lt;select&gt; UI control. With
                        autocomplete and native-feeling keyboard navigation, it's useful
                        for tagging, contact lists, country selectors, and so on.
                    </p>
                    <div class="bb-inline mt-5">
                        <label class="block">
                            <span>Select Authors</span>
                            <select class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, componentExamples.tomSelect.author)" multiple
                                placeholder="Select Authors..."></select>
                        </label>
                    </div>
                </div>
                
            </div>

            <!-- Disable Persist -->
            <div class="bb-surface px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                        Disable Persist
                    </h2>
                    
                </div>
                <div class="max-w-xl">
                    <p>
                        <a href="https://tom-select.js.org/"
                            class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Tom
                            Select</a>
                        is a versatile and dynamic &lt;select&gt; UI control. With
                        autocomplete and native-feeling keyboard navigation, it's useful
                        for tagging, contact lists, country selectors, and so on.
                    </p>
                    <div class="bb-inline mt-5">
                        <label class="block">
                            <span>Enter Tags:</span>
                            <input class="mt-1.5 w-full" x-init="$el._x_tom = new Tom($el, { create: true, persist: false })" placeholder="Enter tags"
                                type="text" />
                        </label>
                    </div>
                </div>
                
            </div>
        </div>
