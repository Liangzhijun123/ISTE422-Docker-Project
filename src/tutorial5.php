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
    <p class="tutorial-header">Tutorial 5 : Security and Processes</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <h2> File System Security</h2>
            <h3 class="tutorial-command-title">% ls -l (l for long listing!) </h3>
            <img src="assets/images/unix.png">
            
            <p>Each file (and directory) has associated access rights, which may be found by typing <span class="para">ls -la </span></p>

            <p class="para">-rwxrw-r-- 1 ee51ab beng95 2919 Sept10 11:01 file1 </p>
            
            <ul>
                <li> The left group of 3 gives the file permissions for the user that owns the file (or directory) (ee51ab in the above example); </li>
                <li>The middle group gives the permissions for the group of people to whom the file (or directory) belongs (eebeng95 in the above example); </li>
                <li> The rightmost group gives the permissions for all others.</li>
            </ul>

            <h3 class="tutorial-command-title">Access Rights on Files</h3>
            <ul>
                <li> <span class="para">r (or -), </span> indicates read permission (or otherwise), that is, the presence or absence of permission to read and copy the file </li>
                <li> <span class="para">w (or -), </span> indicates write permission (or otherwise), that is, the permission (or otherwise) to change a file </li>
                <li> <span class="para">x (or -), </span> indicates execution permission (or otherwise), that is, the permission to execute a file, where appropriate</li>
            </ul>

            <h3 class="tutorial-command-title">Access Rights on Directories</h3>
            <ul>
                <li> <span class="para">r </span> allows users to list files in the directory;</li>
                <li> <span class="para">w </span>  means that users may delete files from the directory or move files into it; </li>
                <li> <span class="para">x </span>  means the right to access files in the directory. This implies that you may read files in the directory provided you have read permission on the individual files.</li>
            </ul>
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title">chmod (changing a file mode) </h3>
            <p> Only the owner of a file can use chmod to change the permissions of a file</p>

            <div class="tutorial4grid">
                <div class="one">
                    <strong>Symbol </strong>
                </div>

                <div class="one">
                  <strong>Meaning</strong>
                </div>

                <div class="para">
                  u
                </div>

                <div class="para">
                  user
                </div>

                <div class="para">
                  g
                </div>

                <div class="para">
                  group
                </div>

                <div class="para">
                  o
                </div>

                <div class="para">
                  other
                </div>

                <div class="para">
                  a
                </div>

                <div class="para">
                  all
                </div>

                <div class="para">
                  r
                </div>

                <div class="para">
                  read
                </div>

                <div class="para">
                  w
                </div>

                <div class="para">
                  write
                </div>

                <div class="para">
                  x (and delete)
                </div>

                <div class="para"> 
                  execute (and access directory)
                </div>

                <div class="para">
                  +
                </div>

                <div class="para">
                 add permission
                </div>

                <div class="para">
                  -
                </div>

                <div class="para">
                  take away permission
                </div>
            </div>

            <p> To give read and write permissions on the file <span class="para">biglist </span>to all</p>
            <i>Ex. % chmod a+rw biglist</i>
        
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title">Processes and Jobs</h3>
            <p class="para"> %ps</p>

            <p> A process is an executing program identified by a unique PID (processidentifier)</p>

            <h3 class="tutorial-command-title"> Running Background Processes</h3>

            <p>To run sleep in background: </p>
            <p class="para"> %sleep 10</p>

            </p>

            <p> This will wait 10 seconds before returning the command prompt %. Until the command prompt is returned, you can do nothing except wait.</p>

            <p class="para"> %sleep 10 &</p>
            <p class="para"> [1] 6259</p>

            <p> The & runs the job in the background and returns the prompt straight away, allowing you do run other programs while waiting for that one to finish.</p>

            <h3 class="tutorial-command-title">Backgrounding a Current Foreground Process</h3>

            <p class="para"> %sleep 1000</p>

            <p class="para"> %bg</p>

        </div>

        
        <div class="grid-color"> 
        <h3 class="tutorial-command-title">Listing Suspended and Background Processes</h3>

        <p>When a process is running, backgrounded or suspended, it will be entered onto a list along with a job number.  </p>
        <p class="para"> %jobs</p>

        <p class="para"> [1] Suspended sleep 1000 <br>
         [2] Running netscape<br>
        [3] Running matlab
        </p>


        <p> To restart (foreground) a suspended processes</p>
        <p class="para"> %fg %jobnumber</p>

        </div>


        <div class="grid-color">
        <h3 class="tutorial-command-title">Kill (Terminate or Signal a Process)</h3>

            <p> To kill a job running in the foreground, type ^C (control c). For example, run</p>
            <p class="para">%sleep 100 <br> ^C</p>

            <p> To kill a suspended or background process, type</p>
            <p class="para">%kill %jobnumber</p>

            <p class="para">%sleep 100 &</p>
            <p class="para">%jobs</p>

            <p> If it is job number 4, type</p>
            <p class="para">%kill %4</p>
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title">ps (Process Status)</h3>

            <p> processes can be killed by finding their process numbers (PIDs) and using kill PID_number</p>
            <p class="para">%sleep 1000 & <br> %ps</p>

            
            <p class="para">PID TT S TIME COMMAND <br>
            20077 pts/5 S 0:05 sleep 1000<br>
            21563 pts/5 T 0:00 netscape<br>
            21873 pts/5 S 0:25 nedit
            </p>
            

            <p> To kill off the process sleep 1000, type</p>
            <p class="para">%kill 20077</p>

            <p> If a process refuses to be killed, uses the -9 option</p>
            <p class="para">%kill -9 20077</p>
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
