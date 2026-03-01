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
    <p class="tutorial-header"> Tutorial 2 : File Systems and File Contents</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <h2>Copying Files</h2>
        <hr>
            <h3 class="tutorial-command-title"> cp (copy) </h3>

            <li>The cp command makes a copy of a given file in the current working directory and names the copy whatever name is given.</li>

            <li>cp {original_file} {new_file_name}</li>

            <br>
            <i>Ex. % cp /home/SAMPLES/example.txt </i>


        </div>

        <div class="grid-color">
            <h2> Moving Files and directory </h2>
        <hr>
            <h3 class="tutorial-command-title">rm (remove), rmdir (remove directory)</h3>

            <li>To delete (remove) a file, use the rm command. As an example, we are going to create a copy of the science.txt file then delete it.</li>


            <br>
            <i>Ex. % rm example.txt</i>

        </div>

        <div class="grid-color">
            <h2>Displaying the Contents of a File on the Screen </h2>
        <hr>
            <h3 class="tutorial-command-title">clear</h3>
            <li>Clears all text and leave you with the '%' prompt at the top of window</li>
            <br>
            <i>Ex. % clear</i>
        <hr>

            <h3 class="tutorial-command-title">cat</h3>
            <li>The 'cat' command can be used to display the contents of a file on the screen</li>
            <br>
            <i>Ex. % cat example.txt</i>
        <hr>
            <h3 class="tutorial-command-title">less</h3>
            <li>The 'less' command writes the contents of a file onto the screen a page at a time</li>
            <br>
            <i>% less example.txt</i>
        <hr>
            <h3 class="tutorial-command-title">head</h3>
            <li>The 'head' command writes the first ten lines of a file to the screen</li>
            <br>
            <i>Ex. % head -5 example.txt</i>
        <hr>
            <h3 class="tutorial-command-title">tail</h3>
                <li>The 'tail' command writes the last ten lines of a file to the screen</li>
                <br>
                <i>Ex. % tail 10 example.txt</i>

        </div>

        <div class="grid-color">
            <h2>Searching the Contents of a File </h2>
        <hr>
            <h3 class="tutorial-command-title">Search using 'less' command</h3>
            <li>You can search through a text file for a keyword (pattern)</li>
            <br>
            <i>Ex. % less example.txt</i>
        <hr>
            <h3 class="tutorial-command-title">Search using the 'grep' command</h3>
            <p>You can search through a text file for a keyword (pattern)</p>
            <ul>
                <li>'-c' prints a count of the lines that match the given pattern</li>
                <li>'-h' prints the lines in files that match the pattern, but not the file names</li>
                <li>'-i' ignores case for matching</li>
                <li>'-l' prints the filenames that contain matching patterns</li>
                <li>'-namespace' prints the matched lines and the line numbers</li>
                <li>'-v' prints the lines that does not match the given pattern</li>
            </ul>
            <br>
            <i>Ex. % grep -i science example.txt</i>

        <hr>
            <h3 class="tutorial-command-title">Word Count Command</h3>
            <li>You can use 'wc' to find the word count of a file</li>
            <br>
            <ul>
                <li>'-l' prints the amount of lines</li>
            </ul>
            <i>Ex1. % wc -w example.txt</i>
            <br>
            <i>Ex2. % wc -l example.txt</i>

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
