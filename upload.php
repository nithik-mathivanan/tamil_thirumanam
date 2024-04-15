<?php

session_start();


$servername = "127.0.0.1";
$username = "root";
$db_password = "";
$dbname = "matrimony";

$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT MAX(reg_id) FROM personal_info_five";

  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  $last_inserted_id = $row['MAX(reg_id)'];

  if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";
  } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

if(isset($_POST["file_upload"])) {

  if(!file_exists("uploads/".$last_inserted_id."/")) {
    mkdir("uploads/".$last_inserted_id."/");
  }

  $target_dir = "uploads/".$last_inserted_id."/";


  $error=array();
  $extension=array("jpeg","jpg","png","gif","bmp");

  $conn = mysqli_connect($servername, $username, $db_password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql2 = "SELECT COUNT(*) FROM upload_files WHERE file_data LIKE 'uploads/".$last_inserted_id."%'";

  $result = mysqli_query($conn, $sql2);

  $row = mysqli_fetch_assoc($result);

  $imageCount = $row['COUNT(*)'];

  if($imageCount == 3) {
    echo "first";
    $message = array();
    array_push($message, "You have uploaded 3 images already");
    echo '<pre>';
    print_r($message);
    echo '</pre>';
  } else {
    $message = array();
    foreach($_FILES["fileToUpload"]["tmp_name"] as $key=>$tmp_name) {
      $file_name=$_FILES["fileToUpload"]["name"][$key];
      $file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key];
      $ext=pathinfo($file_name,PATHINFO_EXTENSION);
  
      if(in_array($ext,$extension)) {
          if(file_exists("uploads/".$last_inserted_id."/".$file_name)) {
              array_push($error,$file_name.' already exists');
              print_r($error);
          }
          else {
              if($imageCount == 3) {
              echo "second";
              array_push($message, "You have uploaded 3 images already");
              echo '<pre>';
              print_r($message);
              echo '</pre>';
              } else {
                if(move_uploaded_file($file_tmp=$_FILES["fileToUpload"]["tmp_name"][$key],$target_dir.$file_name)) {
                
                  $conn = mysqli_connect($servername, $username, $db_password, $dbname);
    
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
              
                $sql2 = "SELECT COUNT(*) FROM upload_files WHERE file_data LIKE 'uploads/".$last_inserted_id."%'";
  
                $result = mysqli_query($conn, $sql2);
  
                $row = mysqli_fetch_assoc($result);
  
                $imageCount = $row['COUNT(*)'];
  
                if($imageCount >= 3) {
                  echo "third";
                  array_push($message, "You have uploaded 3 images already");
                  echo '<pre>';
                  print_r($message);
                  echo '</pre>';
                } else {
                  $sql = "INSERT INTO upload_files (file_data) VALUES ('$target_dir$file_name')";
                  $_SESSION['uploaded'] = 'yes';
                }
               
                if (mysqli_query($conn, $sql)) {
                // echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
    
                mysqli_close($conn);
              }
              }
          }
      }
      else {
          array_push($error,"$file_name, ");
      }
    }
  }
  
  $_SESSION['upload_error'] = $error;
  $_SESSION['upload_message'] = $message;
}

  
    // foreach ($_FILES['fileToUpload']['tmp_name'] as $key => $value) {
      
    //   $target_file = $target_dir . basename($_FILES['fileToUpload']['name'][$key]);
    //   $ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //   if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
    //      echo "Only upload image files";
    //   } else {
    //     $file_name = $_FILES['fileToUpload']['name'][$key];
    //     $file_tmp = $_FILES['fileToUpload']['tmp_name'][$key];
    //   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key], $target_file)) {
    //     echo "The file ". htmlspecialchars($_FILES["fileToUpload"]["name"][$key]). " has been uploaded.";


    //     $conn = mysqli_connect($servername, $username, $db_password, $dbname);
    //   if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    //   }
  
    //   $sql = "INSERT INTO upload_files (file_data) VALUES ('$target_file')";

    //   if (mysqli_query($conn, $sql)) {
    //   // echo "New record created successfully";
    //   } else {
    //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //   }

    //   mysqli_close($conn);
    //   } else {
    //     echo "Sorry, there was an error uploading your file.";
    //   }
    //   }
    // }
  

// mkdir("uploads/".$last_inserted_id."/");

// $target_dir = "uploads/".$last_inserted_id."/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";


//   $conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
  // if (!$conn) {
  //   die("Connection failed: " . mysqli_connect_error());
  // }
  
  // $sql = "INSERT INTO upload_files (file_data) VALUES ('$target_file')";

  // if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";
  // } else {
  // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  // }

  // mysqli_close($conn);
  // header("Location: registration.html");
  // } else {
  //   echo "Sorry, there was an error uploading your file.";
  // }
// }

?>