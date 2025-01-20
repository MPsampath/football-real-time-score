let remainingtime = 5;
let timerId;
let scorecalculatetimerid;
let score = { teamA: 0, teamB: 0,status:'Waiting...',remainingtime:remainingtime };

//Match start function
function startMatch() {
    scoreUpdate(score);
    timerId = setInterval(matchTimer,5000);
    scorecalculatetimerid = setInterval(simulateGoal, Math.random() * 5000 + 5000);

}

//Match simulation algorithum
const simulateGoal = () => {
    const scoringTeam = Math.random() < 0.5 ? 'teamA' : 'teamB';
    score[scoringTeam]++;
    score['remainingtime'] = remainingtime;
    score['status'] = "Goal by "+(scoringTeam == "teamA"?"Team A":"Team B");
    scoreUpdate(score);
};

//Update score in websocket and cash
function scoreUpdate(score) {

    if (remainingtime >= 0) {

    axios.get('/livescore', {
        params: {
          score
        }
      })
      .then(function (response) {
      })
      .catch(function (error) {
        alert("Disconnected........");
        holdMatch();

      })
      .finally(function () {
        // always executed
      });
    }
}

// Match timer
function matchTimer()
{
    remainingtime--;
    if (remainingtime == 0) {
        scoreUpdate(score)
    }
}

//Realtime reverb chanel
Echo.channel('score-update').listen('scoreBord',(event)=>{  
    if (event.matchtimeCountdoun == 0) {
        event.status = (event.teamA == event.teamB?"Draw":(event.teamA > event.teamB?"Team A WIN":"Team B WIN"));
    }
    document.getElementById('timmer').textContent = event.matchtimeCountdoun+" Mints";
    document.getElementById('teamA').textContent = "Team A: "+event.teamA;
    document.getElementById('teamB').textContent = "Team B: "+event.teamB;
    document.getElementById('status').textContent = event.status;
    
 })

//Event lisner for start and hold match
document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('matchStart').addEventListener('click', () => {
        startMatch();
    });
});

//Stop the match 
function holdMatch() {
    clearInterval(timerId);
    clearInterval(scorecalculatetimerid);
}


