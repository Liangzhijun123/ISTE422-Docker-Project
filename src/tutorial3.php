<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/header.php';
?>
<body class="body-tutorial2">
<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/nav.php';
?>



<div>
    <br>
    <br>
    <br>
    <p class="tutorial-header"> Tutorial 3 : Redirection and Pipes</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
        <h2>Redirection</h2>
        <hr>
            <h3 class="tutorial-command-title">cat</h3>
            <li>If you run the cat command without specifying a file to read, it reads the standard input (the keyboard), and on receiving the 'end of file' (^D), copies it to the standard output (the screen)</li>
            <br>
            <i>Ex. % cat example.txt</i>
        <hr>
        <h3 class="tutorial-command-title">Redirecting the Output</h3>
        <p>Use the '>' symbol to redirect the output of a command. To create a file called list1 containing a list of stuff</p>
        <ul>
            <li> %cat > list1</li>
            <li> %cat list1</li>
            <li> 'd' to stop</li>
        </ul>
        <h3 class="tutorial-command-title">Appending to a File</h3>
        <p>The form '>>' appends standard output to a file. You can add more items in list1</p>
        <i>Ex.  % cat >> list1</i>
            
        </div>


        
        <div class="grid-color">
        <h2>Redirecting the Input</h2>
        <hr>
        <h3 class="tutorial-command-title">sort</h3>
            <p>The command sort alphabetically or numerically sorts a list</p>
            <p>Using '<' can redirect the input to come from a file</p>
            <i>Ex. %sort < list1 </i>
        
        </div>

        <div class="grid-color">
        <h2>Pipes</h2>

            <h3 class="tutorial-command-title">who</h3>

            <p>Allows you to see who is on the system with you</p>
            <i>Ex. % who</i>
            
            <p>Method to get a sorted list of names</p>
            <i>Ex. % who > names.txt</i>

            <p>To find out how many users are logged on</p>
            <i>Ex. % who | wc -l</i>    

        </div>

    </div>

    <div class="tutorial_button">
  
      <a href="tutorial.php" class="unixbutton">Unix tutorials content</a>
    </div>
</div>



<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/footer.php';
?>
