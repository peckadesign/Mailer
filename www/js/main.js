var input = document.querySelectorAll('input, textarea');

input.forEach((el) => {
	el.addEventListener('blur', (e) => {
		e.target.closest('p')?.classList.add('was-validated');
	})
})
