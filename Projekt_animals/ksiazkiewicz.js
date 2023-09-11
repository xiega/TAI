let opis = document.getElementsByClassName('opis');
let baza = document.getElementsByClassName('baza');


for (let i = 0; i < baza.length; i++) {
    baza[i].addEventListener('click', function () {
        opis[i].classList.toggle("show");
    });
}