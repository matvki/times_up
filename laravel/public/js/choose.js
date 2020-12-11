let ct2 = document.getElementById("2");
let ct3 = document.getElementById("3");
let yesTeam = document.getElementById("yesTeam");
let noTeam = document.getElementById("noTeam");
let yesCard = document.getElementById("yesCard");
let noCard = document.getElementById("noCard");
let team2 = document.getElementById("team2");
let team3 = document.getElementById("team3");
let chooseTeam = document.getElementById("chooseTeam")
yesTeam.addEventListener('change', () => {
    chooseTeam.classList.remove('none');
});
noTeam.addEventListener('change', () => {
    chooseTeam.classList.add('none');
});
yesCard.addEventListener('change', () => {
    chooseCard.classList.remove('none');
});
noCard.addEventListener('change', () => {
    chooseCard.classList.add('none');
});
ct2.addEventListener('change', () => {
    if ((team3.classList.contains('none')) === true) {
        team2.classList.add("none");
        team3.classList.remove("none");
    } else {
        team3.classList.add("none");
        team2.classList.remove("none");
    }
});
ct3.addEventListener('change', () => {
    if ((team3.classList.contains('none')) === true) {
        team2.classList.add("none");
        team3.classList.remove("none");
    } else {
        team3.classList.add("none");
        team2.classList.remove("none");
    }
});

