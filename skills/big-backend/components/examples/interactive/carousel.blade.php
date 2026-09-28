<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <!-- Default Carousel -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Default Carousel
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' } }))" class="swiper rounded-xl">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Lazy Loading Images -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Lazy Loading Images
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }, pagination: { el: '.swiper-pagination', type: 'progressbar' }, lazy: true, }))" class="swiper rounded-xl">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" loading="lazy"
                                            alt="image" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image"
                                            loading="lazy" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image"
                                            loading="lazy" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image"
                                            loading="lazy" />
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Space Between -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Space Between
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { slidesPerView: 'auto', spaceBetween: 30, pagination: { el: '.swiper-pagination', clickable: true, } }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide w-10/12!">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide w-10/12!">
                                        <img class="h-full w-full rounded-xl object-cover object-top"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide w-10/12!">
                                        <img class="h-full w-full rounded-xl object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide w-10/12!">
                                        <img class="h-full w-full rounded-xl object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Zoom -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Zoom
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }, pagination: { el: '.swiper-pagination', clickable: true, }, zoom: { maxRatio: 4 } }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Flip Effect -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Flip Effect
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'flip', flipEffect: { slideShadows: false, }, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }, pagination: { el: '.swiper-pagination', clickable: true } }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-zoom-container">
                                            <img class="h-full w-full object-cover"
                                                src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Cube Effect -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Cube Effect
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'cube', cubeEffect: { shadow: false }, pagination: { el: '.swiper-pagination', clickable: true } }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Card Effect -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Card Effect
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mx-auto mt-5 w-10/12">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'cards', grabCursor: true }))" class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="space-y-4 sm:space-y-5 lg:space-y-6">
                <!-- Pagination -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Pagination
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { pagination: { el: '.swiper-pagination', clickable: true, } }))" class="swiper rounded-xl">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Vertical Slider -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Vertical Slider
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { direction: 'vertical', pagination: { el: '.swiper-pagination', clickable: true } }))" class="swiper h-64 rounded-xl">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- With Scrollbar -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            With Scrollbar
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { scrollbar: { el: '.swiper-scrollbar', draggable: true }, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }, autoplay: { delay: 2000 } }))" class="swiper rounded-xl">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-scrollbar"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Fade Effect -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Fade Effect
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'fade', pagination: { el: '.swiper-pagination', clickable: true }, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' } }))" class="swiper rounded-xl">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Coverflow Effect -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Coverflow Effect
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'coverflow', coverflowEffect: { rotate: 35, slideShadows: false, }, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' } }))" class="swiper rounded-xl">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-top"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full object-cover object-center"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Parallax -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Parallax
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { parallax: true, navigation: { prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' } }))" class="swiper swiper-parallax h-64 rounded-xl">
                                <div class="parallax-bg" style="background-image: url('/images/components/preview.svg');"
                                    data-swiper-parallax="-23%"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide p-6">
                                        <div class="title text-3xl font-light text-white" data-swiper-parallax="-300">
                                            Slide 1
                                        </div>
                                        <div class="subtitle mt-2 text-2xl text-white" data-swiper-parallax="-200">
                                            Subtitle
                                        </div>
                                        <div class="text mt-4 text-white" data-swiper-parallax="-100">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Ab at, consectetur cupiditate debitis expedita
                                                fugit, modi nemo nobis odit perferendis quaerat quia
                                                reiciendis repudiandae rerum sed?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-6">
                                        <div class="title text-3xl font-light text-white" data-swiper-parallax="-300">
                                            Slide 2
                                        </div>
                                        <div class="subtitle mt-2 text-2xl text-white" data-swiper-parallax="-200">
                                            Subtitle
                                        </div>
                                        <div class="text mt-4 text-white" data-swiper-parallax="-100">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Ab at, consectetur cupiditate debitis expedita
                                                fugit, modi nemo nobis odit perferendis quaerat quia
                                                reiciendis repudiandae rerum sed?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide p-6">
                                        <div class="title text-3xl font-light text-white" data-swiper-parallax="-300">
                                            Slide 3
                                        </div>
                                        <div class="subtitle mt-2 text-2xl text-white" data-swiper-parallax="-200">
                                            Subtitle
                                        </div>
                                        <div class="text mt-4 text-white" data-swiper-parallax="-100">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Ab at, consectetur cupiditate debitis expedita
                                                fugit, modi nemo nobis odit perferendis quaerat quia
                                                reiciendis repudiandae rerum sed?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Creative Effect -->
                <div class="bb-surface px-4 pb-4 sm:px-5">
                    <div class="my-3 flex h-8 items-center justify-between">
                        <h2
                            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-graphite-100 lg:text-base">
                            Creative Effect
                        </h2>
                        
                    </div>
                    <div class="max-w-xl">
                        <p>
                            <a href="https://github.com/nolimits4web/swiper"
                                class="font-normal text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal">Swiper</a>
                            is the free and most modern mobile touch slider with hardware
                            accelerated transitions and amazing native behavior. Check out
                            code for detail of usage.
                        </p>
                        <div class="mt-5">
                            <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { grabCursor: true, effect: 'creative', creativeEffect: { prev: { shadow: true, translate: ['-125%', 0, -800], rotate: [0, 0, -90] }, next: { shadow: true, translate: ['125%', 0, -800], rotate: [0, 0, 90] } } }))" class="swiper rounded-xl">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="h-full w-full rounded-xl object-cover"
                                            src="{{ asset('images/components/preview.svg') }}" alt="image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
