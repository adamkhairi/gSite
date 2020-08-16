
// Buttons
let edit_btn = document.getElementById('p-edit-btn'),
	detail_btn = document.getElementById('p-detail-btn'),
	notify_btn = document.getElementById('p-notify-btn'),
	msg_btn = document.getElementById('p-msg-btn');


// Sections
let detailSec = document.getElementById('detailSec'),
	editSec = document.getElementById('editSec'),
	notifySec = document.getElementById('notifSec'),
	msgSec = document.getElementById('msgSec');
	

//
detail_btn.addEventListener('click', event => {
	detailSec.classList.remove('hidden');
	notifySec.classList.add('hidden');
	editSec.classList.add('hidden');
	msgSec.classList.add('hidden');
});

//
edit_btn.addEventListener('click', event => {
	detailSec.classList.add('hidden');
	editSec.classList.remove('hidden');
	notifySec.classList.add('hidden');
	msgSec.classList.add('hidden');
});

//
notify_btn.addEventListener('click', event => {
	detailSec.classList.add('hidden');
	editSec.classList.add('hidden');
	notifySec.classList.remove('hidden');
	msgSec.classList.add('hidden');
});

//
msg_btn.addEventListener('click', event => {
	detailSec.classList.add('hidden');
	editSec.classList.add('hidden');
	notifySec.classList.add('hidden');
	msgSec.classList.remove('hidden');
});