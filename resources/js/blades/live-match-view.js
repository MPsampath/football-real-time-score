//Realtime reverb chanel
Echo.channel('score-update').listen('scoreBord',(event)=>{  
    if (event.matchtimeCountdoun == 0) {
        event.status = (event.teamA == event.teamB?"Draw":(event.teamA > event.teamB?"Team A WIN":"Team B WIN"));
    }
    document.getElementById('timmer').textContent = event.matchtimeCountdoun+" Mints";
    document.getElementById('teamA').textContent = "Team A: "+event.teamA;
    document.getElementById('teamB').textContent = "Team B: "+event.teamB;
    document.getElementById('status').textContent = event.status;
 });