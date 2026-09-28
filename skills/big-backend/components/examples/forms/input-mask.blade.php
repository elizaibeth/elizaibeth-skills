<div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
          <!-- Input Mask -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Input Mask
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                An input bb-shape is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5">
                <span>With Prefix:</span>
                <label>
                  <input
                    x-input-mask="{
                        prefix: 'Prefix',
                        delimiter: '-',
                        blocks: [6, 4, 4, 7],
                    }"
                    class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Username"
                    type="text"
                  />
                </label>
              </div>
            </div>
            
          </div>

          <!-- Delimiters Formatting-->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Delimiters Formatting
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                An input bb-shape is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5">
                <span>With Delimiters Formatting:</span>
                <label>
                  <input
                    x-input-mask="{
                        delimiters: ['.', '_', '-'],
                        blocks: [3, 2, 3, 3],
                        uppercase: true
                    }"
                    class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="xxx.xx_xxx-xxx"
                    type="text"
                  />
                </label>
              </div>
            </div>
            
          </div>

          <!-- Credit Card Formatting-->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Credit Card
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                An input bb-shape is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5">
                <span>Enter Credit Card:</span>
                <label>
                  <input
                    x-input-mask="{
                        creditCard: true
                    }"
                    class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="xxxx xxxx xxxx xxxx"
                    type="text"
                  />
                </label>
              </div>
            </div>
            
          </div>

          <!-- DateTime Formatting -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                DateTime Formatting
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                An input bb-shape is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5 space-y-4">
                <div>
                  <span>Date:</span>
                  <label>
                    <input
                      x-input-mask="{
                        date: true,
                        delimiter: '-',
                        datePattern: ['m', 'd','Y']
                    }"
                      class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                      placeholder="Enter Date"
                      type="text"
                    />
                  </label>
                </div>
                <div>
                  <span>Time:</span>
                  <label>
                    <input
                      x-input-mask="{
                        time: true,
                        timePattern: ['h', 'm', 's']
                    }"
                      class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                      placeholder="Enter Time"
                      type="text"
                    />
                  </label>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Phone Formatting-->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Phone Formatting
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                An input bb-shape is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div class="mt-5">
                <span>Phone Number:</span>
                <label class="mt-1.5 flex -space-x-px">
                  <span
                    class="flex shrink-0 items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-graphite-450"
                  >
                    <span >US (+1)</span>
                </span>
                  <input
                    x-input-mask="{
                        numeric:true,
                        blocks: [3, 2, 2, 2],
                    }"
                    class="bb-field w-full rounded-r-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Enter Phone"
                    type="text"
                  />
                </label>
              </div>
            </div>
            
          </div>

          <!-- Numeral Formatting -->
          <div class="bb-surface px-4 pb-4 sm:px-5">
            <div class="my-3 flex h-8 items-center justify-between">
              <h2
                class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base"
              >
                Numeral Formatting
              </h2>
              
            </div>
            <div class="max-w-xl">
              <p>
                An input bb-shape is a string of characters that indicates the
                format of valid input values. The
                <code class="inline-code">Cleave.js</code> library is used for
                this purpose. See more on
                <a
                  class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal"
                  href="https://github.com/nosir/cleave.js"
                  >Github</a
                >
                and to the code example below.
              </p>
              <div
                x-data="{
                    config:{
                        numeral: true,
                        numeralThousandsGroupStyle: 'thousand'
                    }
                }"
                class="mt-5"
              >
                <div class="flex -space-x-px">
                  <select
                    class="bb-select rounded-l-full border border-slate-300 bg-white px-3 py-2 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:bg-graphite-700 dark:hover:border-graphite-400 dark:focus:border-signal"
                    x-model="config.numeralThousandsGroupStyle"
                  >
                    <option value="thousand">Thousands</option>
                    <option value="lakh">Indian lakh</option>
                    <option value="wan">Chinese wan</option>
                  </select>

                  <input
                    x-input-mask="config"
                    class="bb-field w-full rounded-r-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal"
                    placeholder="Enter Phone"
                    type="text"
                  />
                </div>
              </div>
            </div>
            
          </div>
        </div>
