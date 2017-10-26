<?php
include_once('../../config/database.php');
$action = isset($_GET['action']) ? $_GET['action']: NULL;
//ACTION CREATE
if($action == 'create_post'){
    /*Basic save*/
    $inputKeys = array();
    $inputValues = array();
    /*Add Datetime NOW*/
    $_POST['post_created_at'] = date("Y-m-d H:i:s");
    /*Push key & value to array for input to DB*/
    foreach($_POST as $key => $value){
        array_push($inputKeys, $key);
        array_push($inputValues, "'".$value."'");
    }
    $inputKeys = implode(",", $inputKeys);
    $inputValues = implode(",", $inputValues);

    /*PREVIEW SQL*/
    // echo "INSERT INTO tb_posts ($inputKeys) VALUES ($inputValues)";

    $q = "INSERT INTO tb_posts ($inputKeys) VALUES ($inputValues)";
    $res = $mysqli->query($q);
    
    if($res){
        header("Location: ../index.php");
    }else{
        echo "Fail to $q";
    }
}

//ACTION UPDATE
if($action == 'edit_post'){
    $edit_id = $_GET['edit_id'];
    $editKeys = array();
    $_POST['post_updated_at'] = date("Y-m-d H:i:s");
    foreach ($_POST as $key => $value) {
        array_push($editKeys, $key."='".$value."'");
    }

    $editKeys = implode(", ", $editKeys);
    /*PREVIEW SQL*/
    // echo "UPDATE tb_posts SET $editKeys WHERE post_id='$edit_id'";
    $q = "UPDATE tb_posts SET $editKeys WHERE post_id='$edit_id'";
    $res = $mysqli->query($q);
    
    if($res){
        header("Location: ../index.php?page=posts/index");
    }else{
        echo "Fail to $q";
    }
}

//ACTION DELETE
if($action == 'delete_post'){
    $delete_id = $_GET['post_id'];

    $q = "DELETE FROM tb_posts WHERE post_id='$delete_id'";
    $res = $mysqli->query($q);
    if($res){
        header("Location: ../index.php?page=posts/index");
    }else{
        echo "Fail to $q";
    }
}