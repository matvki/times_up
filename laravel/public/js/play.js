let i=0;
let card1=document.querySelectorAll(".card1");


function play(){
    document.querySelector('.cards1').classList.remove('hide')
    document.querySelector('.cards1').classList.add('flex')
    document.querySelectorAll(".card1")[0].classList.remove('hide')
    document.querySelector('.start').classList.remove('flex')
    document.querySelector('.start').classList.add('hide')
}

function next1(){
    restCard1=document.querySelectorAll(".card1").length
    if (i>restCard1-2) {
        i=0
    }else{
        i++
    }
    document.querySelectorAll(".card1")[i].classList.remove('hide')
    if (i==0) {
        document.querySelectorAll(".card1")[restCard1-1].classList.add('hide');

    }else{
        document.querySelectorAll(".card1")[i-1].classList.add('hide')
    }
}

function find1(){
    restCard1=document.querySelectorAll(".card1").length
    if(restCard1==1){
        document.querySelector('.congrat').classList.remove('hide');
        document.querySelectorAll(".card1")[i].classList.add('hide');
        document.querySelectorAll(".next")[i].classList.add('hide');
        document.querySelectorAll(".find")[i].classList.add('hide');
    } else {
        if (i>restCard1-2) {
            i=0
            document.querySelectorAll(".card1")[restCard1-1].classList.add('hide');
        }else{
            
        }
        document.querySelectorAll(".card1")[i].remove();
        document.querySelectorAll(".card1")[i].classList.remove('hide')
    }
}

j=2;
function timer1(time){
    if (j!=0) {
        
        document.querySelector(".timer").innerHTML = `${j} seconds restantes`
        j--
    }else{
        document.querySelector(".timer").innerHTML = `${j} seconds restantes`
        document.querySelectorAll(".word")[i].classList.add('white');
        clearInterval(time);
        setTimeout(function(){ alert("le temps est ecouler c'est à l'équipe suivante"); }, 200);
        setTimeout(function(){ document.querySelectorAll(".word")[i].classList.remove('white'); }, 200);
        setTimeout(next1, 200);
        j=2;
        setTimeout(viewTimer1, 200);
    }
}

function viewTimer1(){
    restCard1=document.querySelectorAll(".card1").length

    if(restCard1>1){

        let time = setInterval(function(){timer1(time)}, 1000);
    }else{
        document.querySelector('.cards2').classList.remove('hide')
        document.querySelector('.cards2').classList.add('flex')
        document.querySelectorAll(".card2")[0].classList.remove('hide')
        document.querySelectorAll(".div-btn1")[0].classList.add('hide')
        document.querySelectorAll(".div-btn2")[0].classList.remove('hide')
        document.querySelectorAll(".div-btn2")[0].classList.add('flex')


    }

}



//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                     start round 2
//////////////////////////////////////////////////////////////////////////////////////////////////////

let k=0;
let card2=document.querySelectorAll(".card2");




function next2(){
    restCard2=document.querySelectorAll(".card2").length
    if (k>restCard2-2) {
        k=0
    }else{
        k++
    }
    document.querySelectorAll(".card2")[k].classList.remove('hide')
    if (k==0) {
        document.querySelectorAll(".card2")[restCard2-1].classList.add('hide');

    }else{
        document.querySelectorAll(".card2")[k-1].classList.add('hide')
    }
}

function find2(){
    restCard2=document.querySelectorAll(".card2").length
    if(restCard2==1){
        document.querySelector('.congrat').classList.remove('hide');
        document.querySelectorAll(".card2")[k].classList.add('hide');
        document.querySelectorAll(".next")[k].classList.add('hide');
        document.querySelectorAll(".find")[k].classList.add('hide');
    } else {
        if (k>restCard2-2) {
            k=0
            document.querySelectorAll(".card2")[restCard2-1].classList.add('hide');
        }else{
            
        }
        document.querySelectorAll(".card2")[k].remove();
        document.querySelectorAll(".card2")[k].classList.remove('hide')
    }
}

l=2;
function timer2(time){
    if (l!=0) {
        
        document.querySelector(".timer").innerHTML = `${l} seconds restantes`
        l--
    }else{
        document.querySelector(".timer").innerHTML = `${l} seconds restantes`
        document.querySelectorAll(".word")[i].classList.add('white');
        clearInterval(time);
        setTimeout(function(){ alert("le temps est ecouler c'est à l'équipe suivante"); }, 200);
        setTimeout(function(){ document.querySelectorAll(".word")[i].classList.remove('white'); }, 200);
        setTimeout(next, 200);
        l=2;
        setTimeout(viewTimer, 200);
    }
}

function viewTimer2(){
    restCard2=document.querySelectorAll(".card2").length

    if(restCard2>1){

        let time = setInterval(function(){timer(time)}, 1000);
    }else{
        console.log("fini");
    }
}