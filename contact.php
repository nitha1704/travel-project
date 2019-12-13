<?php

$mySQLconnectError = "";
$error = "";
$success = "";

if (isset($_POST['name'])) {
    $link = mysqli_connect('localhost', 'id11894231_myprofile_nitha', 'pucker1704', 'id11894231_nithass');

    if (mysqli_connect_error()) {
        $mySQLconnectError = die('Database Connection Error');
    }

    if (!$_POST['name'] || !$_POST['email'] || !$_POST['subject'] || !$_POST['content']) {
        $error = 'All field are required';
    } else {
        $query = "INSERT INTO `user_profile` (`name`,`email`,`subject`,`content`)
            VALUES ('" . mysqli_real_escape_string($link, $_POST['name']) . "',
            '" . mysqli_real_escape_string($link, $_POST['email']) . "',
            '" . mysqli_real_escape_string($link, $_POST['subject']) . "',
            '" . mysqli_real_escape_string($link, $_POST['content']) . "')";

        if (mysqli_query($link, $query)) {
            $success = 'The data was sent, Please wait for investigation. Officer will reply within 1-2 working days';
        } else {
            $error = 'There was a error, Please try again later';
        }
    }
}


?>




<html lang="en">

<head>
    <title>Contact</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="container" style="width:1108px">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="web5.html">Home<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">About</a>
                    <a class="nav-item nav-link" href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 style="text-align:center; margin-bottom:24px; margin-top:50px;">Contact</h1>


        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <hr>

                <div id="alertMessage">
                    <?php
                    if ($mySQLconnectError) {
                        echo '<div class="alert alert-danger" role="alert">'
                            . $mySQLconnectError .
                            '</div>';
                    } else if ($error) {
                        echo '<div class="alert alert-danger" role="alert">'
                            . $error .
                            '</div>';
                    } else if ($success) {
                        echo '<div class="alert alert-success" role="alert">'
                            . $success .
                            '</div>';
                    }
                    ?>
                </div>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"> 
                        <small id="nameError" class="text-danger"></small>                     
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <small id="emailError" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                        <small id="subjectError" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="content">Message</label>
                        <textarea cols="74" rows="5" class="form-control" id="content" name="content"></textarea>
                        <small id="contentError" class="text-danger"></small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>

    </div>












    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



    <script>
        $('document').ready(function(){

            function nameValidate(){
                    if($('#name').val().length > 0){
                        return true;
                    } else {
                        return false;
                    }
                }

                function emailValidate(){
                    var emailValidation = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    if(emailValidation.test($('#email').val())){
                        return true;
                    } else {
                        return false;
                    }
                }

                function subjectValidate(){
                    if($('#subject').val().length > 0){
                        return true;
                    } else {
                        return false;
                    }
                }

                function contentValidate(){
                    if($('#content').val().length > 0){
                        return true;
                    } else {
                        return false;
                    }
                }

                $('#name').keyup(function(){
                    if(nameValidate()){
                        $('#nameError').html('');
                    } else {
                        $('#nameError').html('Please fill in the name');
                    }
                })

                $('#email').keyup(function(){
                    if(emailValidate()){
                        $('#emailError').html('');
                    } else {
                        $('#emailError').html('Email is not validated');
                    }
                })

                $('#subject').keyup(function(){
                    if(subjectValidate()){
                        $('#subjectError').html('');
                    } else {
                        $('#subjectError').html('Please fill in the subject');
                    }
                })

                $('#content').keyup(function(){
                    if(contentValidate()){
                        $('#contentError').html('');
                    } else {
                        $('#contentError').html('Please fill in the content');
                    }
                })

            $('form').submit(function(){

                if(!$('#name').val() || !$('#email').val() || emailValidate() == false || !$('#subject').val() || !$('#content').val()){
                    $('#alertMessage').html('<div class="alert alert-danger" role="alert">All field are required</div>');
                    return false;
                } else if(nameValidate() && emailValidate() && subjectValidate() && contentValidate()) {
                    return true;
                }
            })
        })
    
    
    </script>
</body>

</html>