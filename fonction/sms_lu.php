<?php

    global $dd;
    
    $req = $dd->prepare("SELECT * FROM messages WHERE lu = 0");
    $req->execute();
    
    echo $req->rowCount();
?>