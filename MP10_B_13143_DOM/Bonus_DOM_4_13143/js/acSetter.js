let suhu = 24;
let statusAC = false;

function updateDisplay() {

    document.getElementById("display").innerHTML =
        "Status : " +
        (statusAC ? "ON" : "OFF") +
        "<br>" +
        "Suhu : " +
        suhu + "°C";
}

function nyalakan() {
    statusAC = true;
    updateDisplay();
}

function matikan() {
    statusAC = false;
    updateDisplay();
}

function naikTemp() {

    if (statusAC) {

        if (suhu < 30) {
            suhu++;
            updateDisplay();
        }

    } else {
        alert("AC masih OFF");
    }
}

function turunTemp() {

    if (statusAC) {

        if (suhu > 16) {
            suhu--;
            updateDisplay();
        }

    } else {
        alert("AC masih OFF");
    }
}