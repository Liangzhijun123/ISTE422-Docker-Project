<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/header.php';
?>

<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/nav.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Roasted Duck - Quiz 4</title>

  </head>



  <body>

    <div id="fullquizholder">

      <div class="mainquizholder">
        <div class="quizcontent">
          <div id="intro-timer">
            <h1>Introduction</h1><p id="timeremaining">Time Remaining</p>
          </div>
          <h2 id="question">Question</h2>
          <div class="choice">
            <p>Answer 1</p>
          </div>
          <div class="choice">
            <p>Answer 2</p>
          </div>
          <div class="choice">
            <p>Answer 3</p>
          </div>
            <p id="nextquestion" onclick="onNextQuestion()">Next Question</p>
        </div>

          <div id="secondaryquizinfo">
            <h1>Explanation:</h1>
            <p id="explantiondesc"></p>
          </div>

        </div>

    </div>
  </body>
</html>
<script src="assets/scripts/quiz.js"></script>
<script>

  const mainQuestionsArr = [
    //Question   Answer Choice   Answer Choice   Answer Choice   Correct answer Number (matches the position in array )  Explanation
    ["What command is used to display the manual pages for other commands in UNIX?", "man", "help", "Info", 1, "The 'man' command is used to display the manual page for other commands. It displays detailed information and documentation. Other commands like 'help' and 'info' can be found in certain iterations of UNIX, but it is not standard."],
    ["What does the ‘echo’ command primarily do?", "Print the working directory", "Display the contents of a file", "Output text to terminal", 3, "The use of the 'echo' command in UNIX is to output text to the terminal. It is often used in shell scripts or command-line operations."],
    ["What command is used to search for files and directories in UNIX?", "find", "search", "Locate", 1, "The 'find' command in UNIX is used to search only for files and directories in a directory hierarchy. Criteria based on file name, modification time, and size can be used to locate a file with this command."],
    ["In UNIX, what is the function of the ‘passwd’ command?", "Display user’s information", "Change a user’s password", "Create a new user account", 2, "The 'passwd' command is used to change a user's password, given the input of their current password and then the new one they want to change it to."]
  ];//end array


  //2D array  - holds all questions for quiz 1

    dispQuestion();
</script>


<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
