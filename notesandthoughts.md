""" if($level>1){
    switch($data[1]){
        case 1:
            if($level == 2){
                register($data[1]);
            }
            if($level == 3){
                firstname($data[1], $data[2]);
            }
            if($level == 4){
                middlename($data[1], $data[2], $data[3]);
            }
            if($level == 5){
                idnumber($data[1], $data[2], $data[3], $data[4]);
            }
            if($level == 6){
                email($data[1], $data[2], $data[3], $data[4], $data[5]);
            }
            break;
        case 2:
            if($level == 2){
                transfer($data[1]);
            }
            if($level == 3){
                amount($data[1], $data[2]);
            }
            if($level == 4){
                pin($data[1], $data[2], $data[3]);
            }
            if($level == 5){
                confirm($data[1], $data[2], $data[3], $data[4]);
            }
            break;
        case 3:
            if($level == 2){
                purchase($data[1]);
            }
            if($level == 3){
                amount($data[1], $data[2]);
            }
            if($level == 4){
                pin($data[1], $data[2], $data[3]);
            }
            if($level == 5){
                confirm($data[1], $data[2], $data[3], $data[4]);
            }
            break;
        case 4:
            if($level == 2){
                checkbalance($data[1]);
            }
            if($level == 3){
                pin($data[1], $data[2], $data[3]);
            }
            break;
        default:
            main_menu();
    }
}
"""