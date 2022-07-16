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
  if (document.getElementById("Questions2Ans1").checked) {
    if (
      document.getElementById("Questions2Ans1").value ==
      document.getElementById("correct2_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions2Ans2").checked) {
    if (
      document.getElementById("Questions2Ans2").value ==
      document.getElementById("correct2_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions2Ans3").checked) {
    if (
      document.getElementById("Questions2Ans3").value ==
      document.getElementById("correct2_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions2Ans4").checked) {
    if (
      document.getElementById("Questions2Ans4").value ==
      document.getElementById("correct2_answer").value
    ) {
      score++;
    }
  }

  //   third question
  if (document.getElementById("Questions3Ans1").checked) {
    if (
      document.getElementById("Questions3Ans1").value ==
      document.getElementById("correct3_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions3Ans2").checked) {
    if (
      document.getElementById("Questions3Ans2").value ==
      document.getElementById("correct3_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions3Ans3").checked) {
    if (
      document.getElementById("Questions3Ans3").value ==
      document.getElementById("correct3_answer").value
    ) {
      score++;
    }
  } else if (document.getElementById("Questions3Ans4").checked) {
    if (
      document.getElementById("Questions3Ans4").value ==
      document.getElementById("correct3_answer").value
    ) {
      score++;
    }
  }
}
