<?php
$conn = mysqli_connect(HOST, USER, PASS, DATABASE);
mysqli_set_charset($conn,"utf8");

function select($sql) {
    global $conn;
    $result = mysqli_query($conn, 'select '.$sql);
    if (mysqli_num_rows($result)):
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    endif;
    return null;
}

function save($table, Array $array, $id = null) {
    global $conn;

    if ((int)$id != null ):
        $sql = "update $table set ";
        foreach ($array as $key => $value){
            $sql .= "$key = '$value', ";
        }
        $sql = rtrim($sql ,' ,');
        $sql .= " where id = {$id}";
    else:
        $keys = array_keys($array);
        $values = array_values($array);
        $keys =     implode(',',$keys);
        $vString = '"';
        $vString .= implode('","',$values);
        $vString .= '"';
        $sql = "insert into $table (id, " .$keys . ") values ( null," . $vString . ")";
    endif;

    echo $sql;
    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);
}

function del ($table, $id = ''){
    global $conn;
    $sql = "delete from $table where id = '$id'";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}


function delWhere($array){
    global $conn;
    $sql = "delete from pages where";
    foreach ($array as $key => $value):
        $sql .= " $key = '$value'";
    endforeach;
//    echo $sql;
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

// =. კონკატენაცია;
/*
 * array_keys($array) აბრუნებს ასოციაციური მასივის სახელებს
 * array_values($array) აბრუნებს ასოციაციური მასივის მნიშვნელობებს
 */





?>