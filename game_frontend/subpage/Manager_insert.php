<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in Manager_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Manager_ID  = $_POST['Manager_ID'];
    $T_M_SSID = $_POST['T_M_SSID'];
    $T_Coach_ID = $_POST['T_Coach_ID'];
    $T_Game_ID = $_POST['T_Game_ID'];

    $sql = "INSERT INTO manager (Manager_ID, T_M_SSID, T_Coach_ID, T_Game_ID) 
            VALUES ('$Manager_ID', '$T_M_SSID', '$T_Coach_ID', '$T_Game_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in Manager_insert.php Not Inserted';
    }
    else
    {
        echo 'in Manager_insert.php Inserted';
    }

    header("refresh:2; url = Manager.php");
