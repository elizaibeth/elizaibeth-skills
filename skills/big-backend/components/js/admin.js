import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';
import { createPopper } from '@popperjs/core';

// The admin shell's entrypoint: dark mode, the collapsible sidebar and the account menu.
// Import it once from resources/js/app.js; it starts Alpine after every registration.
Alpine.plugin(persist);

Alpine.store('global', {
    isDarkModeEnabled: Alpine.$persist(false).as('_x_darkMode_on'),
    // Below the lg breakpoint the sidebar is closed until the menu button opens it.
    isSidebarExpanded: false,

    init() {
        Alpine.effect(() =>
            document.documentElement.classList.toggle(
                'dark',
                this.isDarkModeEnabled,
            ),
        );
    },
});

Alpine.data('usePopper', (options = {}) => ({
    popper: null,
    isShowPopper: false,
    init() {
        this.$nextTick(() => {
            this.popper = createPopper(
                this.$refs.popperRef,
                this.$refs.popperRoot,
                {
                    placement: options.placement ?? 'auto',
                    strategy: 'fixed',
                    modifiers: [
                        {
                            name: 'offset',
                            options: { offset: [0, options.offset ?? 0] },
                        },
                    ],
                },
            );
        });
        this.$watch('isShowPopper', (shown) => shown && this.popper.update());
    },
    destroy() {
        this.popper?.destroy();
    },
}));

Alpine.start();
