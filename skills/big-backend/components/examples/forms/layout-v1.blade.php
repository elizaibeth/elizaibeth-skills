<div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
          <div class="col-span-12 sm:col-span-8">
            <div class="bb-surface p-4 sm:p-5">
              <p
                class="text-base font-medium text-slate-700 dark:text-graphite-100"
              >
                Shipping Address
              </p>
              <div class="mt-4 space-y-4">
                <label class="block">
                  <span>Company name</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                      placeholder="Your Company"
                      type="text"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                    >
                      <i class="fa-regular fa-building text-base"></i>
                    </span>
                  </span>
                </label>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label class="block">
                    <span>Client name</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                        placeholder="Your Name"
                        type="text"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                      >
                        <i class="far fa-user text-base"></i>
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Phone number</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                        placeholder="(999) 999-9999"
                        type="text"
                        x-input-mask="{numericOnly: true, blocks: [0, 3, 3, 4], delimiters: ['(', ') ', '-']}"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                      >
                        <i class="fa fa-phone"></i>
                      </span>
                    </span>
                  </label>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                  <label class="block sm:col-span-8">
                    <span>Email Address</span>
                    <div class="relative mt-1.5 flex">
                      <input
                        class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                        placeholder="Email address"
                        type="text"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                      >
                        <i class="fa-regular fa-envelope text-base"></i>
                      </span>
                    </div>
                  </label>
                  <label class="block sm:col-span-4">
                    <span>Pincode</span>
                    <div class="relative mt-1.5 flex">
                      <input
                        class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                        placeholder="Pincode"
                        type="text"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                      >
                        <i class="fa-solid fa-map-pin text-base"></i>
                      </span>
                    </div>
                  </label>
                </div>
                <label class="block">
                  <span>Address</span>
                  <textarea
                    rows="4"
                    placeholder="Your Address (Area and Street)"
                    class="bb-textarea mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                  ></textarea>
                </label>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label class="block">
                    <span>City</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                        placeholder="Your City/Town"
                        type="text"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                      >
                        <i class="fa-solid fa-city text-base"></i>
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>State</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="bb-field peer w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                        placeholder="Your State"
                        type="text"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-brand dark:text-graphite-300 dark:peer-focus:text-signal"
                      >
                        <i class="fa-solid fa-flag"></i>
                      </span>
                    </span>
                  </label>
                </div>
                <div x-data="{sameBillingAddress:true}">
                  <div
                    class="flex-wrap items-start space-y-2 pt-2 sm:flex sm:space-y-0 sm:space-x-5"
                  >
                    <label class="inline-flex items-center space-x-2">
                      <input
                        x-model="sameBillingAddress"
                        class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal"
                        type="checkbox"
                      />
                      <span>Same is Billing Address</span>
                    </label>
                    <div>
                      <button
                        @click="sameBillingAddress = false"
                        class="border-b border-dotted border-current pb-0.5 font-medium text-brand outline-hidden transition-colors duration-300 hover:text-brand/70 focus:text-brand/70 dark:text-signal-soft dark:hover:text-signal-soft/70 dark:focus:text-signal-soft/70"
                      >
                        Add Billing Address
                      </button>
                    </div>
                  </div>
                  <div x-show="!sameBillingAddress" x-collapse>
                    <label class="block pt-4">
                      <span>Billing Address</span>
                      <textarea
                        rows="4"
                        placeholder="Enter billing address"
                        class="bb-textarea mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                      ></textarea>
                    </label>
                  </div>
                </div>
                <div class="flex justify-end space-x-2">
                  <button
                    class="bb-action space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-graphite-500 dark:text-graphite-50 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450 dark:active:bg-graphite-450/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <span>Prev</span>
                  </button>
                  <button
                    class="bb-action space-x-2 bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                  >
                    <span>Next</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="hidden sm:col-span-4 sm:block">
            <div class="sticky top-24 mt-3">
              <ol class="bb-stepper is-vertical line-space">
                <li class="step pb-8 before:bg-brand dark:before:bg-signal">
                  <div
                    class="step-header rounded-full bg-brand text-white dark:bg-signal"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                  <h3 class="ml-4 text-slate-700 dark:text-graphite-100">
                    Create Account
                  </h3>
                </li>
                <li class="step pb-8 before:bg-brand dark:before:bg-signal">
                  <div
                    class="step-header rounded-full bg-brand text-white dark:bg-signal"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                  <h3 class="ml-4 text-slate-700 dark:text-graphite-100">
                    Select Service
                  </h3>
                </li>
                <li
                  class="step pb-8 before:bg-slate-200 dark:before:bg-graphite-500"
                >
                  <div
                    class="step-header rounded-full bg-brand text-white dark:bg-signal"
                  >
                    3
                  </div>
                  <h3 class="ml-4 text-slate-700 dark:text-graphite-100">
                    Address
                  </h3>
                </li>
                <li
                  class="step pb-8 before:bg-slate-200 dark:before:bg-graphite-500"
                >
                  <div
                    class="step-header rounded-full bg-slate-200 text-slate-800 dark:bg-graphite-500 dark:text-white"
                  >
                    4
                  </div>
                  <h3 class="ml-4 text-slate-700 dark:text-graphite-100">Submit</h3>
                </li>
              </ol>
            </div>
          </div>
        </div>
