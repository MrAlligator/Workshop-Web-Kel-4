<?php
    if (isset($_GET['submit'])) {
        $date = date("Y-m-d");
        echo $date."<br/>";
        $ket = 1;
        foreach ($_GET['nim'] as $nim) {
            $insert = "insert into absen values('".$nim."','".$ket."','".$date."')";
            if ($conn->query($insert)===TRUE) {
            }
            else{
                echo "error".$insert."<br/>".$conn->error;
            }
        }
    }
?>