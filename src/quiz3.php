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
    <title>Roasted Duck - Quiz 3</title>

  </head>



  <body>

    <div id="fullquizholder">

      <div class="mainquizholder">
        <div class="quizcontent">
          <div id="intro-timer">
            <h1>Quiz 3</h1><p id="timeremaining">Time Remaining</p>
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
    ["What is the purpose of the “chmod” command in UNIX?", "Change the system’s date and time", "Change file permissions", "Create a new directory", 2, "The purpose of the chmod command is used to change and manage file permissions. This command allows you to control who can read, write, and execute files."],
    ["What is the home directory for the superuser (root) in UNIX?", "/home/root", "/superuser", "/root", 3, "The home directory for the superuser in UNIX is the '/root' directory. Other regular user accounts will typically have their home directories under '/home', but the root's home directory is under the root of the file system."],
    ["What is the purpose of the ‘grep’ command in UNIX?", "Create a new file", "Search for patterns in text files", "Change file permissions", 2, "The 'grep' command in UNIX is used for searching text files for lines that match a specific given pattern. This command helps users extract information based on what they are looking for."],
    ["What is the purpose of the ‘mkdir’ command?", "Remove a directory", "Create a new directory", "Move files and directories", 2, "The 'mkdir' command is meant to create new directories to store files. The command followed by a name would be the name given to the directory"],  ];//end array


  //2D array  - holds all questions for quiz 1

    dispQuestion();
</script>


<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
