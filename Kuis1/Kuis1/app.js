var jawaban1;

function selectAnswer(bahasa){
  jawaban1 = bahasa;
}

function checkAnswers(event) {
  event.preventDefault();
  score = 0;

  let jawaban2 = document.getElementById("jawaban2");
  let jawaban3 = document.getElementById("jawaban3");

  if (jawaban1 == "codeblock") {
    score++;
  }
  if (jawaban2.value == 6){
    score++;
  }
  if (jawaban3.value == "biru") {
    score++;
  }

  document.getElementById("jawaban").innerHTML = "Hasil Kuis: " + score + " Jawaban Benar";
}
