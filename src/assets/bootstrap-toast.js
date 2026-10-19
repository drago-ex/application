import { Toast } from 'bootstrap';

export default class ToastHandler {
	initialize(naja) {
		// Each toast is shown once; toasts still visible from an earlier request are left alone.
		const showNewToasts = () => {
			document.querySelectorAll('.toast-container .toast:not([data-toast-shown])').forEach((toastElement) => {
				toastElement.dataset.toastShown = '1';
				toastElement.addEventListener('hidden.bs.toast', () => toastElement.remove(), { once: true });
				Toast.getOrCreateInstance(toastElement).show();
			});
		};

		naja.addEventListener('success', showNewToasts);
		showNewToasts();
	}
}
