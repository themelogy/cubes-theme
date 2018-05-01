(function() {
	var formEl = document.querySelector('section.form'),
		revealer = new RevealFx(formEl),
		closeCtrl = formEl.querySelector('.form__close');

	document.querySelector('.btn--form-open').addEventListener('click', function() {
		revealer.reveal({
			bgcolor: '#0F0F0F',
			direction: 'bt',
			duration: 500,
			onCover: function(contentEl, revealerEl) {
				formEl.classList.add('form--open');
				contentEl.style.opacity = 1;
			},
			onComplete: function() {
				closeCtrl.addEventListener('click', closeForm);
			}
		});
	});

	document.querySelector('.btn--form-open1').addEventListener('click', function() {
		revealer.reveal({
			bgcolor: '#0F0F0F',
			direction: 'bt',
			duration: 500,
			onCover: function(contentEl, revealerEl) {
				formEl.classList.add('form--open');
				contentEl.style.opacity = 1;
			},
			onComplete: function() {
				closeCtrl.addEventListener('click', closeForm);
			}
		});
	});
	document.querySelector('.btn--form-open2').addEventListener('click', function() {
		revealer.reveal({
			bgcolor: '#0F0F0F',
			direction: 'bt',
			duration: 500,
			onCover: function(contentEl, revealerEl) {
				formEl.classList.add('form--open');
				contentEl.style.opacity = 1;
			},
			onComplete: function() {
				closeCtrl.addEventListener('click', closeForm);
			}
		});
	});
	document.querySelector('.btn--form-open3').addEventListener('click', function() {
		revealer.reveal({
			bgcolor: '#0F0F0F',
			direction: 'bt',
			duration: 500,
			onCover: function(contentEl, revealerEl) {
				formEl.classList.add('form--open');
				contentEl.style.opacity = 1;
			},
			onComplete: function() {
				closeCtrl.addEventListener('click', closeForm);
			}
		});
	});
	function closeForm() {
		closeCtrl.removeEventListener('click', closeForm);
		formEl.classList.remove('form--open');
		revealer.reveal({
			bgcolor: '#0F0F0F',
			direction: 'tb',
			duration: 500,
			onCover: function(contentEl, revealerEl) {
				formEl.classList.remove('form--open');
				contentEl.style.opacity = 0;
			}
		});
		
	}

})();
