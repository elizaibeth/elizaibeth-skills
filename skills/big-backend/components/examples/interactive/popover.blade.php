<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Popover -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Basic Popover
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The Popover component is similar to tooltips. The difference is
                that the popover can contain much more content. Check out code
                for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  x-data="usePopper({
                     offset: 12,
                     placement: 'right-start',
                     modifiers: [
                        {name: 'flip', options: {fallbackPlacements: ['bottom','top']}},
                        {name: 'preventOverflow', options: {padding: 10}}
                     ]
                  })"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="flex"
                >
                  <button
                    class="bb-action bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    Basic Popover
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div class="popper-box max-w-xs">
                      <div
                        class="rounded-md border border-slate-150 bg-white p-4 dark:border-graphite-600 dark:bg-graphite-700"
                      >
                        <h3
                          class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100"
                        >
                          UI/UX Design
                        </h3>
                        <p class="mt-2">
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit.
                        </p>
                        <div class="mt-3 flex space-x-2">
                          <a
                            href="#"
                            class="bb-tag bg-slate-150 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-100 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                          >
                            Tag 1
                          </a>
                          <a
                            href="#"
                            class="bb-tag bg-slate-150 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-100 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                          >
                            Tag 2
                          </a>
                          <a
                            href="#"
                            class="bb-tag bg-slate-150 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-100 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                          >
                            Tag 3
                          </a>
                        </div>
                        <p
                          class="mt-3 text-xs text-slate-400 dark:text-graphite-300"
                        >
                          Lorem ipsum dolor sit amet, elit.
                        </p>
                      </div>
                      <div class="size-4" data-popper-arrow>
                        <svg
                          viewBox="0 0 16 9"
                          xmlns="http://www.w3.org/2000/svg"
                          class="absolute size-4"
                          fill="currentColor"
                        >
                          <path
                            class="text-slate-150 dark:text-graphite-600"
                            d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                          />
                          <path
                            class="text-white dark:text-graphite-700"
                            d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                          />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Advanced Popover -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Advanced Popover
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The Popover component is similar to tooltips. The difference is
                that the popover can contain much more content. Check out code
                for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  x-data="usePopper({
                     offset: 12,
                     placement: 'right-start',
                     modifiers: [
                        {name: 'flip', options: {fallbackPlacements: ['bottom','top']}},
                        {name: 'preventOverflow', options: {padding: 10}}
                     ]
                  })"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="flex"
                >
                  <button
                    class="bb-action bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    Lessons
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div class="popper-box max-w-xs">
                      <div
                        class="rounded-md border border-slate-150 bg-white py-3 px-4 dark:border-graphite-600 dark:bg-graphite-700"
                      >
                        <h3
                          class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100"
                        >
                          Group Lesson
                        </h3>

                        <div class="mt-3">
                          <p
                            class="font-medium text-slate-600 dark:text-graphite-100"
                          >
                            Social Media Marketing
                          </p>
                          <p class="mt-1 text-xs">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                          </p>
                        </div>
                        <div class="mt-4 flex flex-wrap -space-x-2">
                          <div class="bb-avatar size-8 hover:z-10">
                            <img
                              class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                              src="{{asset('images/components/bb-avatar.svg')}}"
                              alt="bb-avatar"
                            />
                          </div>

                          <div class="bb-avatar size-8 hover:z-10">
                            <div
                              class="is-initial rounded-full bg-info text-xs-plus uppercase text-white ring-3 ring-white dark:ring-graphite-700"
                            >
                              jd
                            </div>
                          </div>

                          <div class="bb-avatar size-8 hover:z-10">
                            <img
                              class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                              src="{{asset('images/components/bb-avatar.svg')}}"
                              alt="bb-avatar"
                            />
                          </div>

                          <div class="bb-avatar size-8 hover:z-10">
                            <img
                              class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                              src="{{asset('images/components/bb-avatar.svg')}}"
                              alt="bb-avatar"
                            />
                          </div>
                        </div>
                        <div class="mt-4 flex items-center justify-between">
                          <p class="flex items-center space-x-2">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="size-4.5 text-slate-400 dark:text-graphite-300"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                              />
                            </svg>
                            <span class="text-xs">25 May, 2022</span>
                          </p>
                          <button
                            class="bb-action size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 hover:shadow-lg hover:shadow-slate-200/50 focus:bg-slate-200 focus:shadow-lg focus:shadow-slate-200/50 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:hover:shadow-graphite-450/50 dark:focus:bg-graphite-450 dark:focus:shadow-graphite-450/50 dark:active:bg-graphite-450/90"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="size-5 rotate-45"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M7 11l5-5m0 0l5 5m-5-5v12"
                              />
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="size-4" data-popper-arrow>
                        <svg
                          viewBox="0 0 16 9"
                          xmlns="http://www.w3.org/2000/svg"
                          class="absolute size-4"
                          fill="currentColor"
                        >
                          <path
                            class="text-slate-150 dark:text-graphite-600"
                            d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                          />
                          <path
                            class="text-white dark:text-graphite-700"
                            d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                          />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- From Popover -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Form Popover
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The Popover component is similar to tooltips. The difference is
                that the popover can contain much more content. Check out code
                for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  x-data="usePopper({
                     offset: 12,
                     placement: 'auto',
                     modifiers: [
                        {name: 'preventOverflow', options: {padding: 10}}
                     ]
                  })"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="flex"
                >
                  <button
                    class="bb-action bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    Choose Columns
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div class="popper-box max-w-[16rem]">
                      <div
                        class="rounded-md border border-slate-150 bg-white p-4 dark:border-graphite-600 dark:bg-graphite-700"
                      >
                        <h3
                          class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100"
                        >
                          Select Columns
                        </h3>
                        <p class="mt-1 text-xs-plus">
                          Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <div
                          class="mt-4 flex flex-col space-y-4 text-slate-600 dark:text-graphite-100"
                        >
                          <label class="inline-flex items-center space-x-2">
                            <input
                              checked
                              class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                              type="checkbox"
                            />
                            <span>ID</span>
                          </label>
                          <label class="inline-flex items-center space-x-2">
                            <input
                              checked
                              class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                              type="checkbox"
                            />
                            <span>Name</span>
                          </label>
                          <label class="inline-flex items-center space-x-2">
                            <input
                              checked
                              class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                              type="checkbox"
                            />
                            <span>Email</span>
                          </label>
                          <label class="inline-flex items-center space-x-2">
                            <input
                              class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                              type="checkbox"
                            />
                            <p>Address</p>
                          </label>
                        </div>
                        <div
                          class="my-4 h-px bg-slate-200 dark:bg-graphite-500"
                        ></div>
                        <div
                          class="flex flex-col space-y-4 text-slate-600 dark:text-graphite-100"
                        >
                          <label class="inline-flex items-center space-x-2">
                            <input
                              checked
                              class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                              type="checkbox"
                            />
                            <span>Created at</span>
                          </label>
                          <label class="inline-flex items-center space-x-2">
                            <input
                              class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                              type="checkbox"
                            />
                            <span>Updated at</span>
                          </label>
                        </div>
                        <button
                          @click="isShowPopper=false"
                          class="bb-action mt-4 h-8 w-full rounded-md bg-brand px-4 text-xs-plus font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                        >
                          Apply
                        </button>
                      </div>
                      <div class="size-4" data-popper-arrow>
                        <svg
                          viewBox="0 0 16 9"
                          xmlns="http://www.w3.org/2000/svg"
                          class="absolute size-4"
                          fill="currentColor"
                        >
                          <path
                            class="text-slate-150 dark:text-graphite-600"
                            d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                          />
                          <path
                            class="text-white dark:text-graphite-700"
                            d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                          />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Profile Popover -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Profile Popover
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The Popover component is similar to tooltips. The difference is
                that the popover can contain much more content. Check out code
                for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  class="flex flex-wrap justify-center -space-x-2 sm:justify-start"
                >
                  <div
                    x-data="usePopper({
                       offset: 12,
                       placement: 'top',
                       modifiers: [
                          {name: 'preventOverflow', options: {padding: 10}}
                       ]                     
                    })"
                    class="flex"
                    @mouseleave="isShowPopper = false"
                    @mouseenter="isShowPopper = true"
                  >
                    <div x-ref="popperRef" class="bb-avatar size-8 hover:z-10">
                      <img
                        class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                        src="{{asset('images/components/bb-avatar.svg')}}"
                        alt="bb-avatar"
                      />
                    </div>
                    <div
                      x-ref="popperRoot"
                      class="bb-popover"
                      :class="isShowPopper && 'show'"
                    >
                      <div class="popper-box">
                        <div
                          class="w-48 rounded-md border border-slate-150 bg-white px-4 py-5 text-center dark:border-graphite-600 dark:bg-graphite-700"
                        >
                          <div class="bb-avatar size-16">
                            <img
                              class="rounded-full"
                              src="{{asset('images/components/bb-avatar.svg')}}"
                              alt="bb-avatar"
                            />
                          </div>
                          <p
                            class="pt-2 text-base font-medium tracking-wide text-slate-700 dark:text-graphite-100"
                          >
                            John Doe
                          </p>
                          <a
                            href="#"
                            class="font-inter tracking-wide hover:text-brand focus:text-brand dark:hover:text-signal-soft dark:focus:text-signal-soft"
                            >@johndoeaccount</a
                          >
                          <button
                            class="bb-action mt-4 h-8 rounded-full bg-brand px-4 text-xs-plus font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                          >
                            Follow
                          </button>
                        </div>
                        <div class="size-4" data-popper-arrow>
                          <svg
                            viewBox="0 0 16 9"
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute size-4"
                            fill="currentColor"
                          >
                            <path
                              class="text-slate-150 dark:text-graphite-600"
                              d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                            />
                            <path
                              class="text-white dark:text-graphite-700"
                              d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    x-data="usePopper({
                       offset: 12,
                       placement: 'top',    
                       modifiers: [
                          {name: 'preventOverflow', options: {padding: 10}}
                       ]                    
                    })"
                    class="flex"
                    @mouseleave="isShowPopper = false"
                    @mouseenter="isShowPopper = true"
                  >
                    <div x-ref="popperRef" class="bb-avatar size-8 hover:z-10">
                      <img
                        class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                        src="{{asset('images/components/bb-avatar.svg')}}"
                        alt="bb-avatar"
                      />
                    </div>
                    <div
                      x-ref="popperRoot"
                      class="bb-popover"
                      :class="isShowPopper && 'show'"
                    >
                      <div class="popper-box">
                        <div
                          class="w-48 rounded-md border border-slate-150 bg-white px-4 py-5 text-center dark:border-graphite-600 dark:bg-graphite-700"
                        >
                          <div class="bb-avatar size-16">
                            <img
                              class="rounded-full"
                              src="{{asset('images/components/bb-avatar.svg')}}"
                              alt="bb-avatar"
                            />
                          </div>
                          <p
                            class="pt-2 text-base font-medium tracking-wide text-slate-700 dark:text-graphite-100"
                          >
                            Sally Ramos
                          </p>
                          <a
                            href="#"
                            class="font-inter tracking-wide hover:text-brand focus:text-brand dark:hover:text-signal-soft dark:focus:text-signal-soft"
                            >@sallyramos
                          </a>
                          <button
                            class="bb-action mt-4 h-8 rounded-full bg-brand px-4 text-xs-plus font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                          >
                            Follow
                          </button>
                        </div>
                        <div class="size-4" data-popper-arrow>
                          <svg
                            viewBox="0 0 16 9"
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute size-4"
                            fill="currentColor"
                          >
                            <path
                              class="text-slate-150 dark:text-graphite-600"
                              d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                            />
                            <path
                              class="text-white dark:text-graphite-700"
                              d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    x-data="usePopper({
                       offset: 12,
                       placement: 'top',  
                       modifiers: [
                          {name: 'preventOverflow', options: {padding: 10}}
                       ]                      
                    })"
                    class="flex"
                    @mouseleave="isShowPopper = false"
                    @mouseenter="isShowPopper = true"
                  >
                    <div x-ref="popperRef" class="bb-avatar size-8 hover:z-10">
                      <img
                        class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                        src="{{asset('images/components/bb-avatar.svg')}}"
                        alt="bb-avatar"
                      />
                    </div>
                    <div
                      x-ref="popperRoot"
                      class="bb-popover"
                      :class="isShowPopper && 'show'"
                    >
                      <div class="popper-box">
                        <div
                          class="w-48 rounded-md border border-slate-150 bg-white px-4 py-5 text-center dark:border-graphite-600 dark:bg-graphite-700"
                        >
                          <div class="bb-avatar size-16">
                            <img
                              class="rounded-full"
                              src="{{asset('images/components/bb-avatar.svg')}}"
                              alt="bb-avatar"
                            />
                          </div>
                          <p
                            class="pt-2 text-base font-medium tracking-wide text-slate-700 dark:text-graphite-100"
                          >
                            Katrina West
                          </p>
                          <a
                            href="#"
                            class="font-inter tracking-wide hover:text-brand focus:text-brand dark:hover:text-signal-soft dark:focus:text-signal-soft"
                            >@katrinawest
                          </a>
                          <button
                            class="bb-action mt-4 h-8 rounded-full bg-brand px-4 text-xs-plus font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                          >
                            Follow
                          </button>
                        </div>
                        <div class="size-4" data-popper-arrow>
                          <svg
                            viewBox="0 0 16 9"
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute size-4"
                            fill="currentColor"
                          >
                            <path
                              class="text-slate-150 dark:text-graphite-600"
                              d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                            />
                            <path
                              class="text-white dark:text-graphite-700"
                              d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Profile Popover -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Profile Popover
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                The Popover component is similar to tooltips. The difference is
                that the popover can contain much more content. Check out code
                for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  class="flex flex-wrap justify-center -space-x-2 sm:justify-start"
                >
                  <div
                    x-data="usePopper({
                       offset: 12,
                       placement: 'top',
                       modifiers: [
                          {name: 'preventOverflow', options: {padding: 10}}
                       ]                     
                    })"
                    class="flex"
                    @mouseleave="isShowPopper = false"
                    @mouseenter="isShowPopper = true"
                  >
                    <div x-ref="popperRef" class="bb-avatar size-8 hover:z-10">
                      <img
                        class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                        src="{{asset('images/components/bb-avatar.svg')}}"
                        alt="bb-avatar"
                      />
                    </div>
                    <div
                      x-ref="popperRoot"
                      class="bb-popover"
                      :class="isShowPopper && 'show'"
                    >
                      <div class="popper-box">
                        <div
                          class="w-72 rounded-md border border-slate-150 bg-white p-3 dark:border-graphite-600 dark:bg-graphite-700"
                        >
                          <div class="flex space-x-3">
                            <div class="bb-avatar size-10">
                              <img
                                class="rounded-full"
                                src="{{asset('images/components/bb-avatar.svg')}}"
                                alt="bb-avatar"
                              />
                            </div>
                            <div
                              class="flex w-full items-start justify-between"
                            >
                              <div>
                                <p
                                  class="text-xs-plus font-medium text-slate-700 line-clamp-1 dark:text-graphite-100"
                                >
                                  Konnor G.
                                </p>
                                <p
                                  class="text-xs text-brand line-clamp-1 dark:text-signal-soft"
                                >
                                  Web Developer
                                </p>
                              </div>
                              <div
                                class="bb-badge h-5 space-x-1.5 rounded-full bg-success/10 px-1.5 text-success dark:bg-success/15"
                              >
                                <div
                                  class="size-1.5 rounded-full bg-current"
                                ></div>
                                <span>Free</span>
                              </div>
                            </div>
                          </div>
                          <p
                            class="pt-2 text-xs text-slate-400 dark:text-graphite-300"
                          >
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Consequuntur.
                          </p>
                          <div class="flex justify-end space-x-1 pt-4">
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                />
                              </svg>
                            </button>
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                />
                              </svg>
                            </button>
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
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
                        <div class="size-4" data-popper-arrow>
                          <svg
                            viewBox="0 0 16 9"
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute size-4"
                            fill="currentColor"
                          >
                            <path
                              class="text-slate-150 dark:text-graphite-600"
                              d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                            />
                            <path
                              class="text-white dark:text-graphite-700"
                              d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    x-data="usePopper({
                     offset: 12,
                     placement: 'top',
                     modifiers: [
                        {name: 'preventOverflow', options: {padding: 10}}
                     ]                     
                  })"
                    class="flex"
                    @mouseleave="isShowPopper = false"
                    @mouseenter="isShowPopper = true"
                  >
                    <div x-ref="popperRef" class="bb-avatar size-8 hover:z-10">
                      <img
                        class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                        src="{{asset('images/components/bb-avatar.svg')}}"
                        alt="bb-avatar"
                      />
                    </div>
                    <div
                      x-ref="popperRoot"
                      class="bb-popover"
                      :class="isShowPopper && 'show'"
                    >
                      <div class="popper-box">
                        <div
                          class="w-72 rounded-md border border-slate-150 bg-white p-3 dark:border-graphite-600 dark:bg-graphite-700"
                        >
                          <div class="flex space-x-3">
                            <div class="bb-avatar size-10">
                              <img
                                class="rounded-full"
                                src="{{asset('images/components/bb-avatar.svg')}}"
                                alt="bb-avatar"
                              />
                            </div>
                            <div
                              class="flex w-full items-start justify-between"
                            >
                              <div>
                                <p
                                  class="text-xs-plus font-medium text-slate-700 line-clamp-1 dark:text-graphite-100"
                                >
                                  John D.
                                </p>
                                <p
                                  class="text-xs text-brand line-clamp-1 dark:text-signal-soft"
                                >
                                  UI/UX Designer
                                </p>
                              </div>
                              <div
                                class="bb-badge h-5 space-x-1.5 rounded-full bg-error/10 px-1.5 text-error dark:bg-error/15"
                              >
                                <div
                                  class="size-1.5 rounded-full bg-current"
                                ></div>
                                <span>Busy</span>
                              </div>
                            </div>
                          </div>
                          <p
                            class="pt-2 text-xs text-slate-400 dark:text-graphite-300"
                          >
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Consequuntur.
                          </p>
                          <div class="flex justify-end space-x-1 pt-4">
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                />
                              </svg>
                            </button>
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                />
                              </svg>
                            </button>
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
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
                        <div class="size-4" data-popper-arrow>
                          <svg
                            viewBox="0 0 16 9"
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute size-4"
                            fill="currentColor"
                          >
                            <path
                              class="text-slate-150 dark:text-graphite-600"
                              d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                            />
                            <path
                              class="text-white dark:text-graphite-700"
                              d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    x-data="usePopper({
                     offset: 12,
                     placement: 'top',
                     modifiers: [
                        {name: 'preventOverflow', options: {padding: 10}}
                     ]                     
                  })"
                    class="flex"
                    @mouseleave="isShowPopper = false"
                    @mouseenter="isShowPopper = true"
                  >
                    <div x-ref="popperRef" class="bb-avatar size-8 hover:z-10">
                      <img
                        class="rounded-full ring-3 ring-white dark:ring-graphite-700"
                        src="{{asset('images/components/bb-avatar.svg')}}"
                        alt="bb-avatar"
                      />
                    </div>
                    <div
                      x-ref="popperRoot"
                      class="bb-popover"
                      :class="isShowPopper && 'show'"
                    >
                      <div class="popper-box">
                        <div
                          class="w-72 rounded-md border border-slate-150 bg-white p-3 dark:border-graphite-600 dark:bg-graphite-700"
                        >
                          <div class="flex space-x-3">
                            <div class="bb-avatar size-10">
                              <img
                                class="rounded-full"
                                src="{{asset('images/components/bb-avatar.svg')}}"
                                alt="bb-avatar"
                              />
                            </div>
                            <div
                              class="flex w-full items-start justify-between"
                            >
                              <div>
                                <p
                                  class="text-xs-plus font-medium text-slate-700 line-clamp-1 dark:text-graphite-100"
                                >
                                  Simon T.
                                </p>
                                <p
                                  class="text-xs text-brand line-clamp-1 dark:text-signal-soft"
                                >
                                  Fronend Developer
                                </p>
                              </div>
                              <div
                                class="bb-badge h-5 space-x-1.5 rounded-full bg-warning/10 px-1.5 text-warning dark:bg-warning/15"
                              >
                                <div
                                  class="size-1.5 rounded-full bg-current"
                                ></div>
                                <span>At work</span>
                              </div>
                            </div>
                          </div>
                          <p
                            class="pt-2 text-xs text-slate-400 dark:text-graphite-300"
                          >
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Consequuntur.
                          </p>
                          <div class="flex justify-end space-x-1 pt-4">
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                />
                              </svg>
                            </button>
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.5"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                />
                              </svg>
                            </button>
                            <button
                              class="bb-action size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20 dark:active:bg-graphite-300/25"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4.5"
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
                        <div class="size-4" data-popper-arrow>
                          <svg
                            viewBox="0 0 16 9"
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute size-4"
                            fill="currentColor"
                          >
                            <path
                              class="text-slate-150 dark:text-graphite-600"
                              d="M1.5 8.357s-.48.624 2.754-4.779C5.583 1.35 6.796.01 8 0c1.204-.009 2.417 1.33 3.76 3.578 3.253 5.43 2.74 4.78 2.74 4.78h-13z"
                            />
                            <path
                              class="text-white dark:text-graphite-700"
                              d="M0 9s1.796-.017 4.67-4.648C5.853 2.442 6.93 1.293 8 1.286c1.07-.008 2.147 1.14 3.343 3.066C14.233 9.006 15.999 9 15.999 9H0z"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
