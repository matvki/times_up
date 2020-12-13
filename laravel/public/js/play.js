let i=0;
let card=document.querySelectorAll(".card");


function play(){
    document.querySelector('.cards').classList.remove('hide')
    document.querySelector('.cards').classList.add('flex')
    document.querySelectorAll(".card")[0].classList.remove('hide')
    document.querySelector('.start').classList.add('hide')
}

function next(){
    restCard=document.querySelectorAll(".card").length
    if (i>restCard-2) {
        i=0
    }else{
        i++
    }
    document.querySelectorAll(".card")[i].classList.remove('hide')
    if (i==0) {
        document.querySelectorAll(".card")[restCard-1].classList.add('hide');

    }else{
        document.querySelectorAll(".card")[i-1].classList.add('hide')
    }
}

function find(){
    restCard=document.querySelectorAll(".card").length
    if(restCard==1){
        document.querySelector('.congrat').classList.remove('hide');
        document.querySelectorAll(".card")[i].classList.add('hide');
        document.querySelectorAll(".next")[i].classList.add('hide');
        document.querySelectorAll(".find")[i].classList.add('hide');
    } else {
        if (i>restCard-2) {
            i=0
            document.querySelectorAll(".card")[restCard-1].classList.add('hide');
        }else{
            
        }
        document.querySelectorAll(".card")[i].remove();
        document.querySelectorAll(".card")[i].classList.remove('hide')
    }
}