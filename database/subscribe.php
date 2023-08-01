<?php
    include('index.php');
    $email = $_POST['email'];
    if(isset($_POST['submit'])){
    // Performing insert query execution
    // here our table name is contact
        $query = "INSERT INTO subscribe(email)VALUES('$email')";
        $result=mysqli_query($conn,$query);
        if($result){
                echo '<script type="text/javascript">';
    		    echo 'alert("Thanks for subscribing");';
    		    echo 'alert("Your record has been inserted successfully");';
    		    echo 'window.location.href = "https://meliora.org.in/";';
    		    echo '</script>';
    		}
    		else{
    		    echo '<script type="text/javascript">';
    			echo 'alert("Error Please try again");';
    			echo 'window.location.href = "https://meliora.org.in/";';
    		    echo '</script>';
    		}
    }
    
    // $to = "";
    // $subject = $_POST['name'] ;
    // $message = "Email: ".$_POST['email'];
    // $from = $_POST['name'];
    // $headers = "From:".$_POST['name'];
    // if(isset($_POST['submit'])){
    //     if(mail($to,$subject,$message,$headers)){
    //         echo "Mail Sent";
    //     }
    //     else{
    //         "Email Failed";
    //     }
    // }
?>