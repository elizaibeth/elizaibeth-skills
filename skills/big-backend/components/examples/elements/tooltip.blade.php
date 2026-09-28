<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Tooltip -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Basic Tooltip
              </h2>
              
            </div>

            <div>
              <p class="max-w-2xl">
                A tooltip is often used to specify extra information about
                something when the user moves the mouse pointer over an element.
                Check out code for detail of usage.
              </p>
              <div class="bb-inline mt-5 flex flex-wrap">
                <button
                  x-tooltip="'Default'"
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                >
                  Default
                </button>
                <button
                  x-tooltip.light="'Light'"
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80"
                >
                  Light
                </button>
                <button
                  x-tooltip.brand="'Primary'"
                  class="bb-action bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                >
                  Primary
                </button>
                <button
                  x-tooltip.coral="'Secondary'"
                  class="bb-action bg-coral font-medium text-white hover:bg-coral-strong focus:bg-coral-strong active:bg-coral-strong/90"
                >
                  Secondary
                </button>
                <button
                  x-tooltip.info="'Info'"
                  class="bb-action bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90"
                >
                  Info
                </button>
                <button
                  x-tooltip.success="'Success'"
                  class="bb-action bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                >
                  Success
                </button>
                <button
                  x-tooltip.warning="'Warning'"
                  class="bb-action bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90"
                >
                  Warning
                </button>
                <button
                  x-tooltip.error="'Error'"
                  class="bb-action bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"
                >
                  Error
                </button>
              </div>
            </div>

            
          </div>

          <!-- Tooltip Position -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Tooltip Position
              </h2>
              
            </div>

            <div>
              <p class="max-w-2xl">
                Tooltip can be placed in four base ways in relation to the
                reference element. Check out code for detail of usage.
              </p>
              <div class="bb-inline mt-5 flex flex-wrap">
                <div
                  class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3"
                >
                  <button
                    x-tooltip.placement.top.success="'Top'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Top
                  </button>
                  <button
                    x-tooltip.placement.top-start.success="'Top Start'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Top Start
                  </button>
                  <button
                    x-tooltip.placement.top-end.success="'Top End'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Top End
                  </button>
                  <button
                    x-tooltip.placement.right.success="'Right'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Right
                  </button>
                  <button
                    x-tooltip.placement.right-end.success="'Right End'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Right End
                  </button>
                  <button
                    x-tooltip.placement.right-start.success="'Right Start'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Right Start
                  </button>
                  <button
                    x-tooltip.placement.bottom.success="'Bottom'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Bottom
                  </button>
                  <button
                    x-tooltip.placement.bottom-start.success="'Bottom Start'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Bottom Start
                  </button>
                  <button
                    x-tooltip.placement.bottom-end.success="'Bottom End'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Bottom End
                  </button>
                  <button
                    x-tooltip.placement.left.success="'Left'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Left
                  </button>
                  <button
                    x-tooltip.placement.left-start.success="'Left Start'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Left Start
                  </button>
                  <button
                    x-tooltip.placement.left-end.success="'Left End'"
                    class="bb-action border border-brand font-medium text-brand hover:bg-brand hover:text-white focus:bg-brand focus:text-white active:bg-brand/90 dark:border-signal dark:text-signal-soft dark:hover:bg-signal dark:hover:text-white dark:focus:bg-signal dark:focus:text-white dark:active:bg-signal/90"
                  >
                    Left End
                  </button>
                </div>
              </div>
            </div>

            
          </div>

          <!-- Tooltip Delay, Duration -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Tooltip Delay, Duration
              </h2>
              
            </div>

            <div>
              <p class="max-w-2xl">
                Tooltip can delay hiding or showing after a trigger. Check out
                code for detail of usage.
              </p>
              <div class="bb-inline mt-5 flex flex-wrap">
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.delay.500="'Debounce 500 millisecond'"
                >
                  Delay
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.duration.1000="'Duration 1 second animate tooltip'"
                >
                  Duration
                </button>
              </div>
            </div>

            
          </div>

          <!-- Tooltip Trigger -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Tooltip Trigger
              </h2>
              
            </div>

            <div>
              <p class="max-w-2xl">
                Tooltip can be triggered by a variety of different events,
                including click, focus, or any other even. Check out code for
                detail of usage.
              </p>
              <div class="bb-inline mt-5 flex flex-wrap">
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.on.mouseenter="'Hover me'"
                >
                  Hover
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.on.click="'Click me'"
                >
                  Click
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.on.focusin="'Focus me'"
                >
                  Focus
                </button>
              </div>
            </div>

            
          </div>

          <!-- Follow Cursor -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Follow Cursor
              </h2>
              
            </div>

            <div>
              <p class="max-w-2xl">
                Tooltip can follow the mouse cursor and abide by a certain axis.
                Additionally, the tooltip can follow the cursor until it shows,
                at which point it will stop following. Check out code for detail
                of usage.
              </p>
              <div class="bb-inline mt-5 flex flex-wrap">
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.cursor="'Follow Cursor'"
                >
                  Cursor
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.cursor.x="'Follow Cursor horizontal'"
                >
                  Horizontal
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.cursor.y="'Follow Cursor Vertical'"
                >
                  Vertical
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.on.click.cursor.initial="'Follow Cursor initial'"
                >
                  Click me
                </button>
              </div>
            </div>

            
          </div>

          <!-- HTML Content Tooltip -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                HTML Content Tooltip
              </h2>
              
            </div>

            <div>
              <p class="max-w-2xl">
                Tooltip tippy can contain HTML. Check out code for detail of
                usage.
              </p>
              <div class="bb-inline mt-5 flex flex-wrap">
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  x-tooltip.content.interactive="'#content1'"
                >
                  Content
                </button>

                <template id="content1">
                  <div
                    class="flex space-x-3 rounded-xl bg-slate-150 p-3 dark:bg-graphite-500"
                  >
                    <div class="bb-avatar">
                      <img
                        class="rounded-full"
                        src="{{asset('images/components/bb-avatar.svg')}}"
                        alt="image"
                      />
                    </div>
                    <div>
                      <p class="font-medium text-slate-700 dark:text-graphite-100">
                        John Doe
                      </p>
                      <p class="text-xs text-slate-500 dark:text-graphite-200">
                        Product Manager
                      </p>
                    </div>
                  </div>
                </template>
              </div>
            </div>

            
          </div>
        </div>
