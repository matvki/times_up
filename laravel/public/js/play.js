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
    console.log(restCard1)
    if (restCard1>1) {
        
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
}

function find1(time){
    restCard1=document.querySelectorAll(".card1").length
    console.log(restCard1)

    if(restCard1<1){
        document.querySelectorAll(".card1")[i].classList.add('hide');
        document.querySelector(".div-btn1").classList.remove('flex');
        document.querySelector(".div-btn1").classList.add('hide');
        clearInterval(time);
        

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

j=60;
function timer1(time){
    if (j!=0) {
        
        document.querySelector(".timer1").innerHTML = `${j} seconds restantes`
        j--
    }else{
        document.querySelector(".timer1").innerHTML = `${j} seconds restantes`
        document.querySelectorAll(".word")[i].classList.add('white');
        clearInterval(time);
        setTimeout(function(){ alert("le temps est ecouler c'est à l'équipe suivante"); }, 200);
        setTimeout(function(){ document.querySelectorAll(".word")[i].classList.remove('white'); }, 200);
        setTimeout(next1, 200);
        j=60;
        setTimeout(viewTimer1, 200);
    }
}

function viewTimer1(){
    restCard1=document.querySelectorAll(".card1").length

    if(restCard1>=1){
        let time = setInterval(function(){timer1(time)}, 1000);
    }else{
        document.querySelector('.cards1').classList.remove('flex')
        document.querySelector('.cards1').classList.add('hide')
        document.querySelector('.cards2').classList.remove('hide')
        document.querySelector('.cards2').classList.add('flex')
        document.querySelectorAll(".card2")[0].classList.remove('hide')
        document.querySelectorAll(".div-btn1")[0].classList.add('hide')
        document.querySelectorAll(".div-btn2")[0].classList.remove('hide')
        document.querySelectorAll(".div-btn2")[0].classList.add('flex')
        viewTimer2()

    }

}



//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                     start round 2
//////////////////////////////////////////////////////////////////////////////////////////////////////

let k=0;
let card2=document.querySelectorAll(".card2");




function next2(){
    restCard2=document.querySelectorAll(".card2").length
    if (restCard2>1) {
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
}

function find2(time){
    restCard2=document.querySelectorAll(".card2").length
    console.log(restCard2);
    if(restCard2<1){
        document.querySelectorAll(".card2")[k].classList.add('hide');
        document.querySelector(".div-btn2").classList.remove('flex');
        document.querySelector(".div-btn2").classList.add('hide');
        clearInterval(time);
        

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

l=60;
function timer2(time){
    if (l!=0) {
        
        document.querySelector(".timer2").innerHTML = `${l} seconds restantes`
        l--
    }else{
        document.querySelector(".timer2").innerHTML = `${l} seconds restantes`
        document.querySelectorAll(".word")[k].classList.add('white');
        clearInterval(time);
        setTimeout(function(){ alert("le temps est ecouler c'est à l'équipe suivante"); }, 200);
        setTimeout(function(){ document.querySelectorAll(".word")[k].classList.remove('white'); }, 200);
        setTimeout(next2, 200);
        l=60;
        setTimeout(viewTimer2, 200);
    }
}

function viewTimer2(){
    restCard2=document.querySelectorAll(".card2").length

    if(restCard2>=1){

        let time = setInterval(function(){timer2(time)}, 1000);
    }else{
        document.querySelector('.cards2').classList.remove('flex')
        document.querySelector('.cards2').classList.add('hide')
        document.querySelector('.cards3').classList.remove('hide')
        document.querySelector('.cards3').classList.add('flex')
        document.querySelectorAll(".card3")[0].classList.remove('hide')
        document.querySelectorAll(".div-btn2")[0].classList.add('hide')
        document.querySelectorAll(".div-btn3")[0].classList.remove('hide')
        document.querySelectorAll(".div-btn3")[0].classList.add('flex')
        viewTimer3()
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                     start round 3
//////////////////////////////////////////////////////////////////////////////////////////////////////

let m=0;
let card3=document.querySelectorAll(".card3");

function next3(){
    restCard3=document.querySelectorAll(".card3").length
    if (restCard3>1) {
        if (m>restCard3-2) {
            m=0
        }else{
            m++
        }
        document.querySelectorAll(".card3")[m].classList.remove('hide')
        if (m==0) {
            document.querySelectorAll(".card3")[restCard3-1].classList.add('hide');
    
        }else{
            document.querySelectorAll(".card3")[m-1].classList.add('hide')
        }
    }
}

function find3(time){
    restCard3=document.querySelectorAll(".card3").length
    if(restCard3<1){
        console.log(m);
        document.querySelectorAll(".card3")[m].classList.add('hide');
        document.querySelector(".div-btn3").classList.remove('flex');
        document.querySelector(".div-btn3").classList.add('hide');
        clearInterval(time);
        

    } else {
        if (m>restCard3-2) {
            m=0
            document.querySelectorAll(".card3")[restCard3-1].classList.add('hide');
        }else{
            
        }
        document.querySelectorAll(".card3")[m].remove();
        document.querySelectorAll(".card3")[m].classList.remove('hide')
    }
}

n=60;
function timer3(time){
    if (n!=0) {
        
        document.querySelector(".timer3").innerHTML = `${n} seconds restantes`
        n--
    }else{
        document.querySelector(".timer3").innerHTML = `${n} seconds restantes`
        if (m!=0) {
            document.querySelectorAll(".word")[m].classList.add('white');
        }
        clearInterval(time);
        setTimeout(function(){ alert("le temps est ecouler c'est à l'équipe suivante"); }, 200);
        if (m!=0) {
            setTimeout(function(){ document.querySelectorAll(".word")[m].classList.remove('white'); }, 200);
        }
        console.log(restCard3);
        setTimeout(next3, 200);
        n=60;
        setTimeout(viewTimer3, 200);
    }
}

function viewTimer3(){
    restCard3=document.querySelectorAll(".card3").length
    if(restCard3>=1){

        let time = setInterval(function(){timer3(time)}, 1000);
    }else{
        document.querySelector('#play').classList.remove('flex')
        document.querySelector('#play').classList.add('hide')
    }
}