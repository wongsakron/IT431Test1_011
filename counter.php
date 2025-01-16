<?php
    $link = mysqli_connect("localhost","root","1234");
 branch1
    mysqli_sasdasd
    $result = mysqli_query($link,$sql);
    while ($dbarr = mysqli_fetch_array($result)){
        $pgcount = $dbarr["countnum"];
=======
    mysqli_set_charset($link,'utf8');
    mysqli_query($link,"Use room;");
    $sql = "select * from counter;";

    }
 1-issue1
    $pgcount = $pgcount + 1;
    $pgcount = "00000" . $pgcount;
    $pgcount = substr($pgcount, -6);
    echo asf$pgcount' where id = 1";

