/**
 * Class for simple scroll listener.
 */
class ScrollListener {
	/**
	 * Establish our blueprint.
	 */
	constructor() {
		this.body = document.body;
		this.scrollUp = 'scroll-up';
		this.scrollDown = 'scroll-down';
		this.lastScroll = 0;
		this.headerOffset = 80;
		this.ticking = false;

		this.toggleBodyClass = this.toggleBodyClass.bind(this);

		window.addEventListener('scroll', () => {
			const currentScroll = window.pageYOffset;

			if (!this.ticking) {
				window.requestAnimationFrame(() => {
					this.toggleBodyClass(currentScroll);
					this.ticking = false;
				});
			}

			this.ticking = true;
		});
	}

	toggleBodyClass(currentScroll) {
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
		} else if (currentScroll === 0) {
			// we're at top (reset)
			this.body.classList.remove(this.scrollUp);
		}

		this.lastScroll = currentScroll;
	}
}

export { ScrollListener };
