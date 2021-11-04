<?php 
        @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
        if(mysqli_connect_errno()){
            echo 'Error: Could not connect to database.  Please try again later.';
        exit;
        }

        $query="SELECT * FROM slotTable";
        $result = $db -> query($query);
        $rowNum = $result->num_rows;
        $array = array();
        for ($i=0; $i < $rowNum; $i++){
            $row = $result -> fetch_assoc();
            array_push($array,$row);
        }
        // print_r($array);
        $seatArray = ['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7', 'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7'];
        foreach ($array as $key => $value) {
            // print_r($value);
        
            foreach ($seatArray as $seat) {
                echo $seat."\n";
                $query = "INSERT INTO seatsTable values
                 (null, ".$array[$key]['slotID'].", '".$seat."', 'Yes')";
            $result = $db -> query($query);
            }
        }
        // 
                
        //     }
        // }

            // -- // insert query results
            // -- if ($result) {
            // --     // Get the last index in the log to be assigned the order_id, push order into orders-details
            // --     $queryLastIndex = "SELECT MAX( transID ) FROM `transTable`;";
            // --     // echo $queryLastIndex;
            // --     $lastIndex = $db->query($queryLastIndex);
            // --     $row = $lastIndex->fetch_assoc();
            // --     $lastIndex = $row['MAX( transID )'];
            // --     // echo ( $lastIndex);
            // -- }
            // -- print_r($value);
        
    ?>