<div class="grid place-items-center">
          <div
            class="bb-surface mt-20 w-full max-w-xl p-4 sm:p-5"
            x-data="componentExamples.initCreditCard"
          >
            <div
              class="relative mx-auto -mt-20 h-40 w-72 rounded-xl text-white shadow-xl transition-transform hover:scale-110 lg:h-48 lg:w-80"
            >
              <div class="h-full w-full rounded-xl" :class="creditCardUI"></div>
              <div
                class="absolute top-0 flex h-full w-full flex-col justify-between p-4 sm:p-5"
              >
                <div class="flex justify-between">
                  <div>
                    <p class="text-xs-plus font-light">Name</p>
                    <p
                      class="font-medium uppercase tracking-wide"
                      x-text="nameOnCard"
                    ></p>
                  </div>
                  <template x-if="cardLogoSrc">
                    <img
                      src="null"
                      :src="cardLogoSrc"
                      class="w-12 rounded-xl"
                      alt="creditcard"
                    />
                  </template>
                </div>
                <div class="pt-4">
                  <p class="text-xs-plus font-light">Card Number</p>
                  <p class="font-medium tracking-wide" x-text="cardNumber"></p>
                </div>
              </div>
            </div>
            <div class="flex items-center justify-between py-4">
              <p
                class="text-xl font-semibold text-brand dark:text-signal-soft"
                x-text="cardText"
              ></p>
              <div
                class="bb-badge rounded-full border border-brand text-brand dark:border-signal-soft dark:text-signal-soft"
              >
                Primary
              </div>
            </div>
            <div class="space-y-4">
              <label class="block">
                <span>Card number</span>
                <input
                  class="bb-field mt-1.5 w-full rounded-xl bg-slate-150 px-3 py-2 ring-brand/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring-3 dark:bg-graphite-900/90 dark:ring-signal/50 dark:placeholder:text-graphite-300 dark:hover:bg-graphite-900 dark:focus:bg-graphite-900"
                  placeholder="**** **** **** ****"
                  type="text"
                  x-model.debounce="cardNumber"
                  x-input-mask="creditCardInput"
                />
              </label>
              <label class="block">
                <span>Name on bb-surface</span>
                <input
                  class="bb-field mt-1.5 w-full rounded-xl bg-slate-150 px-3 py-2 ring-brand/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring-3 dark:bg-graphite-900/90 dark:ring-signal/50 dark:placeholder:text-graphite-300 dark:hover:bg-graphite-900 dark:focus:bg-graphite-900"
                  placeholder="John Doe"
                  type="text"
                  x-model.debounce="nameOnCard"
                />
              </label>
              <div class="grid grid-cols-2 gap-4">
                <label class="block">
                  <span>Expiration date</span>
                  <input
                    class="bb-field mt-1.5 w-full rounded-xl bg-slate-150 px-3 py-2 ring-brand/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring-3 dark:bg-graphite-900/90 dark:ring-signal/50 dark:placeholder:text-graphite-300 dark:hover:bg-graphite-900 dark:focus:bg-graphite-900"
                    placeholder="mm/yy"
                    type="text"
                    x-input-mask="{ date: true, datePattern: ['m', 'y'] }"
                  />
                </label>
                <label class="block">
                  <span>CVV</span>
                  <input
                    class="bb-field mt-1.5 w-full rounded-xl bg-slate-150 px-3 py-2 ring-brand/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring-3 dark:bg-graphite-900/90 dark:ring-signal/50 dark:placeholder:text-graphite-300 dark:hover:bg-graphite-900 dark:focus:bg-graphite-900"
                    placeholder="***"
                    type="password"
                    x-input-mask="{ numeral: true }"
                    maxlength="3"
                  />
                </label>
              </div>
              <div class="flex justify-center space-x-2 pt-4">
                <button
                  class="bb-action min-w-[7rem] border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-graphite-450 dark:text-graphite-50 dark:hover:bg-graphite-500 dark:focus:bg-graphite-500 dark:active:bg-graphite-500/90"
                >
                  Cancel
                </button>
                <button
                  class="bb-action min-w-[7rem] bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong dark:active:bg-signal/90"
                >
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>
