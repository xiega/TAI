let bramkarze = ["Wojciech Szczęsny", "Łukasz Fabiański"];
let napastnicy = ["Turbo Grosik", "Robert Lewandowski"];

function show() {
    let choice = document.querySelector("#pozycja").value;
    document.querySelector("ol").textContent = ''
    switch(choice) {
        case "bramkarze":
            for(el of bramkarze) {
                let newEl = document.createElement("li")
                document.querySelector("ol").append(newEl)
                newEl.textContent = el
                document.querySelector("#kox").src = "../gr/pobrane (6).jpg"
            }
            break;
        case "napastnicy":
            for(el of napastnicy) {
                let newEl = document.createElement("li")
                document.querySelector("ol").append(newEl)
                newEl.textContent = el
                document.querySelector("#kox").src = "../gr/pobrane.jpg"
            }
            break;
    }
}

document.getElementById("btn").addEventListener("click",show)

document.getElementById("btn1").addEventListener("click", () => {
    let choice = document.querySelector("#pozycja").value;
    let newPlayer = prompt("Podaj imię i nazwisko piłkarza")
    switch(choice) {
        case "bramkarze":
            bramkarze.push(newPlayer)
            break;
        case "napastnicy":
            napastnicy.push(newPlayer)
            break;
    }
    show()
})