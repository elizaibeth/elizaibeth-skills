<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Usage
          @see https://alpinejs.dev/plugins/persist
          -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Basic Usage
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                <code class="inline-code">$persist</code> useful for persisting
                search filters, active tabs, and other features where users will
                be frustrated if their configuration is reset after refreshing
                or leaving and revisiting a page.
              </p>
              <div
                class="mt-5"
                x-data="{value: $persist('').as('other-value')}"
              >
                <div class="flex -space-x-px">
                  <input
                    x-model="value"
                    class="bb-field h-10 w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Enter text"
                    type="text"
                  />
                  <button
                    @click="location.reload()"
                    class="bb-action z-2 size-10 shrink-0 rounded-l-none bg-brand p-0 font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
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
                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
