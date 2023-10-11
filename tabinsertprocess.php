<?php
    include 'config.php';

    $tabtype=$_POST['type'];
    $tabimg=$_FILES['img']['name'];

    $image="product/" .$tabimg;

    $sql= mysqli_query($con,"INSERT INTO gallery(image,type)VALUES('$tabimg','$tabtype')");

    if($sql){
        // move_uploaded_file($_FILES['img']['name'],$image);
        move_uploaded_file($_FILES['img']['name'],$image);
        // echo"sucess";
        echo
        "<script>
        alert('add Successfully!');
        window.location.href='tab.php';
        </script>"
        ;
    }else{
        echo"<script>
        alert('something went wrong, please try again later');
        window.location.href='tabinsert.php';
        </script>";
    }

    

   

    // print_r($tabtype);
    // echo"<br/>";
    // print_r($tabimg);

    // $filename=$tabimg['name'];
    // print_r($filename);
    // $fileerror=$tabimg['error'];
    // $filetmp= $tabimg['tmp_name'];

    // $fileext = explode('.',$filename);
    
    // $filecheck = strtolower(end($fileext));

    // $fileextstored = array('png','jpg','jpeg');

    // if(in_array($filecheck,$fileextstored)){
    //     $destination
    // }
?>