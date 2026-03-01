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
    <p class="tutorial-header">Tutorial 6: Useful Commands </p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <h2>Other userful UNIX commands </h2>

            <h3 class="tutorial-command-title"> quota </h3>
            <p> To check your current quota and how much of it you have used, type</p>
            <p class="para">%quota -v </p>

            <hr>
            
            <h3 class="tutorial-command-title"> df </h3>
            <p> The df command reports on the space left on the file system. For example, to find out how much space is left on the fileserver, type</p>
            <p class="para">%df . </p>
            
            
            <hr>

            <h3 class="tutorial-command-title"> du </h3>
            <p> The du command outputs the number of kilobyes used by each subdirectory. Useful if you have gone over quota and you want to find out which directory has the most files. In your home-directory, type</p>
            <p class="para">%du -s * </p>

            <hr>

            <h3 class="tutorial-command-title"> gzip </h3>
            <p> This reduces the size of a file, thus freeing valuable disk space. For example, type</p>
            <p class="para">%ls -l science.txt </p>

            <p> and note the size of the file using ls -l . Then to compress science.txt, type</p>
            <p class="para">%gzip science.txt</p>

            <p> To expand the file, use the gunzip command.</p>
            <p class="para">%gunzip science.txt.gz</p>

            <hr>

            <h3 class="tutorial-command-title"> zcat </h3>
            <p> file classifies the named files according to the type of data they contain, for example ascii (text), pictures, compressed data, etc.. To report on all files in your home directory, type</p>
            <p class="para">%file *</p>

            <hr>

            <h3 class="tutorial-command-title"> diff </h3>
            <p> This command compares the contents of two files and displays the differences. Suppose you have a file called file1 and you edit some part of it and save it as file2. To see the differences type</p>
            <p class="para">%diff file1 file2 </p>

            <hr>

            <h3 class="tutorial-command-title"> find </h3>
            <p> To search for all fies with the extention .txt, starting at the current directory (.) and working through all sub-directories, then printing the name of the file to the screen, type</p>
            <p class="para">%find .-name "*.txt" -print </p>

            <p> To find files over 1Mb in size, and display the result as a long listing, type</p>
            <p class="para">%find . -size +1M -ls </p>

            <hr>

            <h3 class="tutorial-command-title"> history </h3>
            <p> The C shell keeps an ordered list of all the commands that you have entered. Each command is given a number according to the order it was entered.</p>
            <p class="para">%history (show command history list)</p>
            <p> If you are using the C shell, you can use the exclamation character (!) to recall commands easily.</p>
            <p class="para">%!! (recall last command)</p>
            <p class="para">%!-3 (recall third most recent command)</p>
            <p class="para">%!5 (recall 5th command in list)</p>
            <p class="para">%!grep (recall last command starting with grep)</p>

            <p> You can increase the size of the history buffer by typing</p>
            <p class="para">%set history=100</p>
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
