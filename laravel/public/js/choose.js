let yesCard = document.getElementById("yesCard");
let noCard = document.getElementById("noCard");
yesCard.addEventListener('change', () => {
    chooseCard.classList.remove('none');
});
noCard.addEventListener('change', () => {
    chooseCard.classList.add('none');
});

