<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Input Group -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Input Group
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Easily extend form controls by adding text, buttons, or button
                groups on either side of textual inputs, custom selects, and
                custom file inputs. Check out code for detail of usage.
              </p>
              <div class="mt-5 space-y-4">
                <div>
                  <span>Prepend Addon:</span>
                  <label class="mt-1.5 flex -space-x-px">
                    <span
                      class="flex items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-graphite-450"
                    >
                      <span class="-mt-1">@</span>
                  </span>
                    <input
                      class="bb-field w-full rounded-r-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                      placeholder="Username"
                      type="text"
                    />
                  </label>
                </div>
                <div>
                  <span>Append Addon:</span>
                  <label class="mt-1.5 flex -space-x-px">
                    <input
                      class="bb-field w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                      placeholder="Username"
                      type="text"
                    />
                    <span
                      class="flex items-center justify-center rounded-r-lg border border-slate-300 px-3.5 font-inter dark:border-graphite-450"
                    >
                      <span>@site.com</span>
                  </span>
                  </label>
                </div>
                <div>
                  <span>Between input:</span>
                  <label class="mt-1 flex -space-x-px">
                    <span
                      class="flex items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-graphite-450"
                    >
                      <span>$</span>
                  </span>
                    <input
                      class="bb-field w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                      placeholder="Enter Price"
                      type="text"
                    />
                    <span
                      class="flex items-center justify-center rounded-r-lg border border-slate-300 px-3.5 font-inter dark:border-graphite-450"
                    >
                      <span>.00</span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Filled Addon-->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Filled Addon
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Input addon can be filled. Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <div>
                  <span>Between input:</span>
                  <label class="mt-1 flex -space-x-px">
                    <span
                      class="flex items-center justify-center rounded-l-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-graphite-450 dark:bg-graphite-500 dark:text-graphite-100"
                    >
                      <span>$</span>
                    </span>
                    <input
                      class="bb-field w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                      placeholder="Enter price"
                      type="text"
                    />
                    <span
                      class="flex items-center justify-center rounded-r-lg border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-graphite-450 dark:bg-graphite-500 dark:text-graphite-100"
                    >
                      <span>.00</span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Megred Addon -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Merged Addon
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Input addon can be merged. Check out code for detail of usage.
              </p>
              <div class="mt-5 space-y-4">
                <label class="relative flex">
                  <input
                    class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Search here..."
                    type="text"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4.5 transition-colors duration-200"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"
                      />
                    </svg>
                  </span>
                </label>
                <label class="relative flex">
                  <input
                    class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pr-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Password"
                    type="text"
                  />
                  <span
                    class="pointer-events-none absolute right-0 flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                  >
                    <svg
                      fill="currentColor"
                      class="size-4.5"
                      viewBox="0 0 20 20"
                    >
                      <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                      <path
                        fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </span>
                </label>
                <div class="relative flex">
                  <input
                    class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-9 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Search here..."
                    type="text"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4.5 transition-colors duration-200"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"
                      />
                    </svg>
                  </span>
                  <div
                    class="pointer-events-none absolute right-0 flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                  >
                    <div
                      class="bb-loader size-5 animate-spin rounded-full border-2 border-slate-150 border-r-slate-400 dark:border-graphite-500 dark:border-r-graphite-300"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Dropdown, Select, Button examples -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                More Examples
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Easily extend form controls by adding text, buttons, or button
                groups on either side of textual inputs, custom selects, and
                custom file inputs. Check out code for detail of usage.
              </p>
              <div class="mt-5 space-y-4">
                <div class="flex -space-x-px">
                  <input
                    class="bb-field w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Username"
                    type="text"
                  />
                  <div
                    class="flex items-center justify-center border border-slate-300 bg-slate-150 px-3.5 font-inter text-slate-800 dark:border-graphite-450 dark:bg-graphite-500 dark:text-graphite-100"
                  >
                    <span class="-mt-1">@</span>
                  </div>
                  <input
                    class="bb-field w-full rounded-r-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Server"
                    type="text"
                  />
                </div>
                <div class="flex -space-x-px">
                  <select
                    class="bb-select rounded-l-full border border-slate-300 bg-white px-3 py-2 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:bg-graphite-700 dark:hover:border-graphite-400 dark:focus:border-signal"
                  >
                    <option>$</option>
                    <option>£</option>
                    <option>€</option>
                  </select>

                  <input
                    class="bb-field w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Price"
                    type="text"
                  />

                  <button
                    class="bb-action rounded-r-full bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  >
                    Purchase
                  </button>
                </div>
                <div class="relative flex -space-x-px">
                  <input
                    class="bb-field peer w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Search..."
                    type="text"
                  />

                  <button
                    class="bb-action rounded-l-none bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                  >
                    Dropdown
                  </button>
                  <div
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                  >
                    <svg
                      fill="none"
                      stroke="currentColor"
                      class="size-5 transition-colors duration-200"
                      viewBox="0 0 24 24"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                      />
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
