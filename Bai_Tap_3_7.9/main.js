function toggleNode(toggle) {
    var parent = toggle.parentElement;
    var nested = parent.querySelector('.nested');

    if (nested) {
        if (nested.classList.contains('active')) {
            nested.classList.remove('active');
            toggle.classList.remove('opened');
            toggle.classList.add('closed');
        } else {
            nested.classList.add('active');
            toggle.classList.remove('closed');
            toggle.classList.add('opened');
        }
    }
}