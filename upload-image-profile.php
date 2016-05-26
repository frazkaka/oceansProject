<?php
 if(isset($_FILES["image_upload"]["name"]))
 {
      $name = $_FILES["image_upload"]["name"];
      $size = $_FILES["image_upload"]["size"];
			$tmp = explode('.', $name);
			$ext = strtolower(end($tmp));
      $allowed_ext = array("png", "jpg", "jpeg");
      $maxsize = 1050000;
      if(in_array($ext, $allowed_ext))
      {
           if($size < ($maxsize))
           {
                $new_image = '';
                $new_name = md5(rand()) . '.' . $ext;
                $path = 'uploads/users/' . $new_name;
                list($width, $height) = getimagesize($_FILES["image_upload"]["tmp_name"]);
                if($ext == 'png')
                {
                     $new_image = imagecreatefrompng($_FILES["image_upload"]["tmp_name"]);
                }
                if($ext == 'jpg' || $ext == 'jpeg')
                {
                     $new_image = imagecreatefromjpeg($_FILES["image_upload"]["tmp_name"]);
                }
                $new_width = 250;
                // $new_height = ($height/$width)*$new_width;
                $new_height = 250;
                $tmp_image = imagecreatetruecolor($new_width, $new_height);
                imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                imagejpeg($tmp_image, $path, 100);
                imagedestroy($new_image);
                imagedestroy($tmp_image);
                echo '<img src="'.$path.'" class="center-block img-circle img-thumbnail img-responsive" />';

								session_start();
								$_SESSION['profileImage']=$path;
           }
           else
           {
                echo 'Bild måse vara mindre än 1 MB.';
           }
      }
      else
      {
           echo 'Fel filformat, tillåtna format är: jpg, png, jpeg.';
      }
 }
 else
 {
      echo 'Vänligen välj en bild att ladda upp';
 }
 ?>
