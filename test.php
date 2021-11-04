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

        foreach ($array as $key => $value) {
            $movieAvangers = array();
            $movieJoker = array();
            $movieBP = array();
            $bpToday = array();
            if ($array[$key]['movieID'] == "1") {
                array_push($movieAvangers, $value);
               
            }
            elseif ($array[$key]['movieID'] == "2") {
                array_push($movieJoker, $value);
            }
            elseif ($array[$key]['movieID'] == "3") {
                array_push($movieBP, $value);
                if ($movieBP['date'] == 'today') {
                    array_push($bpToday, $value);
                }
            }
        }
    ?>

    <input type="hidden" value ="<?php echo $slotId ;?>"  name="slotId">