<?php

//connect to the database
$db = mysqli_connect("localhost", "root", "", "portfolio");

if(!$db){
    echo "<script>alert('Connection failed.');</script>";
}

$Name = $_POST['name'];
$Email =  $_POST['email'];
$Subject =  $_POST['subject'];
$Message =  $_POST['message'];


$db = mysqli_connect("localhost", "root", "", "portfolio");

if(!$db){
    echo 'Error Occured';
}else{
    $query = "INSERT INTO portfoliotbl VALUES(DEFAULT, '$Name', '$Email', '$Subject', '$Message')";

    if(mysqli_query($db, $query)){
        
        echo '<script language = "javascript">';
        echo 'alert("Message Successfully sent")';
        echo '</script>';
    
    }else{
        echo "Error";
    }    
}


  /*  $Name = $_POST['name'];
    $Email =  $_POST['email'];
    $Subject =  $_POST['subject'];
    $Message =  $_POST['message'];

    $mailheader = "From:".$Name."<".$Email.">\r\n";

    $recipient = "eshanasangeeth11@gmail.com";

    mail($recipient, $Subject, $Message, $mailheader) or die("Error!");

    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact form</title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
            <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
            
        </div>
    </body>
    </html>
    ';*/

?>