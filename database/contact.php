<?php
    include('index.php');
    // Taking all values from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subjects = $_POST['subjects'];
    $message = $_POST['message'];
    if(isset($_POST['submit'])){
    // Performing insert query execution
    // here our table name is contact
        $query = "INSERT INTO contact(firstname,lastname,email,phone,subject,message)VALUES('$fname','$lname','$email','$phone','$subjects','$message')";
        $result=mysqli_query($conn,$query);
        if($result){
                echo '<script type="text/javascript">';
    		  //  echo 'alert("Your record has been inserted successfully");';
    		  //  echo 'alert("Mail Sent");';
    		    echo 'window.location.href = "https://meliora.org.in/thank-you.php";';
    		    echo '</script>';
    		}
    		else{
    		    echo '<script type="text/javascript">';
    // 			echo 'alert("Error Please try again");';
    			echo 'window.location.href = "https://meliora.org.in/error.php";';
    		    echo '</script>';
    		}
    }
    
    $to = "enquiry@meliora.org.in, vishalkaushal.finndit@gmail.com";
    $subject = $_POST['fname'] ;
    $message = "First Name: ".$_POST['fname']."\r\n";
    $message1 = "Last Name: ".$_POST['lname']."\r\n";
    $message2 = "Email: ".$_POST['email']."\r\n";
    $message3 = "Phone: ".$_POST['phone']."\r\n";
    $message4 = "Phone: ".$_POST['subjects']."\r\n";
    $message5 = "Message: ".$_POST['message'];
    $message .= $message1 .= $message2 .= $message3 .= $message4.= $message5;
    $from = $_POST['fname'];
    $headers = "From:".$_POST['fname'];
    if(isset($_POST['submit'])){
        if(mail($to,$subject,$message,$headers)){
            echo "Mail Sent";
        }
        else{
            "Email Failed";
        }
    }
?>