var textarea = document.getElementsByTagName("textarea");

for (var i = 0; i < textarea.length; i++) {
    console.log(textarea[i])
}

textarea[0].innerHTML = "";

let _reset = document.getElementById('reset');
let start_Stop = document.getElementById('startStop');

let seconds = 0;
let minutes = 0;
let hours = 0;

let displaySeconds = 0;
let displayMinutes = 0;
let displayHours = 0;

let interval = null;

let status = "stopped";

function stopWatch() {
    seconds++;

    if (seconds / 60 === 1) {
        seconds = 0;
        minutes++;

        if (minutes / 60 === 1) {
            minutes = 0;
            hours++;
        }
    }

    if (seconds < 10) {
        displaySeconds = "0" + seconds.toString();
    } else {
        displaySeconds = seconds;
    }

    if (minutes < 10) {
        displayMinutes = "0" + minutes.toString();
    } else {
        displayMinutes = minutes;
    }

    if (hours < 10) {
        displayHours = "0" + hours.toString();
    } else {
        displayHours = hours;
    }

    document.getElementById("display").innerHTML = displayHours + ":" + displayMinutes + ":" + displaySeconds;
}

function startStop() {
    if (status === "stopped") {

        interval = window.setInterval(stopWatch, 1000);
        document.getElementById("startStop").innerHTML = "Stop";
        status = "started";
    } else {
        window.clearInterval(interval);
        document.getElementById("startStop").innerHTML = "Start";
        status = "stopped";
    }
}

function reset() {

    window.clearInterval(interval);
    seconds = 0;
    minutes = 0;
    hours = 0;
    document.getElementById("display").innerHTML = "00:00:00";
    document.getElementById("startStop").innerHTML = "Start";
}

_reset.onclick = function() {
    console.log('ok');
    reset();
}
start_Stop.onclick = function() {

    startStop();

}

// =================================================================

//  Modal 1 es para el registro de usuariosa 
let close1 = document.getElementById('close1');
let btnRegistro = document.getElementById('btnRegistro');
btnRegistro.onclick = function() {
    console.log('ok');
    document.getElementById('modal1').style.display = 'block';
}
close1.onclick = function() {
    console.log('ok');
    document.getElementById('modal1').style.display = 'none';
}

// =================================================================

// MOdal 2 es para iniciar secion
let close2 = document.getElementById('close1');
let inicioseccion = document.getElementById('inicioseccion');
inicioseccion.onclick = function() {
    console.log('ok');
    document.getElementById('modal2').style.display = 'block';
}
close2.onclick = function() {
    console.log('ok');
    document.getElementById('modal2').style.display = 'none';
}
// =================================================================