<?php 
    // get all form values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $website = $_POST["website"];
    $message = $_POST["message"];

    if(!empty($email) && !empty($message)){// if email and message field is not empty
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){// if user entered email is valid
            $receiver = "humphrey.david.dev@gmail.com";
            $subject = "From: $name <$email>"; // subject of the email.
            // merging concating all user values inside body variable.
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards, \n$name";
            $sender = "From: $email"; // sender email.
            if(mail($receiver, $subject, $body, $sender)){// mail is a inbuilt php function to send email
                echo "Your message has been sent";
            }else {
                echo "Sorry, failed to send your message!";
            }
        }else {
            echo "Enter a valid email address!";
        }

    }else {
        echo "Email and password field is required!";
    }

?>