<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/header.php';
?>
<body class="tutorial-body">
<?php
  $path='./';
  $page='Roasted Duck';
  include $path . 'assets/inc/nav.php';
?>

<div> 

    <h1 class="intro-title"> UNIX Introduction<h1>

    <div class="info-flex-container">
        <div class="info-section">
            <p class="tutorial-command-title">What is UNIX? </p>
            <p class="intro-info"> Unix is an operating system that acts as an intermediary between a computer's hardware and its software applications. It provides a set of tools and services to 
                manage and execute programs, handle files, and facilitate communication between different components of a computer system. Unix is known for its simplicity, modularity, and powerful
                 command-line interface, allowing users to interact with the system through text commands. It was developed in the late 1960s and has since influenced the design of many other operating systems.</p>
        </div>

        <div class="info-section">
            <p class="tutorial-command-title">Why use UNIX? </p>
            <p class="intro-info">Use Unix for its stability, security, and flexibility. It supports multiple users, has a powerful command-line interface, excels in networking, and offers excellent 
                performance. With a large supportive community and portability, Unix is a reliable choice for diverse computing needs.</p>
        </div>

        <div class="info-section">
            <p class="tutorial-command-title">How to use UNIX? </p>
            <p class="intro-info"> To start using UNIX, begin by opening the terminal or command prompt. This is where you'll interact with UNIX through text commands. 
                Explore gradually, trying basic commands and using 'man' for more information. As you become more familiar, experiment with additional commands and functionalities.</p>
        </div>
    </div>

    <hr>

    <h1 class="intro-subtitle"> The UNIX Operating System</h1> 
    <br>
    <div class="info-flex-container"> 
        <div>
            <img src="assets/images/kernel.png" class="intro-photo"> 
            <p><a href="https://www.pearsonhighered.com/assets/samplechapter/0/1/3/0/0130187062.pdf" target="_blank"> @ Credit the image </a> </p>
            <p class="caption"> The Kernel</p>
        </div>

        <div>
            <img src="assets/images/shell.png" width="460px" height="340px" class="intro-photo"> 
            <p><a href="https://en.wikipedia.org/wiki/Version_6_Unix" target="_blank"> @ Credit the image </a> </p>
            <p class="caption"> The Shell</p>
        </div>

        <div>
            <img src="assets/images/directory_structure.png" width="460px" height="340px" class="intro-photo"> 
            <p><a href="https://faculty.cs.niu.edu/~mcmahon/CS241/Notes/Unix_Reference/file_structure.html" target="_blank"> @ Credit the image </a> </p>
            <p class="caption"> The Directory Structure</p>
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
