var currentQuestionNum = 1;
var questionscorrect = 0;
//disply question by number
//adds the correct text to the page
function dispQuestion() {
  var choices = document.getElementsByClassName('choice');
  var question = document.getElementById('question');


  //event listener
  //looks if correct answer is pressed
  const answerPressed = e => {
    //if not answer pressed matches index of correct answer defined by array
    if (!(mainQuestionsArr[currentQuestionNum - 1].indexOf(e.target.innerHTML) == mainQuestionsArr[currentQuestionNum - 1][4])) {
      e.target.style.backgroundColor = "red";
      e.target.style.color = "white";
      document.getElementById('secondaryquizinfo').style.display = "block";
      document.getElementById('explantiondesc').innerHTML = mainQuestionsArr[currentQuestionNum - 1][5];
      for (element of document.getElementsByClassName('choice')) {
        element.style.pointerEvents = 'none';
      }
    }
    else {
      for (element of document.getElementsByClassName('choice')) {
        element.style.pointerEvents = 'none';
      }
      document.getElementById('explantiondesc').innerHTML = mainQuestionsArr[currentQuestionNum - 1][5];
      document.getElementById('secondaryquizinfo').style.display = "block";
      e.target.style.backgroundColor = "green";
      e.target.style.color = "white";
      questionscorrect = questionscorrect + 1;

      window.clearInterval(timerobj);
    }
  }//end e.listener

  for (let choice of choices) {//adds event listener
    choice.addEventListener("click", answerPressed);
  }

  //set fields from array
  question.innerHTML = mainQuestionsArr[currentQuestionNum - 1][0];
  for (var i = 0; i < 3; i++) {
    choices[i].innerHTML = mainQuestionsArr[currentQuestionNum - 1][i + 1]
    choices[i].style.color = 'black';
    choices[i].style.backgroundColor = 'white';
  }
}//end dispQuestion


//onNextQuestion
//set back to white
function onNextQuestion() {
  time_remaining = 20;
  for (element of document.getElementsByClassName('choice')) {
    element.style.pointerEvents = 'auto';
  }
  window.setInterval(timer, 1000);

  if (currentQuestionNum == 4) {
    document.getElementById('secondaryquizinfo').style.display = "none";
    currentQuestionNum = 1;

    alert("Congrats, you got " + questionscorrect + " question(s) correct! You will be redirected when closing this message.");
    window.location.replace("Quizlanding.php");
    questionscorrect = 0;
    dispQuestion();

  }
  else {
    currentQuestionNum = currentQuestionNum + 1;
    document.getElementById('secondaryquizinfo').style.display = "none";
    dispQuestion();
  }
}//end onNextQuestion

var time_remaining = 20;
function timer() {
  document.getElementById('timeremaining').innerHTML = "Timer Remaining: " + time_remaining;
  time_remaining = time_remaining - 1;
  if (time_remaining <= 0) {
    time_remaining = 0;
    window.clearInterval();
    document.getElementById('secondaryquizinfo').style.display = "block";
    document.getElementById('explantiondesc').innerHTML = mainQuestionsArr[currentQuestionNum - 1][5];

    let choices = document.getElementsByClassName('choice');
    for (element of choices) {
      if (!(mainQuestionsArr[currentQuestionNum - 1].indexOf(element.innerHTML) == mainQuestionsArr[currentQuestionNum - 1][4])) {

        element.style.backgroundColor = 'red';
        element.style.color = 'white';
      }
      else {
        element.style.backgroundColor = 'green';
        element.style.color = 'white';
      }
    }
  }
}
const timerobj =  window.setInterval(timer, 1000);
