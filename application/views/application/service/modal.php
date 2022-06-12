function modalOpen(modal) {
modal.show();
modal.removeClass('fade');
modal.addClass('show');
$('.modal-backdrop').show();
$('body').addClass('modal-open');
}

function modalClose(modal) {
modal.hide();
modal.removeClass('show');
modal.addClass('fade');
$('.modal-backdrop').hide();
$('body').removeClass('modal-open');
}

$(document).on('click', 'button.close-modal', function() {
modalClose($('#' + $(this).attr('data-dismiss')));
});