<?php
    include('index.php');
    // Taking all values from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];
    if(isset($_POST['submit'])){
    // Performing insert query execution
    // here our table name is appointment
        $query = "INSERT INTO appointment(firstname,lastname,email,phone,date,time,message)VALUES('$fname','$lname','$email','$phone','$date','$time','$message')";
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
    $message4 = "Message: ".$_POST['message'];
    $message .= $message1 .= $message2 .= $message3 .= $message4;
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