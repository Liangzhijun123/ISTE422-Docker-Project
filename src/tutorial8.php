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
    <p class="tutorial-header"> Tutorial 8 : UNIX Variables</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <h2>UNIX Variables</h2>

            <p> Variables are a way of passing information from the shell to programs when you run them. Programs look "in the environment" for particular variables and if they are found will use the values stored. Some are set by the system, others by you, yet others by the shell, or any program that loads another program.</p>
            <p> Standard UNIX variables are split into two categories, environment variables and shell variables. In broad terms, shell variables apply only to the current instance of the shell and are used to set short-term working conditions; environment variables have a farther reaching significance, and those set at login are valid for the duration of the session. By convention, environment variables have UPPER CASE and shell variables have lower case names.</p>
        
            <h3 class="tutorial-command-title"> Environment Variables </h3>
            <p> An example of an environment variable is the OSTYPE variable. The value of this is the current operating system you are using. Type.</p>
            
            <p class="para"> %echo $OSTYPE</p>
            
            <ul>
                <li> <span class="para">USER </span>(your login name)</li>
                <li> <span class="para">HOME </span>(the path name of your home directory)</li>
                <li> <span class="para">HOST</span> (the name of the computer you are using)</li>
                <li><span class="para">ARCH</span> (the architecture of the computers processor)</li>
                <li><span class="para">DISPLAY </span>(the name of the computer screen to display X windows)</li>
                <li><span class="para">PRINTER </span>(the default printer to send print jobs)</li>
                <li><span class="para">PATH </span>(the directories the shell should search to find a command)</li>
            </ul>
            
            <h3 class="tutorial-command-title"> Finding out the Current Values of these Variables </h3>
            <p> ENVIRONMENT variables are set using the <strong><span class="para">setenv </span></strong>command, displayed using the <strong><span class="para">printenv</span></strong> or <strong><span class="para">env </span></strong>commands, and unset using the <strong><span class="para">unsetenv </span></strong>command.</p>

           
            
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title"> Shell Variables </h3>
            <p> An example of a shell variable is the history variable. The value of this is how many shell commands to save, allow the user to scroll back through all the commands they have previously entered. Type </p>
            <p class="para"> %echo $history</p>

            <ul>
                <li><span class="para">cwd </span>(your current working directory)</li>
                <li><span class="para">home</span> (the path name of your home directory)</li>
                <li><span class="para">path </span>(the directories the shell should search to find a command)</li>
                <li><span class="para">prompt </span>(the text string used to prompt for interactive commands shell your login shell)</li>
               
            </ul>
            <h3 class="tutorial-command-title"> Finding out the Current Values of these Variables </h3>
            <p> HELL variables are both set and displayed using the set command. They can be unset by using the unset command.</p>

            <p> To show all values of these variables, type</p>

            <p class="para"> %set | less</p>

            <h3 class="tutorial-command-title"> So what is the difference between PATH and path? </h3>
            <p> In general, environment and shell variables that have the same name (apart from the case) are distinct and independent, except for possibly having the same initial values. There are, however, exceptions.</p>

            <p> Each time the shell variables home, user and term are changed, the corresponding environment variables HOME, USER and TERM receive the same values. However, altering the environment variables has no effect on the corresponding shell variables.</p>
            <p> PATH and path specify directories to search for commands and programs. Both variables always represent the same directory list, and altering either automatically causes the other to be changed.</p>
            
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title"> Using and Setting Variables </h3>
            <p> Each time you login to a UNIX host, the system looks in your home directory for initialisation files. Information in these files is used to set up your working environment. The C and TC shells uses two files called .login and .cshrc (note that both file names begin with a dot).</p>
           
            
            <p>At login the C shell first reads <span class="para">.cshrc</span> followed by <span class="para">.login</span> </p>

            <p> <span class="para">.login</span> is to set conditions which will apply to the whole session and to perform actions that are relevant only at login.</p>

            <p><span class="para">.cshrc </span>is used to set conditions and perform actions specific to the shell and to each invocation of it.  </p>

            <p> The guidelines are to set ENVIRONMENT variables in the <span class="para">.login </span>file and SHELL variables in the <span class="para">.cshrc </span>file.</p>

            
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title"> Setting Shell Variables in the '.cshrc' File </h3>
            <p> For example, to change the number of shell commands saved in the history list, you need to set the shell variable history. It is set to 100 by default, but you can increase this if you wish.   </p>
            <p class="para"> %set history = 200</p>

            <p>Check this has worked by typing </p>
            <p class="para"> %echo $history</p>

            <p>First open the .cshrc file in a text editor. An easy, user-friendly editor to use is nedit.</p>
            <p class="para"> %nedit ~/.cshrc</p>

            <p>Save the file and force the shell to reread its .cshrc file buy using the shell source command. </p>
            <p class="para"> %source .cshrc</p>

            <p>Check this has worked by typing </p>
            <p class="para"> %echo $history</p>
            
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title"> Setting the Path </h3>
            <p> When you type a command, your path (or PATH) variable defines in which directories the shell will look to find the command you typed. If the system returns a message saying "command: Command not found", this indicates that either the command doesn't exist at all on the system or it is simply not in your path.</p>

            <p> You can add it to the end of your existing path (the $path represents this) by issuing the command:</p>
            <p class="para"> %set path = ($path ~/units174/bin)</p>

            <p> Test that this worked by trying to run units in any directory other that where units is actually located. </p>
            <p class="para"> %cd <br> %units</p>
            <p> To add this path PERMANENTLY, add the following line to your .cshrc AFTER the list of other commands.  </p>
            <p class="para"> set path = ($path ~/units174/bin)</p>
            
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
