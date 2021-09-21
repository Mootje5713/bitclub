var score1 = 0;


function check() {
    var vraag1 = document.getElementById("antw1");
    var vraag2 = document.getElementById("antw2");
    var vraag3 = document.getElementById("antw3");
    var vraag4 = document.getElementById("antw4");
    var vraag5 = document.getElementById("antw5");
    var vraag6 = document.getElementById("antw6");
    var vraag7 = document.getElementById("antw7");
    var vraag8 = document.getElementById("antw8");
    var vraag9 = document.getElementById("antw9");
    var vraag10 = document.getElementById("antw10");
    var vraag11 = document.getElementById("antw11");
    var vraag12 = document.getElementById("antw12");

     if (vraag1.checked == false) {
         score1 += 1;
         document.getElementById("vraag1").style.backgroundColor = "red";
     } else {
         document.getElementById("vraag1").style.backgroundColor = "green";
     }
     if (vraag2.checked == false) {
         score1 += 1;
         document.getElementById("vraag2").style.backgroundColor = "red";
     } else {
         document.getElementById("vraag2").style.backgroundColor = "green";
     }
     if (vraag3.checked == false) {
       score1 += 1;
       document.getElementById("vraag3").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag3").style.backgroundColor = "green";
     }
     if (vraag4.checked == false) {
       score1 += 1;
       document.getElementById("vraag4").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag4").style.backgroundColor = "green";
     }
     if (vraag5.checked == false) {
       score1 += 1;
       document.getElementById("vraag5").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag5").style.backgroundColor = "green";
     }
     if (vraag6.checked == false) {
       score1 += 1;
       document.getElementById("vraag6").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag6").style.backgroundColor = "green";
     }
     if (vraag7.checked == false) {
       score1 += 1;
       document.getElementById("vraag7").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag7").style.backgroundColor = "green";
     }
     if (vraag8.checked == false) {
       score1 += 1;
       document.getElementById("vraag8").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag8").style.backgroundColor = "green";
     }
     if (vraag9.checked == false) {
       score1 += 1;
       document.getElementById("vraag9").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag9").style.backgroundColor = "green";
     }
     if (vraag10.checked == false) {
       score1 += 1;
       document.getElementById("vraag10").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag10").style.backgroundColor = "green";
     }
     if (vraag11.checked == false) {
       score1 += 1;
       document.getElementById("vraag11").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag11").style.backgroundColor = "green";
     }
     if (vraag12.checked == false) {
       score1 += 1;
       document.getElementById("vraag12").style.backgroundColor = "red";
     } else {
       document.getElementById("vraag12").style.backgroundColor = "green";
     }


function showResults(){
     const answerContainers = quizContainer.querySelectorAll('.answers');
   let numCorrect = 0;

   myQuestions.forEach( (currentQuestion, questionNumber) => {
     const answerContainer = answerContainers[questionNumber];
     const selector = `input[name=question${questionNumber}]:checked`;
     const userAnswer = (answerContainer.querySelector(selector) || {}).value;

     if(userAnswer === currentQuestion.correctAnswer){
       numCorrect++;
       answerContainers[questionNumber].style.color = 'lightgreen';
    }
     else{
       answerContainers[questionNumber].style.color = 'red';
     }
   });
   resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
 }

 if (score1 == 0) {
   document.body.innerHTML += "<h2> Je hebt alles goed, Super gedaan!</h2>";
 } else {
   document.body.innerHTML += "<h2> je hebt " + score1.toString() + " fout, Jammer probeer het nog een keer </h2>";
 }
 score1 = 0;
}  