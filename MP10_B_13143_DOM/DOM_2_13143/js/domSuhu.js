function konversi() {

    let celsius =
        document.getElementById("celsius").value;

    let fahrenheit =
        (9 / 5 * celsius) + 32;

    document.getElementById("hasil").innerHTML =
        celsius + " °C = " +
        fahrenheit + " °F";
}
