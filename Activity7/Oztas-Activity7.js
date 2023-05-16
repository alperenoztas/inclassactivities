/*
@Author : Alperen Oztas
*/


var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	
	
};

function displayResults()
{
	var average = 0;
	var highestScore = 0;


	// Added highest check while looking for average
	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);

		if(scores[i] > highestScore){
			highestScore = scores[i];
		}
	}
	
	//Get Index of highest score
	var highestScoreName = scores.indexOf(highestScore);

	$("results").innerHTML="<h2> Results </h2>"
							+"<br/> Average score = " + average + "<br \> "
							+ "High score = " + names[highestScoreName] + " with a score of " + scores[highestScoreName];
}


function displayScores(){

	// Table display added into scores_table with row and columns.
    var scoreTable = '<tr>' + '<td>' + '<b>Name</b>' + '</td>' + '<td>' + '<b>Score</b>' + '</td>' + '</tr>'
	for (var i = 0; i < names.length; i++) {
		scoreTable += '<tr>' + '<td>' + names[i] + '</td>' + '<td>' + scores[i] + '</td>' + '</tr>'

	}

	$("scores_table").innerHTML = "<h2> Scores </h2>" + scoreTable;

}

function addScore(){

	//Conditions has created here for validity check
	var isNameEmpty = String($("name").value) == '';
	var isScoreOverHundred = parseInt($("score").value) >= 101;
	var isScoreLowerZero = parseInt($("score").value) <= 0;
	var isScoreEmpty = String($("score").value) == '';


	//If given conditions are satisfied
	if (isNameEmpty || isScoreOverHundred ||isScoreLowerZero || isScoreEmpty) {

		alert("You must enter a name and a valid score");
	}

	//Add names and scores those.
	else {
		names.push(String($("name").value));
		scores.push(parseInt($("score").value));
	}

}