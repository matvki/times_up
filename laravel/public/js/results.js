let team1 = document.querySelector("#team1").textContent
let team2 = document.querySelector("#team2").textContent
let team3 = document.querySelector("#team3").textContent
let nbrTeam = document.querySelector("#nbrTeam").textContent


let team=[team1,team2,team3];
let tampon;

if (nbrTeam=="3") {
    for (let i =0 ; i < 3 ; i++){
        for (let j = 0; j < 2; j++) {
            if (team[j]<team[j+1]) {
                tampon=team[j]
                team[j]=team[j+1]
                team[j+1]=tampon;
            }   
        }
    }
    switch (team[1]) {
        case team1:
            document.querySelector(".p3-podium2").innerHTML= `Equipe 1: ${team1}pts`
            break;
        case team2:
            document.querySelector(".p3-podium2").innerHTML= `Equipe 2: ${team2}pts`
            break;
        case team3:
            document.querySelector(".p3-podium2").innerHTML= `Equipe 3: ${team3}pts`
            break;
    
    }
    switch (team[0]) {
        case team2:
            document.querySelector(".p3-podium1").innerHTML= `Equipe 2: ${team2}pts`
            break;
        case team3:
            document.querySelector(".p3-podium1").innerHTML= `Equipe 3: ${team3}pts`
            break;
        case team1:
            document.querySelector(".p3-podium1").innerHTML= `Equipe 1: ${team1}pts`
            break;
    
    }
    switch (team[2]) {
        case team3:
            document.querySelector(".p3-podium3").innerHTML= `Equipe 3: ${team3}pts`
            break;
        case team2:
            document.querySelector(".p3-podium3").innerHTML= `Equipe 2: ${team2}pts`
            break;
        case team1:
            document.querySelector(".p3-podium3").innerHTML= `Equipe 1: ${team1}pts`
            break;
        
        
    
    }
}else{
    
    if (team[0]<team[1]) {
        tampon=team[0]
        team[0]=team[1]
        team[1]=tampon;
    }
    if (team[0]==team1) {
        document.querySelector(".p2-podium2").innerHTML= `Equipe 2: ${team2}pts`
        document.querySelector(".p2-podium1").innerHTML= `Equipe 1: ${team1}pts`
    }else{
        document.querySelector(".p2-podium2").innerHTML= `Equipe 1: ${team1}pts`
        document.querySelector(".p2-podium1").innerHTML= `Equipe 2: ${team2}pts`
    }


}




