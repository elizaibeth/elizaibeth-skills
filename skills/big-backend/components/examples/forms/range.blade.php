<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Input Range -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Basic Input Range
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Use our custom range inputs for consistent cross-browser styling
                and built-in customization. Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <label class="block">
                  <input
                    class="bb-range text-slate-500 dark:text-graphite-300"
                    type="range"
                  />
                </label>
              </div>
            </div>
            
          </div>

          <!-- Colored Input Range -->
          <div class="bb-surface px-4 pb-6 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Colored Input Range
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Input Range Thumb can have different colors. Check out code for
                detail of usage.
              </p>
              <div class="mt-5 space-y-6">
                <label class="block">
                  <input
                    value="50"
                    class="bb-range text-brand dark:text-signal"
                    type="range"
                  />
                </label>
                <label class="block">
                  <input
                    value="50"
                    class="bb-range text-coral dark:text-coral-soft"
                    type="range"
                  />
                </label>
                <label class="block">
                  <input value="50" class="bb-range text-info" type="range" />
                </label>
                <label class="block">
                  <input
                    value="50"
                    class="bb-range text-success"
                    type="range"
                  />
                </label>
                <label class="block">
                  <input
                    value="50"
                    class="bb-range text-warning"
                    type="range"
                  />
                </label>
                <label class="block">
                  <input
                    value="50"
                    class="bb-range text-error"
                    type="range"
                  />
                </label>
              </div>
            </div>
            
          </div>

          <!-- Input Range Size -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Input Range Size
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Input Ranges can have various sizes. Check out code for detail
                of usage.
              </p>
              <div class="mt-5 space-y-6">
                <label class="block">
                  <input
                    class="bb-range text-slate-500 [--range-track-h:3px] [--range-thumb-size:12px] dark:text-graphite-300"
                    type="range"
                  />
                </label>
                <label class="block">
                  <input
                    class="bb-range text-slate-500 dark:text-graphite-300"
                    type="range"
                  />
                </label>
                <label class="block">
                  <input
                    class="bb-range text-slate-500 [--range-track-h:8px] [--range-thumb-size:24px] dark:text-graphite-300"
                    type="range"
                  />
                </label>
              </div>
            </div>
            
          </div>

          <!-- Input Range Model 
          @see https://alpinejs.dev/directives/model
          -->

          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Input Range Model
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Model allows you to bind the value of an input element to data
                Check out code for detail of usage.
              </p>
              <div x-data="{range:50}" class="mt-5">
                <div class="flex justify-between">
                  <span>0</span>
                  <span>100</span>
                </div>
                <label class="block">
                  <input
                    x-model="range"
                    class="bb-range text-slate-500 dark:text-graphite-300"
                    type="range"
                  />
                </label>
                <div class="mt-2">
                  <p>Value: <span x-text="range"></span></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
