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
    <p class="tutorial-header"> Tutorial 7 : External Software</p>

    <div class="tutorial3-grid">
        <div class="grid-color">
            <h1>Compiling UNIX Software Packages</h1>

            
            <p> There are a number of steps needed to install the software.</p>

            <ul>
                <li>Locate and download the source code (which is usually compressed)</li>
                <li>Unpack the source code</li>
                <li>Compile the code</li>
                <li>Install the resulting executable</li>
                <li>Set paths to the installation directory</li>
            </ul>
            

            
            <h3 class="tutorial-command-title"> Compiling Source Code </h3>
            <p> All high-level language code must be converted into a form the computer understands. For example, C language source code is converted into a lower-level language called assembly language. The assembly language code made by the previous stage is then converted into object code which are fragments of code which the computer understands directly. The final stage in compiling a program involves linking the object code to code libraries which contain certain built-in functions. This final stage produces an executable program.</p>
            
            <p> To do all these steps by hand is complicated and beyond the capability of the ordinary user. A number of utilities and tools have been developed for programmers and end-users to simplify these steps.</p>
            

            <h3 class="tutorial-command-title"> Make and the Makefile </h3>
            <p> The <strong>make </strong>command allows programmers to manage large programs or groups of programs. It aids in developing large programs by keeping track of which portions of the entire program have been changed, compiling only those parts of the program which have changed since the last compile.</p>

            <p> The<strong> make </strong>program gets its set of compile rules from a text file called <strong>Makefile</strong> which resides in the same directory as the source files. It contains information on how to compile the software, e.g. the optimisation level, whether to include debugging info in the executable. It also contains information on where to install the finished compiled binaries (executables), manual pages, data files, dependent library files, configuration files, etc.</p>

            <p> Some packages require you to edit the Makefile by hand to set the final installation directory and any other parameters. However, many packages are now being distributed with the GNU configure utility.</p>

            <h3 class="tutorial-command-title"> configure </h3>
            <p> As the number of UNIX variants increased, it became harder to write programs which could run on all variants. Developers frequently did not have access to every system, and the characteristics of some systems changed from version to version. The GNU configure and build system simplifies the building of programs distributed as source code. All programs are built using a simple, standardised, two step process. The program builder need not install any special tools in order to build the program.</p>

            <p> The <strong><span class="para">configure</span></strong> shell script attempts to guess correct values for various system-dependent variables used during compilation. It uses those values to create a <strong>Makefile </strong>in each directory of the package.</p>

            <p> The simplest way to compile a package is:</p>

            <ol>

                <li> <strong><span class="para">cd </span></strong>to the directory containing the package's source code.</li>
                <li> Type <strong><span class="para">./configure </span></strong>to configure the package for your system.</li>
                <li> Type <strong><span class="para">make</span></strong> to compile the package.</li>
                <li> Optionally, type <strong><span class="para">make check </span></strong>to run any self-tests that come with the package.</li>
                <li> Type <strong><span class="para">make install </span></strong>to install the programs and any data files and documentation.</li>
                <li> Optionally, type <strong><span class="para">make clean </span></strong>to remove the program binaries and object files from the source code directory  </li>

            </ol>

            
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title">Downloading Source Code</h3>
            <p> <strong> </strong></p>
            <p> First create a download directory </p>
            <p class="para"> %mkdir download</p>
            
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title">Extracting the Source Code</h3>
            <p> <strong> </strong></p>
            <p> As you can see, the filename ends in tar.gz. The tar command turns several files and directories into one single tar file. This is then compressed using the gzip command (to create a tar.gz file).</p>
            <p class="para"> %cd download <br> %ls -l</p>
            
            <p>First unzip the file using the gunzip command. This will create a .tar file.  </p>

            <p class="para"> %cd download <br> %gunzip units-l.74.tar.gz</p>

            <p>Then extract the contents of the tar file.   </p>

            <p class="para"> %tar -xvf units-l.74.tar</p>

            <p>Again, list the contents of the download directory, then go to the units-1.74 sub-directory.   </p>

            <p class="para"> %cd units-l.74</p>
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title"> Configuring and Creating the Makefile </h3>
            <p> The units package uses the GNU configure system to compile the source code. We will need to specify the installation directory, since the default will be the main system area which you will not have write permissions for. We need to create an install directory in your home directory.   </p>
            <p class="para"> %mkdir ~/units174</p>

            <p>Then run the configure utility setting the installation path to this.  </p>
            <p class="para"> %./configure --prefix=$HOME/units174</p>
            
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title"> Building the Package </h3>
            <p> Now you can go ahead and build the package by running the make command.  </p>
            <p class="para"> %make</p>
            <p> After a minute or two (depending on the speed of the computer), the executables will be created. You can check to see everything compiled successfully by typing  </p>
            <p class="para"> %make check</p>
            <p> If everything is okay, you can now install the package.   </p>
            <p class="para"> %make install</p>
            
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title"> Running the Software </h3>
            <p> Assuming everything running </p>
            <p class="para"> %cd ~.units174</p>

            <div class="tutorial4grid">
                <div class="para">
                    bin
                </div>

                <div>
                    The binary executables
                </div>

                <div class="para">
                    info
                </div>

                <div>
                    GNU info formatted documentation
                </div>

                <div class="para">
                    man
                </div>

                <div>
                    Man pages
                </div>

                <div class="para">
                    share
                </div>

                <div>
                    Shared data files
                </div>

               
            </div>
            
            <p> To run the program, change to the bin directory and type </p>
            <p class="para"> %./units</p>

            <p> To read the full documentation, change into the info directory and type </p>
            <p class="para"> %info --file=units.info</p>
        </div>

        <div class="grid-color">
        <h3 class="tutorial-command-title"> Stripping Unneccesary Code </h3>
            <p> What we are going to do is look at the before and after size of the binary file. First change into the bin directory of the units installation directory. </p>
            
            <p class="para"> %cd ~/units174/bin <br> %ls -l</p>

            <p>As you can see, the file is over 100 kbytes in size. You can get more information on the type of file by using the file command.  </p>

            <p class="para"> %file units</p>

            <p class="para"> units: ELF 32-bit LSB executable, Intel 80386, version 1, dynamically linked (uses shared libs), not stripped</p>

            <p> To strip all the debug and line numbering information out of the binary file, use the strip command </p>

            <p class="para"> $strip units <br> %ls -l</p>

            <p> As you can see, the file is now 36 kbytes - a third of its original size. Two thirds of the binary file was debug code!!!

            Check the file information again.</p>

            <p class="para"> $file units</p>

            <p class="para"> units: ELF 32-bit LSB executable, Intel 80386, version 1, dynamically linked (uses shared libs), stripped</p>

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
