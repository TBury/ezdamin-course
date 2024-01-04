const selectVehicleButton = document.getElementById("wybierz-pojazd");
selectVehicleButton.addEventListener("click", () => {
    let vehicle = document.getElementById("pojazdy").value;
    let output = document.getElementById("wynik");
    switch (vehicle) {
        case "renault":
            output.innerHTML = "Renault Range T, 460 KM, 131531 km, tablica rejestracyjna KR130RE";
            break;
        case "man":
            output.innerHTML = "MAN TGX XXL, 510 KM, 341833 km, tablica rejestracyjna KR131RE";
            break;
        case "scania":
            output.innerHTML = "Scania Streamline, 460 KM Euro 6, 143371 km, tablica rejestracyjna KR130RF";
            break;
        case "mercedes":
            output.innerHTML = "Mercedes-Benz New Actros, 460 KM Euro 6, 143313 km, tablica rejestracyjna KR130TB";
            break;
    }
})

const calculateCost = document.getElementById("oblicz");
calculateCost.addEventListener("click", () => {
    let towar = document.getElementById("rodzaj-towaru").value;
    let dystans = document.getElementById("dystans").value;
    let wynik = document.getElementById("koszt");
    let koszt = 0;
    switch (towar) {
        case "chlodnia":
            koszt = dystans * 0.15;
            break;
        case "zwykly":
            koszt = dystans * 0.05;
            break;
        case "gabaryt":
            koszt = dystans * 0.95;
            break;
    }
    wynik.innerHTML = "Koszt zlecenia: " + koszt + " zł/km";
})

