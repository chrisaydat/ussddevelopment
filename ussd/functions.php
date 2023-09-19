<?php 

function main_menu(){
    $text = "Welcome to Dyrect.\n please enter a Number to continue\n 1. Register\n 2. Transfer\n 3. Purchase\n 4. Check Balance\n";
   
    ussd_proceed($text);
}



function customer_register($data){
    if (count($data) == 2) {
        $text = "Please enter your first name";
        ussd_proceed($text);
}
    if (count($data) == 3) {
        $text = "Please enter your middle name";
        ussd_proceed($text);

    }
    if (count($data) == 4) {
        $text = "Please enter your last name";
        ussd_proceed($text);

    }
    if (count($data) == 5) {
        $text = "Please enter your ID number";
        ussd_proceed($text);

    }

    if (count($data) == 6) {
        $text = "Please enter your email";
        ussd_proceed($text);

    }
    if (count($data) == 7) {
        $text = "Please enter your TIN number";
        ussd_proceed($text);

    }
    if (count($data) == 8) {
        $text = "Please enter your password";
        ussd_proceed($text);

    }
    if (count($data) == 9) {
        $text = "Please confirm your password";
        ussd_proceed($text);

    }
    if (count($data) == 10) {
        $phone = $_GET['phoneNumber'];
        $firstname = $data[2];
        $middlename = $data[3];
        $lastname = $data[4];
        $idnumber = $data[5];
        $email = $data[6];
        $tinnumber = $data[7];
        $password = $data[8];
        $confirmpassword = $data[9];

        $text = "Thank you for registering with Dyrect today\nfirstname $firstname. Your account has been created successfully";

    }
}

    

function transfer(){
    $text = "Please enter the amount you want to transfer";
    ussd_proceed($text);
}

function purchase(){
    $text = "Please enter the amount";
    ussd_proceed($text);
}

function check_balance(){
    $text = "Your balance is GHs 1000";
    ussd_stop($text);
}



function ussd_proceed($text){
    echo "CON $text";
    exit(0);
}

function ussd_stop($text){
    echo "END $text";
    exit(0);
}


?>