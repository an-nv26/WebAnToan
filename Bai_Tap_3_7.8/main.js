function showTab(tabNumber){
    var tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(function(content){
        content.style.display = 'none';
    });

    var tabs = document.querySelectorAll('.tab');
    tabs.forEach(function(tab){
        tab.classList.remove('.active');
    });

    document.getElementById('tab' + tabNumber).style.display = 'block';

    document.querySelector('.tab:nth-child(' + tabNumber + ')').classList.add('active');


}