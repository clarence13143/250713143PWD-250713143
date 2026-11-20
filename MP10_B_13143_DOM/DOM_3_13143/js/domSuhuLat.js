function konversi() {

    let celsius =
        parseFloat(document.getElementById("celsius").value);

    if (isNaN(celsius)) {
        alert("Masukkan suhu terlebih dahulu!");
        return;
    }

    let fahrenheit =
        (9 / 5 * celsius) + 32;

    let status = "";

    if (celsius < 20) {
        status = "Dingin";
    }
    else if (celsius <= 30) {
        status = "Normal";
    }
    else {
        status = "Panas";
    }

    document.getElementById("hasil").innerHTML =
        "Celsius : " + celsius + " °C<br>" +
        "Fahrenheit : " + fahrenheit.toFixed(2) + " °F<br>" +
        "Status Cuaca : " + status;
}

function resetData() {

    document.getElementById("celsius").value = "";
    document.getElementById("hasil").innerHTML = "";
}