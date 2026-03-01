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
    <title>Roasted Duck - Quiz 1</title>

  </head>



  <body>

    <div id="fullquizholder">

      <div class="mainquizholder">
        <div class="quizcontent">
          <div id="intro-timer">
            <h1>Quiz 1</h1><p id="timeremaining">Time Remaining</p>
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
    ["What is the primary function of a UNIX Shell?", "Interacting with the Operating System", "Managing hardware components", "Running graphical user interfaces", 1, "The UNIX Shell acts as a command-line interpreter that allows the user to interact with the Operating System. It executes commands given to it by the user and does many other things like file management and program execution."],
    ["Which of the following is the root directory in a UNIX file system?", "/home", "/usr", "/", 3, "In UNIX, the root directory is represented by a forward flash (/). It is the top level directory in a UNIX file system, which serves as a starting point for the file system tree."],
    ["Which UNIX shell is known for its advanced features like customizable auto-completion?", "Bash", "Zsh", "Fish", 2, "The Zsh or Z Shell is an extended version of the Bourne Shell that includes powerful auto-completion which can be customized. While Bash and Fish also have their own unique features, Zsh is recognized as a flexible and extensible choice among advanced users."],
    ["In UNIX, what command is used to list files and directories in a directory?", "show", "display", "Ls", 3, "The 'ls' command stands for 'list.' When you run it in the terminal, it displays the contents of the current directory."],
  ];//end array


  //2D array  - holds all questions for quiz 1

    dispQuestion();
</script>


<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
