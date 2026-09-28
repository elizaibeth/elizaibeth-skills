<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Textarea -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Basic Textarea
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The Textarea defines a multi-line text input control. The
                Textarea is often used in a form, to collect user inputs like
                comments or reviews.
              </p>
              <div class="mt-5">
                <label class="block">
                  <textarea
                    rows="4"
                    placeholder=" Enter Text"
                    class="bb-textarea w-full resize-none rounded-xl border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                  ></textarea>
                </label>
              </div>
            </div>
            
          </div>

          <!-- Filled Textarea -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Filled Textarea
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The Textarea can be filled. Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <textarea
                    rows="4"
                    placeholder=" Enter Text"
                    class="bb-textarea w-full resize-none rounded-xl bg-slate-150 p-2.5 placeholder:text-slate-400 dark:bg-graphite-900 dark:placeholder:text-graphite-300"
                  ></textarea>
                </label>
              </div>
            </div>
            
          </div>

          <!-- Resizeabele Textarea -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Resizeabele Textarea
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The textarea can be resizeabele. Check out code for detail of
                usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <textarea
                    rows="4"
                    placeholder=" Enter Text"
                    class="bb-textarea w-full rounded-xl border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                  ></textarea>
                </label>
              </div>
            </div>
            
          </div>

          <!-- Disabled Textarea -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Disabled Textarea
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The textarea have their own style when disabled. Check out code
                for detail of usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <textarea
                    disabled
                    rows="4"
                    placeholder=" Enter Text"
                    class="bb-textarea w-full resize-none rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand disabled:pointer-events-none disabled:select-none disabled:border-none disabled:bg-zinc-100 dark:border-graphite-450 dark:bg-graphite-600 dark:hover:border-graphite-400 dark:focus:border-signal"
                  ></textarea>
                </label>
              </div>
            </div>
            
          </div>

          <!-- With Header -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                With Header
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The textare can have header. Check out code for detail of usage.
              </p>
              <div
                class="mt-5 rounded-xl border border-slate-300 transition-colors duration-200 focus-within:border-brand! hover:border-slate-400 dark:border-graphite-450 dark:focus-within:border-signal! dark:hover:border-graphite-400"
              >
                <div class="flex justify-between">
                  <label class="block w-full">
                    <input
                      type="text"
                      class="bb-field w-full bg-transparent p-3 text-lg font-medium placeholder:text-slate-400/70"
                      placeholder="Title"
                    />
                  </label>
                  <div class="p-2">
                    <button
                      class="bb-action size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
                <label class="block">
                  <textarea
                    rows="5"
                    placeholder="Enter Text"
                    class="bb-textarea w-full resize-none bg-transparent p-3 pt-0 placeholder:text-slate-400/70"
                  ></textarea>
                </label>
              </div>
            </div>
            
          </div>

          <!-- With Footer -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                With Footer
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The textare can have footer. Check out code for detail of usage.
              </p>
              <div class="mt-5 flex space-x-4 overflow-x-auto">
                <div class="bb-avatar size-12">
                  <img
                    class="rounded-full"
                    src="{{asset('images/components/bb-avatar.svg')}}"
                    alt="bb-avatar"
                  />
                  <div
                    class="absolute right-0 size-3.5 rounded-full border-2 border-white bg-info dark:border-graphite-700"
                  ></div>
                </div>
                <div
                  class="w-full rounded-xl rounded-tl-none border border-slate-300 transition-colors duration-200 focus-within:border-brand! hover:border-slate-400 dark:border-graphite-450 dark:focus-within:border-signal! dark:hover:border-graphite-400"
                >
                  <label class="block">
                    <textarea
                      rows="5"
                      placeholder="Write a comment"
                      class="bb-textarea w-full resize-none bg-transparent p-3 pb-0 placeholder:text-slate-400/70"
                    ></textarea>
                  </label>
                  <div class="flex justify-between p-2.5">
                    <div class="flex items-end space-x-1">
                      <button
                        class="bb-action -ml-1 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="size-5"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="1.5"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"
                          />
                        </svg>
                      </button>
                      <button
                        class="bb-action size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="size-5"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="1.5"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"
                          />
                        </svg>
                      </button>
                      <button
                        class="bb-action size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="size-5"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="1.5"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                      </button>
                    </div>
                    <button
                      class="bb-action rounded-md bg-brand px-4 text-xs-plus font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                    >
                      Comment
                    </button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- With Header & Footer -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                With Header & Footer
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The textare can have header and footer. Check out code for
                detail of usage.
              </p>
              <div
                class="mt-5 rounded-xl border border-slate-300 transition-colors duration-200 focus-within:border-brand! hover:border-slate-400 dark:border-graphite-450 dark:focus-within:border-signal! dark:hover:border-graphite-400"
              >
                <div class="flex justify-between">
                  <label class="block w-full">
                    <input
                      type="text"
                      class="bb-field w-full bg-transparent p-3 text-lg font-medium placeholder:text-slate-400/70"
                      placeholder="Title"
                    />
                  </label>
                  <div class="p-2">
                    <button
                      class="bb-action size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
                <label>
                  <textarea
                    rows="5"
                    placeholder="Write the post"
                    class="bb-textarea w-full resize-none bg-transparent p-3 py-0 placeholder:text-slate-400/70"
                  ></textarea>
                </label>
                <div class="flex justify-between p-2.5">
                  <div class="flex items-end space-x-1">
                    <button
                      class="bb-action -ml-1 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"
                        />
                      </svg>
                    </button>
                    <button
                      class="bb-action -ml-1 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                        />
                      </svg>
                    </button>
                  </div>
                  <button
                    class="bb-action rounded-md bg-brand px-4 text-xs-plus font-medium text-white hover:bg-brand-strong hover:shadow-lg hover:shadow-brand/50 focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:shadow-signal/50 dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                  >
                    Save Post
                  </button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
