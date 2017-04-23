<?php 
    
    $emailTo = "fill_in_email";

    $subject = $_POST['subject'];

    $body = $_POST['comment'];

    // setting options for emails important
    $headers = "FROM: ".$_POST['email'];

    if (mail($emailTo, $subject, $body, $headers)) {
        echo "Mail sent successfully";   
    } else {
        echo "Sorry";   
    };
?>


<!-- HTML WOULD GO DOWN BELOW-->

<!DOCTYPE HTML>
<html>
    <head>
        <title>Contact Form</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    </head>

    <body>
        
    <div class="container">
        <h1>Get in Touch!</h1>
        <div class="alert alert-success" id="good" role="alert">
             Your message was sent, we'll get back to you ASAP!
        </div>
        <div class="alert alert-danger" id="bad" role="alert">
        </div>
        <form method="POST">
            <div class="form-group">
                <label for="InputEmail">Email</label>
                <input type="email" class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="Subject">Subject</label>
                <input type="text" class="form-control" id="Subject" name="subject" aria-describedby="Subject">
            </div>
            <div class="form-group">
                <label for="Comments">What would you like to ask us?</label>
                <textarea class="form-control" id="Comments" name="comment" rows="4"></textarea>
            </div>
            <button type="submit" id="Submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

        
        
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
            $(document).ready(function () {

                
                function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
                }
                
                $("#good").hide();
                $("#bad").hide();
                
                $("#Submit").click(function () {
                    var errorMessage = "";
                    var fieldsMissing = "";
                    
                    if ($("#InputEmail").val() === "") {
                        fieldsMissing += "You did not fill out an email address."
                    }
                    
                    if ($("#Subject").val() === "") {
                        fieldsMissing += "You did not fill out a subject."
                    }
                    
                    if ($("#Comments").val() === "") {
                        fieldsMissing += "You did not fill out the Comments section."
                    }
                    
                    if (isEmail($("#InputEmail").val())) {
                       // do nothing
                    } else {
                        errorMessage = "\n Your email is invalid."
                    }
                    
                    if (fieldsMissing === "" && errorMessage === "") {
                        $("#good").show();
                    } else {
                        $("#bad").html(fieldsMissing, errorMessage);
                        $("#bad").show();
                    };
                    
                    
                })
                
                
                
            })
            
        
        </script>
    
    </body>
</html>


<!-- PHP CONTACT FORM:

Challenge:

    Needs:

    Bootstrapped Contact Form. (Done).

    JQuery Form Validation. (Done).

    PHP Server Side Validation. (Done).

    Mini Project Completed on my own. 
    
-->