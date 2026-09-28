<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Usage -->
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
                <code class="inline-code">$clipboard</code> magic property to
                all of your Alpine components that can be used to copy data to
                the user's clipboard. Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  class="alert flex items-center justify-between rounded-xl bg-brand px-4 py-3 text-white dark:bg-signal sm:px-5"
                >
                  <p id="clipboardContent1">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <button
                    class="bb-action h-6 shrink-0 rounded-md bg-white/20 px-2 text-xs text-white active:bg-white/25"
                    @click="$clipboard({
                        content:document.querySelector('#clipboardContent1').innerText,
                        success:()=>$notification({text:'Text Copied',variant:'success'}),
                        error:()=>$notification({text:'Error',variant:'error'})
                    })"
                  >
                    Copy
                  </button>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Advanced Usage -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Advanced Usage
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                <code class="inline-code">$clipboard</code> magic property to
                all of your Alpine components that can be used to copy data to
                the user's clipboard. Check out code for detail of usage.
              </p>
              <div x-data="{text:''}" class="mt-5">
                <div class="flex -space-x-px">
                  <input
                    x-model="text"
                    class="bb-field w-full rounded-l-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Enter text"
                    type="text"
                  />

                  <button
                    @click="$clipboard({
                        content:text,
                        success:()=>$notification({text:'Text Copied',variant:'success'}),
                        error:()=>$notification({text:'Error',variant:'error'})
                    })"
                    class="bb-action z-2 rounded-l-none bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                  >
                    Copy
                  </button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
