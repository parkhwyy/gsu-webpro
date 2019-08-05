var seconds = document.getElementById("countdown").textContent;

var countdown = setInterval(function() {
    seconds--;
    document.getElementById("countdown").textContent = seconds;
    if (seconds <= 0) {
        document.getElementById("countdown").innerHTML = "GAME OVER"
        setTimeout(function() {
            location.reload();
        }, 3000);
     }
},1000);