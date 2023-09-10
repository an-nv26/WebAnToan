var currentImage = 1;
var interval;

function jump() {
    if (currentImage === 4) {
        currentImage = 1;
    } else {
        currentImage++;
    }

    for (var i = 1; i <= 4; i++) {
        document.getElementById('image' + i).style.display = 'none';
    }

    document.getElementById('image' + currentImage).style.display = 'block';
}

function stop() {
    clearInterval(interval);
}

interval = setInterval(jump, 1000);