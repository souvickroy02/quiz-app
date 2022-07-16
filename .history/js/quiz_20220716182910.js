function checkScore() {
  score = 0;
  //   first question
  if (document.getElementById("Questions1Ans1").checked) {
    if (
      document.getElementById("Questions1Ans1").value ==
      document.getElementById("correct1_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions1Ans2").checked) {
    if (
      document.getElementById("Questions1Ans2").value ==
      document.getElementById("correct1_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions1Ans3").checked) {
    if (
      document.getElementById("Questions1Ans3").value ==
      document.getElementById("correct1_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions1Ans4").checked) {
    if (
      document.getElementById("Questions1Ans4").value ==
      document.getElementById("correct1_answer").value
    ) {
      score++;
    }
  }

  //   second question
  if (document.getElementById("Questions1Ans1").checked) {
    if (
      document.getElementById("Questions1Ans1").value ==
      document.getElementById("correct1_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions1Ans2").checked) {
    if (
      document.getElementById("Questions1Ans2").value ==
      document.getElementById("correct1_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions1Ans3").checked) {
    if (
      document.getElementById("Questions1Ans3").value ==
      document.getElementById("correct1_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions1Ans4").checked) {
    if (
      document.getElementById("Questions1Ans4").value ==
      document.getElementById("correct1_answer").value
    ) {
      score++;
    }
  }
}
