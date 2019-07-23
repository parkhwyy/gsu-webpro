var answer = Math.floor(Math.random() * 100 + 1); 
    
var count = 1; 

function check() { 
    
    var input = document.getElementById("guessinput").value
    var guesscount = document.getElementById('count')
    var wrong = document.getElementById('wrong')
    var correct = document.getElementById('correct')

    guesscount.textContent = count

    if (input == answer) {  
        correct.textContent = "Correct!"
        wrong.textContent = ""
        setTimeout(function() {
            location.reload();
        }, 3000);
    }
    else if (input > answer) {  
        count++
        wrong.textContent = "Wrong! Go Lower."
        correct.textContent = ""
    } 
    else if (input < answer) {
        count++
        wrong.textContent = "Wrong! Go Higher."
        correct.textContent = ""
    }

    if (count > 5) {
        wrong.textContent = `No more guesses left! The correct number was ${answer}.`
        correct.textContent = ""
        setTimeout(function() {
            location.reload();
        }, 3000);
    }

}



var mins = 1; 
var secs = mins * 60; 

function countdown() { 
    setTimeout('Decrement()', 60); 
} 

function Decrement() { 
    if (document.getElementById) { 
        minutes = document.getElementById("minutes"); 
        seconds = document.getElementById("seconds"); 

        if (seconds < 59) { 
            seconds.value = secs; 
        } 
        else { 
            minutes.value = getminutes(); 
            seconds.value = getseconds(); 
        } 
        
        if (mins < 0) { 
            wrong.textContent = `No more time left! The correct number was ${answer}.`
            correct.textContent = ""
            setTimeout(function() {
                location.reload();
            }, 3000);
            minutes.value = 0; 
            seconds.value = 0; 
        } 
        else { 
            secs--; 
            setTimeout('Decrement()', 1000); 
        } 
    } 
} 

function getminutes() { 
    mins = Math.floor(secs / 60); 
    return mins; 
} 

function getseconds() { 
    return secs - Math.round(mins * 60); 
}