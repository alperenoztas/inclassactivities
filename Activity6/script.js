/*
@Author: Alperen Öztaş
*/

var button = document.getElementById("button");
var level = 1;
var clicks = 0;
var timeout = 500;
var intervalID = setInterval(changePosition, timeout);

// change position of button randomly
function changePosition() {

    /* 
    I used window object we can get the width and height of the window.
    So it can be randomly appear in the screen for any size of the screen.
    Also I substracted the button's width and height from the random number
    so it can be appear in the screen.
    */

    var marginTop = Math.random() * (window.innerHeight - button.offsetHeight)  + "px";
    var marginLeft = Math.random() * (window.innerWidth - button.offsetWidth) + "px";
    button.style.marginTop = marginTop;
    button.style.marginLeft = marginLeft;
}


function handleButtonClick(event) {

    // if click has catched from event increase clicks
    if (event.type === "click") {
        clicks++;
        //Level click and timeout log for debugging so anyone can see it
        console.log("Level: " + level + "\nClicks: " + clicks + "\nTimeout: " + timeout);
    }

    // if user clicked button three times in a row, increase level, reset clicks, decrease timeout
    if (clicks == 3) {
        alert("Congratulations!\nYou passed level " + level + "!");
        level++;
        clicks = 0;
        timeout -= 100;
        if (timeout < 0) {
            timeout = 0;
        }
        // clear interval so new interval can be set
        clearInterval(intervalID); // stop the current interval
        intervalID = setInterval(changePosition, timeout); // set up a new interval
    }

    changePosition();
}

button.addEventListener("click", handleButtonClick);