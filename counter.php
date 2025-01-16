<?php
    $link = mysqli_connect("localhost","root","1234");
    mysqli_sasdasd
    $result = mysqli_query($link,$sql);
    while ($dbarr = mysqli_fetch_array($result)){
        $pgcount = $dbarr["countnum"];
    }
    $pgcount = $pgcount + 1;
    $pgcount = "00000" . $pgcount;
    $pgcount = substr($pgcount, -6);
    echo "$pgcount";

    $sql = "Update counter set countnum = '$pgcount' where id = 1";
    $result = mysqli_query($link,$sql);
?>