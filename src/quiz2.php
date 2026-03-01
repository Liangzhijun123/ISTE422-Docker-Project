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
    <title> Roasted Duck Quiz 2</title>

  </head>



  <body>

    <div id="fullquizholder">

      <div class="mainquizholder">
        <div class="quizcontent">
          <div id="intro-timer">
            <h1>Quiz 2</h1><p id="timeremaining">Time Remaining</p>
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
    ["What does the command “mv” in UNIX do?", "Copy files and directories", "Move files and directories", "Delete files and directories", 2, "The 'mv' command in UNIX is used to relocate or move files and directories within the file system."],
    ["Which directory contains system wide configuration files in UNIX?", "/bin", "/etc", "/var", 2, "The 'etc' directory is a central location for system-wide configuration files. It contains miscellaneous system files like network configuration, system startup, user account information and other settings that affect the entire system."],
    ["What does the “ps” command in UNIX do?", "Display the contents of a file", "Print the working directory", "Show information about running processes", 3, "The 'ps' command is used to show information about running processes. When run, it will show specific details like CPU and memory usage among many other things."],
    ["Which directory is used for temporary files that can be safely deleted in UNIX?", "/temp", "/tmp", "/tempfiles", 2, "The directory commonly used for temporary files that can be safely deleted is called the '/tmp' file. It is very common for programs to create temporary files during their execution, which are expected to be short lived."],
  ];//end array


  //2D array  - holds all questions for quiz 1

    dispQuestion();
</script>


<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
