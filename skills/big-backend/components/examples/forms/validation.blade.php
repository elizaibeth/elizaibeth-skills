<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Input Validation -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Input Validation
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Before submitting data to the server, it is important to ensure
                all required form controls are filled out, in the correct
                format. This is called client-side form validation. The
                <code class="inline-code">Iodine</code>
                library is used for this purpose. See more on
                <a
                  class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                  href="https://github.com/mattkingshott/iodine"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div
                x-data="componentExamples.formValidation.initFormValidationExample"
                class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6"
              >
                <div>
                  <label class="block">
                    <span>Required value</span>
                    <input
                      x-effect="username.errorMessage = getErrorMessage(username.value, username.validate)"
                      class="bb-field mt-1.5 w-full rounded-xl border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Username"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal':!username.blurred,
                        'border-error': (username.blurred && username.errorMessage),
                        'border-success': (username.blurred && !username.errorMessage)
                      }"
                      x-model="username.value"
                      @blur="username.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny-plus text-error"
                    x-show="username.blurred && username.errorMessage"
                    x-text="username.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Email Value </span>
                    <input
                      x-effect="email.errorMessage = getErrorMessage(email.value, email.validate)"
                      class="bb-field mt-1.5 w-full rounded-xl border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Email"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal': !email.blurred,
                        'border-error': (email.blurred && email.errorMessage),
                        'border-success': (email.blurred && !email.errorMessage)
                      }"
                      x-model="email.value"
                      @blur="email.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny-plus text-error"
                    x-show="email.blurred && email.errorMessage"
                    x-text="email.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Min/Max </span>
                    <input
                      x-effect="minmax.errorMessage = getErrorMessage(minmax.value, minmax.validate)"
                      class="bb-field mt-1.5 w-full rounded-xl border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Number between 5 - 15"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal': !minmax.blurred,
                        'border-error': (minmax.blurred && minmax.errorMessage),
                        'border-success': (minmax.blurred && !minmax.errorMessage)
                      }"
                      x-model="minmax.value"
                      @blur="minmax.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny-plus text-error"
                    x-show="minmax.blurred && minmax.errorMessage"
                    x-text="minmax.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Min/Max Length</span>
                    <input
                      x-effect="minmaxLength.errorMessage = getErrorMessage(minmaxLength.value, minmaxLength.validate)"
                      class="bb-field mt-1.5 w-full rounded-xl border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="String length between 5 to 15"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal': !minmaxLength.blurred,
                        'border-error': (minmaxLength.blurred && minmaxLength.errorMessage),
                        'border-success': (minmaxLength.blurred && !minmaxLength.errorMessage)
                      }"
                      x-model="minmaxLength.value"
                      @blur="minmaxLength.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny-plus text-error"
                    x-show="minmaxLength.blurred && minmaxLength.errorMessage"
                    x-text="minmaxLength.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>URL Address</span>
                    <input
                      x-effect="url.errorMessage = getErrorMessage(url.value, url.validate)"
                      class="bb-field mt-1.5 w-full rounded-xl border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Only URL"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal': !url.blurred,
                        'border-error': (url.blurred && url.errorMessage),
                        'border-success': (url.blurred && !url.errorMessage)
                      }"
                      x-model="url.value"
                      @blur="url.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny-plus text-error"
                    x-show="url.blurred && url.errorMessage"
                    x-text="url.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Instagram Username</span>
                    <input
                      x-effect="instagramUsername.errorMessage = getErrorMessage(instagramUsername.value, instagramUsername.validate)"
                      class="bb-field mt-1.5 w-full rounded-xl border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Instagram Username"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal': !instagramUsername.blurred,
                        'border-error': (instagramUsername.blurred && instagramUsername.errorMessage),
                        'border-success': (instagramUsername.blurred && !instagramUsername.errorMessage)
                      }"
                      x-model="instagramUsername.value"
                      @blur="instagramUsername.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny-plus text-error"
                    x-show="instagramUsername.blurred && instagramUsername.errorMessage"
                    x-text="instagramUsername.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>Start With A</span>
                    <input
                      x-effect="startWith.errorMessage = getErrorMessage(startWith.value, startWith.validate)"
                      class="bb-field mt-1.5 w-full rounded-xl border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Start With A"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal': !startWith.blurred,
                        'border-error': (startWith.blurred && startWith.errorMessage),
                        'border-success': (startWith.blurred && !startWith.errorMessage)
                      }"
                      x-model="startWith.value"
                      @blur="startWith.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny-plus text-error"
                    x-show="startWith.blurred && startWith.errorMessage"
                    x-text="startWith.errorMessage"
                  ></span>
                </div>

                <div>
                  <label class="block">
                    <span>End With Z</span>
                    <input
                      x-effect="endWith.errorMessage = getErrorMessage(endWith.value, endWith.validate)"
                      class="bb-field mt-1.5 w-full rounded-xl border bg-transparent px-3 py-2 placeholder:text-slate-400/70"
                      placeholder="Start With A"
                      type="text"
                      :class="{
                        'border-slate-300 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal': !endWith.blurred,
                        'border-error': (endWith.blurred && endWith.errorMessage),
                        'border-success': (endWith.blurred && !endWith.errorMessage)
                      }"
                      x-model="endWith.value"
                      @blur="endWith.blurred = true"
                    />
                  </label>
                  <span
                    class="text-tiny-plus text-error"
                    x-show="endWith.blurred && endWith.errorMessage"
                    x-text="endWith.errorMessage"
                  ></span>
                </div>
              </div>
            </div>
            
          </div>
        </div>
