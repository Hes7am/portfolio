<?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $message = $_POST["message"];
                
                    $to = "hesham_20130@yahoo.com"; 
                
                    $subject = "Nieuw bericht van $name";
                    $headers = "From: $email";
                
                    if (mail($to, $subject, $message, $headers)) {
                        echo "Bericht succesvol verzonden. Bedankt!";
                    } else {
                        echo "Er is een fout opgetreden bij het verzenden van het bericht. Probeer het later opnieuw.";
                    }
                }
                ?>