<?php
if(isset($_POST['btn'])){//post
    require '../connection.php';
     
    $errMsg = "";

    
    if(!empty($_POST['title'])){
        $title = $_POST['title'];
    } else {
        $errMsg .= 'Title fieled is required.';
    }

    if(!empty($_POST['post'])){
        $post = (addslashes(htmlentities($_POST['post'])));
    } else {
        $errMsg .= 'Post field is required.';
    }


    


    //Upload file
    $uploadedFile = '';
    $uploadDirImage = '../images/';
    if (!empty($_FILES["img"]["name"])) {

        $time = time(); //this current time will rename user file img with current time so that each of the image file will have a unique name

        //file path configuration
        $fileName = basename($_FILES["img"]["name"]);
        $img_random = $time . $fileName;
        $targetFilePath = $uploadDirImage . $img_random;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

       

        //allow certain file formats
        $allowTypes = array('jpg','png','jpeg','svg','docx','doc','pdf','SVG','DOCX','DOC','PDF','JPG','PNG','JPEG');
        if(in_array($fileType, $allowTypes)){

            //upload file to the link
            if(move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)){
                $uploadedFile = $link->real_escape_string($img_random);
            }else{
                $errMsg.= 'Sorry! There was an error uploading image file.';
            }
        }else{
            $errMsg.= 'Sorry! only JPG, PNG, JPEG, SVG, DOCX, PDF, DOC files are allowed to upload';
        }
        

        if($errMsg == ""){
            $res = $link->query('INSERT INTO blog (title, post, file) VALUES ("'.$title.'", "'.$post.'", "'.$img_random.'")');
            // echo '<div class="">' . mysqli_error($link) . '</div>';
            $inserted = $link->affected_rows;
    
            if($inserted){   
    
               echo 200;
    
            } else {
                echo 501;
            }  
        }else {
            echo $errMsg;

        }

       
    }else {

        if($errMsg == ""){
            $res = $link->query('INSERT INTO blog (title, post) VALUES ("'.$title.'", "'.$post.'")');
            // echo '<div class="">' . mysqli_error($link) . '</div>';
            $inserted = $link->affected_rows;
    
            if($inserted){   
    
                echo 200;
    
            } else {
                echo 501;
            }  
        }else {
            echo $errMsg;

        }

     
    }

}