<?php 

header("content-type: text/plain");
include("connection.php");
include("functions.php");

// $session_id = $_POST['sessionId'];
// $service_code = $_POST['serviceCode'];

$phone = $_GET['phoneNumber'];
$text = $_GET['text'];

///1.register 2.firstname 3.middlename 4.idnummber 5.email
/// array

$data = explode("*", $text);

$level = 0;
$level = count($data);

echo $level . " ";

if($level == 0 || $level == 1){
    main_menu();
}

if($level>1){
    switch($data[1]){
        case 1:
            customer_register();

            break;

        case 2:
             transfer();

            break;
        case 3:
            purchase();

            break;
        case 4:
            check_balance();

            break;

        default:
        $text = "Invalid text input\n Insert a valid menu option";
            ussd_stop();
    }
}

?>