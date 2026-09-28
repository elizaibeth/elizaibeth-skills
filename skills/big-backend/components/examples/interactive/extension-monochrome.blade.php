<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!--  Monochrome Mode  -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Monochrome Mode
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Monochromatic UI/UX design may look simpler. Monochrome mode can
                be used if the network is offline.
              </p>
              <div class="bb-inline mt-5 flex flex-wrap">
                <div
                  class="size-16 rounded-xl bg-brand dark:bg-signal"
                ></div>
                <div class="size-16 rounded-xl bg-coral"></div>
                <div class="size-16 rounded-xl bg-info"></div>
                <div class="size-16 rounded-xl bg-success"></div>
                <div class="size-16 rounded-xl bg-warning"></div>
                <div class="size-16 rounded-xl bg-error"></div>
              </div>
              <label class="mt-4 flex items-center space-x-2">
                <input
                  x-model="$store.global.isMonochromeModeEnabled"
                  class="bb-switch h-5 w-10 rounded-xl bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-graphite-900 dark:before:bg-graphite-300 dark:checked:bg-graphite-400 dark:checked:before:bg-white"
                  type="checkbox"
                />
                <span> Toggle Monochrome Mode</span>
              </label>
            </div>
            
          </div>
        </div>
