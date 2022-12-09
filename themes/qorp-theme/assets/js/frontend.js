import { StickyHeader } from './components/sticky-header';

/* Run everything when the DOM is available */
document.addEventListener('DOMContentLoaded', () => {
	new StickyHeader(document.getElementById('js-sticky-header')); // eslint-disable-line
});