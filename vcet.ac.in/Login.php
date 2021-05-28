<?php include 'sendemail.php'; ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
        <link rel="stylesheet" href="button_style.css">
        <!-- <script src="rightclick_disable.js.download"></script> -->
        <title>vcet.ac.in/vcetattandance/Login.php</title>
        <link rel="icon" href="logo.png" type="image/gif" />
<style type="text/css">

body {
	color: #FFFFFF;background-color: #663366;
}
table {
    text-align: center;
    border: 5px solid cyan;
    padding: 5px;
    margin: auto;
}
.style1 {
    color: #FFFF00;
    text-align : center;
    }
.style2 {
    color: #00FF00;
    text-align : center;
    }

</style>

</head>

<body style="font:bold">
 
 <?php echo $alert;?>
   
<form action=""  method="post"><br><br>
<h1 class="style1">VELAMMAL COLLEGE OF ENGINEERING AND TECHNOLOGY</h1><br>
<h1 class="style2">Students Attendance and Performance Management System</h1>
<br><p>
<table  cellspacing="20">
<tbody><tr><td><label> <strong> User Name </strong> </label></td>  
                        <td><input name="name" type="text" size="30" maxlength="30" autofocus="" required></td></tr>
<tr><td><label><strong>Password </strong> </label> </td>   <td><input name="password" type="password" size="30" maxlength="30" required></td></tr>
</tbody></table>
</p><div><input name="submit" type="submit" value="Sign In" class="send-btn"></div><p></p>
<br><br><br><br>
<h3><p style ="text-align:right;">Developed &amp; Maintained by Department of Information Technology</p></h3>
</form>

<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>

</html>