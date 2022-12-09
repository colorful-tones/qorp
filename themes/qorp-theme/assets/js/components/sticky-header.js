import stickybits from 'stickybits';

/**
 * Class for Sticky header
 */
class StickyHeader {
	/**
	 * Establish our blueprint.
	 *
	 * @param {Element} headerEl Element to target.
	 */
	constructor(headerEl) {
		this.headerEl = headerEl;

		// Bail early.

		if (!this.headerEl || typeof this.headerEl !== 'object') {
			return;
		}

		this.body = document.body;
		this.scrollUp = 'scroll-up';
		this.scrollDown = 'scroll-down';
		this.lastScroll = 0;
		this.headerOffset = 32;

		window.addEventListener('scroll', () => {
			const currentScroll = window.pageYOffset;
			if (currentScroll <= this.headerOffset) {
				this.body.classList.remove(this.scrollUp);
				return;
			}

			if (currentScroll > this.lastScroll && !this.body.classList.contains(this.scrollDown)) {
				// down
				this.body.classList.remove(this.scrollUp);
				this.body.classList.add(this.scrollDown);
			} else if (
				currentScroll < this.lastScroll &&
				this.body.classList.contains(this.scrollDown)
			) {
				// up
				this.body.classList.remove(this.scrollDown);
				this.body.classList.add(this.scrollUp);
			}
			this.lastScroll = currentScroll;
		});

		stickybits(this.headerEl, {
			useStickyClasses: true,
			useFixed: true,
			noStyles: true,
		});
	}
}

export { StickyHeader };
