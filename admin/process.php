<?php
require_once "session.php";

if(isset($_POST["action"]) && $_POST["action"]=="add_note"){
    $title = $cuser->clear_input($_POST["title"]);
    $note = $cuser->clear_input($_POST["note"]);

    if($cuser->add_new_note($cid,$title,$note)){
        echo $cuser->showMessage("success","Not Eklendi..");
    }else{
        echo $cuser->showMessage("danger","Hata var..");
    }
}

?>