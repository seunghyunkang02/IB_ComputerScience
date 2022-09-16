function result(){
var question1 = document.quiz.question1.value;
var question2 = document.quiz.question2.value;
var question3 = document.quiz.question3.value;
var question4 = document.quiz.question4.value;

var correct = 0;

    if (question1 == "False") {
      correct++;
    }

    if (question2 == "True") {
      correct++;
    }

    if (question3 == "True") {
      correct++;
    }

    if (question4 == "False") {
      correct++;
    }

var messages = ["Great!","That's okay!","Needs improvement!"];

var range;
  if (correct < 1) {
    range = 2;
  }

  if (correct > 0 && correct < 3) {
    range = 1;
  }

  if (correct > 2){
    range = 0;
  }


alert("Correct = " + correct);

document.getElementById("message").innerHTML = messages[range];
document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
}

