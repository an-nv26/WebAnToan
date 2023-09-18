document.getElementById('tree').addEventListener('click', function(e) {
    if (e.target && e.target.nodeName === 'LI') {
        var listItem = e.target;
        listItem.classList.toggle('expanded');
        var childList = listItem.querySelector('ul');
        if (childList) {
            childList.style.display = (childList.style.display === 'none') ? 'block' : 'none';
        }
    }
});