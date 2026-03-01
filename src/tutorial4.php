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
    <p class="tutorial-header"> Tutorial 4 : Wildcards and Manuals</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
        <h2>Wildcard Selectors</h2>
        <hr>
        <h3 class="tutorial-command-title">The * Wildcard</h3>
            
            <p>To list all files in the current directory with 'list....':</p>
            <i>Ex. % ls list*</i>
            
            <p>To list all files in the current directory ending with '...list':</p>
            <i>Ex.  % ls *list </i>
        <hr>
            <h3 class="tutorial-command-title">The ? Wildcard</h3>
            <p>The character '?' will match exactly one character <br> So ?ouse will match files like 'house','mouse', but not 'grouse'</p>
            <i>Ex. % ls ?all (returns hall, mall, tall, etc.)</i>
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title">Filename Conventions</h3>
            <p> Naming files can not use '/' , '&' , '%' </p>

            <div class="tutorial4grid">
                <div class="one">
                    <strong>Good filenames </strong>
                </div>

                <div class="one">
                  <strong>Bad filenames</strong>
                </div>

                <div>
                  project.txt
                </div>

                <div>
                  project
                </div>

                <div>
                  my_big_program.c
                </div>

                <div>
                  my big program.c
                </div>

                <div>
                  fred_dave.doc
                </div>

                <div>
                  fred & dave.doc
                </div>
            </div>

        
        </div>

        <div class="grid-color">
        <h2> Terminal Manuals</h2>
        <hr>
        <h3 class="tutorial-command-title">man wc</h3>
            <p>Find out more about the wc (wordcount) command</p>
   
        <h3 class="tutorial-command-title">whatis wc</h3>
            <p>Gives one-line description of the command, but omits any information about options etc.</p>
            
            <h2>Apropos</h2>
            <hr>
            <h3 class="tutorial-command-title">apropos keyword</h3>  
            <p>When you are not sure of the exact name of a command</p>

            <i>Ex. % apropos copy</i>

        </div>

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
