<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Basic Dropdown -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Basic Dropdown
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Dropdowns are lightweight context menus for housing navigation
                and actions. Check out code for detail of usage.
              </p>
              <div class="bb-inline mt-5 flex flex-wrap items-end">
                <div
                  x-data="usePopper({placement:'bottom-start',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    class="bb-action space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    <span>Dropdown</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4 transition-transform duration-200"
                      :class="isShowPopper && 'rotate-180'"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-graphite-500 dark:bg-graphite-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                      </ul>
                      <div
                        class="my-1 h-px bg-slate-150 dark:bg-graphite-500"
                      ></div>
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Separated Link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  x-data="usePopper({placement:'bottom-start',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    class="bb-action space-x-2 rounded-full bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    <span>Dropdown</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4 transition-transform duration-200"
                      :class="isShowPopper && 'rotate-180'"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-graphite-500 dark:bg-graphite-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                      </ul>
                      <div
                        class="my-1 h-px bg-slate-150 dark:bg-graphite-500"
                      ></div>
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Separated Link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  x-data="usePopper({placement:'bottom-end',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
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
                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                      />
                    </svg>
                  </button>

                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-graphite-500 dark:bg-graphite-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                      </ul>
                      <div
                        class="my-1 h-px bg-slate-150 dark:bg-graphite-500"
                      ></div>
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Separated Link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div
                  x-data="usePopper({placement:'bottom-end',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
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

                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-graphite-500 dark:bg-graphite-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                      </ul>
                      <div
                        class="my-1 h-px bg-slate-150 dark:bg-graphite-500"
                      ></div>
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Separated Link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Primary Actions -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Primary Actions
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Dropdowns are lightweight context menus for housing navigation
                and actions. Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  x-data="usePopper({placement:'bottom-start',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    class="bb-action space-x-2 bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    <span>Dropdown</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4 transition-transform duration-200"
                      :class="isShowPopper && 'rotate-180'"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-graphite-500 dark:bg-graphite-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-brand hover:text-white focus:bg-brand focus:text-white dark:hover:bg-signal dark:focus:bg-signal"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-brand hover:text-white focus:bg-brand focus:text-white dark:hover:bg-signal dark:focus:bg-signal"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-brand hover:text-white focus:bg-brand focus:text-white dark:hover:bg-signal dark:focus:bg-signal"
                            >Something Else</a
                          >
                        </li>
                      </ul>
                      <div
                        class="my-1 h-px bg-slate-150 dark:bg-graphite-500"
                      ></div>
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-brand hover:text-white focus:bg-brand focus:text-white dark:hover:bg-signal dark:focus:bg-signal"
                            >Separated Link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Dropdown Icons -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Dropdown Icons
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Dropdowns are lightweight context menus for housing navigation
                and actions. Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  x-data="usePopper({placement:'bottom-start',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    class="bb-action space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    <span>Dropdown</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4 transition-transform duration-200"
                      :class="isShowPopper && 'rotate-180'"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-graphite-500 dark:bg-graphite-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="mt-px size-4.5"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="1.5"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                              />
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                              />
                            </svg>
                            <span> View</span></a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
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
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                              />
                            </svg>
                            <span> Edit</span></a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
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
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                              />
                            </svg>
                            <span> Update</span></a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center space-x-3 px-3 pr-8 font-medium tracking-wide text-error outline-hidden transition-all hover:bg-error/20 focus:bg-error/20"
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
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                              />
                            </svg>
                            <span> Delete item</span></a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Scrolled Dropdown -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Scrolled Dropdown
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Dropdowns are lightweight context menus for housing navigation
                and actions. Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  x-data="usePopper({placement:'bottom-start',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    class="bb-action space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    <span>Dropdown</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4 transition-transform duration-200"
                      :class="isShowPopper && 'rotate-180'"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box h-36 overflow-y-auto rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-graphite-600 dark:bg-graphite-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-graphite-600 dark:hover:text-graphite-100 dark:focus:bg-graphite-600 dark:focus:text-graphite-100"
                            >Something else</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- HTML Content Dropdown -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                HTML Content
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                Dropdowns are lightweight context menus for housing navigation
                and actions. Check out code for detail of usage.
              </p>
              <div class="mt-5">
                <div
                  x-data="usePopper({placement:'bottom-start',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    class="bb-action space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                  >
                    <span>Dropdown</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4 transition-transform duration-200"
                      :class="isShowPopper && 'rotate-180'"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="bb-popover"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box w-72 rounded-md border border-slate-150 bg-white dark:border-graphite-600 dark:bg-graphite-700"
                    >
                      <h3
                        class="px-4 py-3 font-medium tracking-wide text-slate-700 dark:text-graphite-100"
                      >
                        Only Selected People
                      </h3>
                      <label class="relative flex">
                        <input
                          type="text"
                          class="bb-field peer w-full border-y border-slate-150 bg-transparent px-4 py-2 pl-9 text-xs-plus placeholder:text-slate-400/70 dark:border-graphite-600"
                          placeholder="Type username..."
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
                      <ul class="my-2">
                        <li>
                          <a
                            href="#"
                            class="flex items-center space-x-3.5 px-4 py-2 pr-8 tracking-wide outline-hidden transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-graphite-600 dark:focus:bg-graphite-600"
                          >
                            <div class="bb-avatar size-10">
                              <img
                                class="rounded-full"
                                src="{{asset('images/components/bb-avatar.svg')}}"
                                alt="bb-avatar"
                              />
                            </div>
                            <div>
                              <p
                                class="text-slate-700 line-clamp-1 dark:text-graphite-100"
                              >
                                Simon Tods
                              </p>
                              <p
                                class="text-xs text-slate-500 dark:text-graphite-300"
                              >
                                Web Developer
                              </p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex items-center space-x-3.5 px-4 py-2 pr-8 tracking-wide outline-hidden transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-graphite-600 dark:focus:bg-graphite-600"
                          >
                            <div class="bb-avatar size-10">
                              <div
                                class="is-initial rounded-full border border-success/30 bg-success/10 uppercase text-success"
                              >
                                jd
                              </div>
                            </div>

                            <div>
                              <p
                                class="text-slate-700 line-clamp-1 dark:text-graphite-100"
                              >
                                John Doe
                              </p>
                              <p
                                class="text-xs text-slate-500 dark:text-graphite-300"
                              >
                                Web Developer
                              </p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex items-center space-x-3.5 px-4 py-2 pr-8 tracking-wide outline-hidden transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-graphite-600 dark:focus:bg-graphite-600"
                          >
                            <div class="bb-avatar size-10">
                              <div
                                class="is-initial rounded-full bg-warning uppercase text-white"
                              >
                                KG
                              </div>
                            </div>
                            <div>
                              <p
                                class="text-slate-700 line-clamp-1 dark:text-graphite-100"
                              >
                                Konnor Guzman
                              </p>
                              <p
                                class="text-xs text-slate-500 dark:text-graphite-300"
                              >
                                Frontend Developer
                              </p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex items-center space-x-3.5 px-4 py-2 pr-8 tracking-wide outline-hidden transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-graphite-600 dark:focus:bg-graphite-600"
                          >
                            <div class="bb-avatar size-10">
                              <img
                                class="rounded-full"
                                src="{{asset('images/components/bb-avatar.svg')}}"
                                alt="bb-avatar"
                              />
                            </div>
                            <div>
                              <p
                                class="text-slate-700 line-clamp-1 dark:text-graphite-100"
                              >
                                Samantha Shelton
                              </p>
                              <p
                                class="text-xs text-slate-500 dark:text-graphite-300"
                              >
                                Web Developer
                              </p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex items-center space-x-3.5 px-4 py-2 pr-8 tracking-wide outline-hidden transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-graphite-600 dark:focus:bg-graphite-600"
                          >
                            <div class="bb-avatar size-10">
                              <img
                                class="rounded-full"
                                src="{{asset('images/components/bb-avatar.svg')}}"
                                alt="bb-avatar"
                              />
                            </div>
                            <div>
                              <p
                                class="text-slate-700 line-clamp-1 dark:text-graphite-100"
                              >
                                Derrick Simmons
                              </p>
                              <p
                                class="text-xs text-slate-500 dark:text-graphite-300"
                              >
                                UI/UX Designer
                              </p>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
