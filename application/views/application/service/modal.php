function modalOpen(modal) {
    modal.show();
    modal.removeClass('fade');
    modal.addClass('show');
}

function modalClose(modal) {
    modal.hide();
    modal.removeClass('show');
    modal.addClass('fade');
}

$(document).on('click', 'button.close-modal', function() {
    modalClose($('#' + $(this).attr('data-dismiss')));
});