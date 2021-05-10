<html>
    <head>
        <title>Darqor email Submission</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function myFunction(){
                swal({
                title: "message sent!",
                text: "You have registered with our mailing list for exclusive deals and promos.",
                icon: "success",
                }).then(function() {
                    window.location = "index.html";
                });
            
            }
        </script> 
    </head>
    <body>
    <?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    // $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    // $message = $_POST['message'];

    $mailTo = "hello@darqor.com";
    $headers = "From: ".$mailFrom;
    $txt ="You have received an email from ".$name.".\n\n";

     mail($mailTo, $txt, $headers);
     //header("Location: index.php?mailsend");
    echo "<script type='text/javascript'>myFunction()</script>";

 
       
}
?>

    </body>
</html>

