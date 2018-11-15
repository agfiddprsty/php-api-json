<?php

require_once 'konek.php';

if (isset($_GET['apicall'])){

    switch($_GET['apicall']){
        case 'api':
            $true = 'true';
            $success = 'Show data user success';
            $codesc = '200';

            $sql = "SELECT * FROM user";

            $r = mysqli_query ($link, $sql);

            $result = array ();

            while($row = mysqli_fetch_array($r)){

                array_push($result,array(
                    "id" => $row['id'],
                    "username" => $row['username'],
                    "password" => $row['password'],
                    "level" => $row['level'],
                    "fullname" => $row['fullname'],
                ));
            }

            echo json_encode(array(
                'success' => $true,
                'data' => $result,
                'message' => $success,
                'code' => $codesc
            ));
    }
}else{

    $id = $_GET['id'];

    $true = 'true';
    $success = 'Show data user sucess';
    $codesc = '200';
    $coderr = '204';
    $error = 'Data user not found';

    $sql = "SELECT * FROM user WHERE id=$id";

    $r = mysqli_query($link,$sql);

    $result = array();
    $row = mysqli_fetch_array($r);
    array_push($result,array(
        "id" => $row['id'],
        "username" => $row['username'],
        "password" => $row['password'],
        "level" => $row['level'],
        "fullname" => $row['fullname'],
    ));

    if($id<10){
        echo json_encode(array(
            'success' => $true,
            'data' => $result,
            'message' => $success,
            'code' => $codesc
        ));
    }else{
        echo json_encode(array(
            'success' => $true,
            'data' => array(),
            'message' => $error,
            'code' => $coderr
        ));
    }
}
?>