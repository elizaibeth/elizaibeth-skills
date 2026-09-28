<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Notification -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Basic Notification
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The toast is used to show alerts on top of an overlay. The toast
                will close itself when the close button is clicked, or after a
                timeout — the default is 5 seconds. Check out code for detail of
                usage.
              </p>
              <div class="mt-5">
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({text:'This is a simple notification'})"
                >
                  Default
                </button>
              </div>
            </div>
            
          </div>

          <!-- Notification Variants -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Notification Variants
              </h2>
              
            </div>
            <div>
              <p class="max-w-xl">
                The toast is used to show alerts on top of an overlay. The toast
                will close itself when the close button is clicked, or after a
                timeout — the default is 5 seconds. Check out code for detail of
                usage.
              </p>
              <div class="bb-inline mt-5">
                <button
                  class="bb-action bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                  @click="$notification({text:'This is a simple notification',variant:'brand'})"
                >
                  Primary
                </button>
                <button
                  class="bb-action bg-coral font-medium text-white hover:bg-coral-strong focus:bg-coral-strong active:bg-coral-strong/90"
                  @click="$notification({text:'This is a simple notification',variant:'coral'})"
                >
                  Secondary
                </button>
                <button
                  class="bb-action bg-info font-medium text-white hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90"
                  @click="$notification({text:'This is a simple notification',variant:'info'})"
                >
                  Info
                </button>
                <button
                  class="bb-action bg-success font-medium text-white hover:bg-success-focus focus:bg-success-focus active:bg-success-focus/90"
                  @click="$notification({text:'This is a simple notification',variant:'success'})"
                >
                  Success
                </button>
                <button
                  class="bb-action bg-warning font-medium text-white hover:bg-warning-focus focus:bg-warning-focus active:bg-warning-focus/90"
                  @click="$notification({text:'This is a simple notification',variant:'warning'})"
                >
                  Warning
                </button>
                <button
                  class="bb-action bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus active:bg-error-focus/90"
                  @click="$notification({text:'This is a simple notification',variant:'error'})"
                >
                  Error
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80"
                  @click="$notification({text:'This is a simple notification',variant:'light'})"
                >
                  Light
                </button>
                <button
                  class="bb-action bg-graphite-500 font-medium text-slate-200 hover:bg-graphite-450 focus:bg-graphite-450 active:bg-graphite-450/90"
                  @click="$notification({text:'This is a simple notification',variant:'dark'})"
                >
                  Dark
                </button>
              </div>
            </div>
            
          </div>

          <!-- Notification Position -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Notification Position
              </h2>
              
            </div>
            <div>
              <p class="max-w-xl">
                The toast is used to show alerts on top of an overlay. The toast
                will close itself when the close button is clicked, or after a
                timeout — the default is 5 seconds. Check out code for detail of
                usage.
              </p>
              <div class="bb-inline mt-5">
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({text:'This is a left top notification',variant:'info',position:'left-top'})"
                >
                  Left Top
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({text:'This is a left bottom notification',variant:'info',position:'left-bottom'})"
                >
                  Left Bottom
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({text:'This is a center top notification',variant:'info',position:'center-top'})"
                >
                  Center Top
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({text:'This is a center bottom notification',variant:'info',position:'center-bottom'})"
                >
                  Center Bottom
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({text:'This is a right top notification',variant:'info',position:'right-top'})"
                >
                  Right Top
                </button>
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({text:'This is a right bottom notification',variant:'info',position:'right-bottom'})"
                >
                  Right Bottom
                </button>
              </div>
            </div>
            
          </div>

          <!-- Notification Duration -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Notification Duration
              </h2>
              
            </div>
            <div>
              <p class="max-w-xl">
                The toast is used to show alerts on top of an overlay. The toast
                will close itself when the close button is clicked, or after a
                timeout — the default is 5 seconds. Check out code for detail of
                usage.
              </p>
              <div class="mt-5">
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({text:'This is a simple notification',variant:'info',duration:3000})"
                >
                  3 Seconds
                </button>
              </div>
            </div>
            
          </div>

          <!-- Custom HTML Content -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Custom HTML Content
              </h2>
              
            </div>
            <div>
              <p class="max-w-xl">
                The toast is used to show alerts on top of an overlay. The toast
                will close itself when the close button is clicked, or after a
                timeout — the default is 5 seconds. Check out code for detail of
                usage.
              </p>
              <div class="mt-5">
                <button
                  class="bb-action bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  @click="$notification({content:'#custom-html-notif',duration:3000})"
                >
                  HTML content
                </button>
                <template id="custom-html-notif">
                  <div
                    class="flex max-w-xs overflow-hidden rounded-xl bg-graphite-600 font-normal"
                  >
                    <div class="flex items-start p-4">
                      <div class="bb-avatar size-10">
                        <img
                          class="rounded-full"
                          src="{{asset('images/components/bb-avatar.svg')}}"
                          alt="bb-avatar"
                        />
                        <div
                          class="absolute right-0 size-3 rounded-full border-2 border-graphite-600 bg-brand dark:bg-signal"
                        ></div>
                      </div>
                    </div>
                    <div class="p-2">
                      <div class="flex items-center justify-between space-x-2">
                        <h5
                          class="font-medium tracking-wide text-graphite-100 line-clamp-1 lg:text-base"
                        >
                          Message Header
                        </h5>
                        <button
                          data-notification-remove
                          class="bb-action size-7 rounded-full p-0 text-white hover:bg-white/20 focus:bg-white/20 active:bg-white/25"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"
                            />
                          </svg>
                        </button>
                      </div>
                      <p class="text-graphite-100">
                        Lorem ipsum dolor sit amet, consectetur
                      </p>
                      <div class="flex justify-end px-3 py-1">
                        <a
                          href="#"
                          class="uppercase text-signal-soft hover:underline"
                          >show</a
                        >
                      </div>
                    </div>
                  </div>
                </template>
              </div>
            </div>
            
          </div>
        </div>
