<?php


error_reporting(0);
$msg="";
if(isset($_POST['submit'])){

$to="abboudisara4@gmail.com";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
 
$msgBody ='Name : '.$name.' has wrriten you : '.$message;
$headers ='from:'.$email;
$secretKey ="6Lekm8IZAAAAAET3RWfdYeWGG700Z8sJ0uA0zVb_";
$responseKey =$_POST['g-recaptcha-response'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey"; 
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactez moi</title>
     <!--  Bootstrap css file  -->
     <link rel="stylesheet" href="./css/bootstrap.min.css">

<!--  font awesome icons  -->
<link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
    
<form action="<?= $SERVER['PHP_SELF'] ?>" method="POST">

<section class="subscribe-us-area" id="Contactez moi">
    <div class="container subscribe">
        <div class="row">
            <div class="col-lg-12 text-center subscribe-title">
                <h4 class="text-uppercase">Obtenez des mises à jour de n'importe où</h4>
                <p class="para">Tu peux aussi me contacter</p>
            </div>
        </div>
        <div class="d-sm-flex justify-content-center">
            <form class="w-50">
                <div class="row d-flex flex-row flex-wrap">
                    <div class="col input-textbox">
                        <input name="name" type="text" id="txtemail" class="form-control" placeholder="Name">
                    </div>
                    <div class="col input-textbox">
                        <input  name="email" type="text" id="txtemail" class="form-control" placeholder="Email">
                    </div>
                    <div class="col input-textbox">
                        <input name="message" type="<textarea rows="" cols="" placeholder="Message"></textarea>
                      
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lekm8IZAAAAAJNLJLDXEQ9lObW_r3KSim9Shxpd"></div>
                
                    <div class="col">
                        <div class="btn-submit">
                            <button type="submit" Name="submit" class="btn btn-success float-right">Envoyer</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</form>
</body>
</html> -->