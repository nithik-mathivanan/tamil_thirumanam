<?php 


$servername = "127.0.0.1";
$username = "root";
$db_password = "";
$dbname = "matrimony";


if(isset($_POST["gender"]) && isset($_POST["cname"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["createdby"])) {
    $gender="";
    $cname="";
    $phone="";
    $email="";
    $createdby="";
    $form_no="";

    if(isset($_POST['gender'])){
        $gender=$_POST['gender'];
    }
    if(isset($_POST['cname'])){
        $cname=$_POST['cname'];
    }
    if(isset($_POST['phone'])){
        $phone=$_POST['phone'];
    }
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
    if(isset($_POST['createdby'])){
        $createdby=$_POST['createdby'];
    }

    // Create connection
    $conn = mysqli_connect($servername, $username, $db_password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO homeregistration (gender, cname, phone, email, createdby) VALUES ('$gender', '$cname', '$phone', '$email', '$createdby')";

    if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
    echo $createdby;
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // mysqli_close($conn);

}







if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-1') {
    if(isset($_POST["dob"]) && isset($_POST["religion"]) && isset($_POST["mother_tongue"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $dob="";
        $religion="";
        $mother_tongue="";
        $email="";
        $password="";
    
        if(isset($_POST['dob'])){
            $dob=$_POST['dob'];
        }
        if(isset($_POST['religion'])){
            $religion=$_POST['religion'];
        }
        if(isset($_POST['mother_tongue'])){
            $mother_tongue=$_POST['mother_tongue'];
        }
        if(isset($_POST['email'])){
            $email=$_POST['email'];
        }
        if(isset($_POST['password'])){
            $password=$_POST['password'];
        }
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}

        $sql = "SELECT MAX(id) FROM homeregistration";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        $last_inserted_id = $row['MAX(id)'];
    
        $sql = "INSERT INTO personal_info_one (dob, religion, mother_tongue, email, pass, fk_homeregistration_id) VALUES ('$dob', '$religion', '$mother_tongue', '$email', '$password', '$last_inserted_id')";
    
        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        echo $password;
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}


if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-2') {
    if(isset($_POST["caste"]) && isset($_POST["sub_caste"]) && isset($_POST["gothram"]) && isset($_POST["dosham"])) {
        $caste="";
        $sub_caste="";
        $gothram="";
        $dosham="";
    
        if(isset($_POST['caste'])){
            $caste=$_POST['caste'];
        }
        if(isset($_POST['sub_caste'])){
            $sub_caste=$_POST['sub_caste'];
        }
        if(isset($_POST['gothram'])){
            $gothram=$_POST['gothram'];
        }
        if(isset($_POST['dosham'])){
            $dosham=$_POST['dosham'];
        }
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
    
        $sql = "INSERT INTO personal_info_two (caste, sub_caste, gothram, dosham) VALUES ('$caste', '$sub_caste', '$gothram', '$dosham')";
    
        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}
    
if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-3') {
    if(isset($_POST["marital_status"]) && isset($_POST["family_status"]) && isset($_POST["family_type"]) && isset($_POST["family_values"]) && isset($_POST["disability"]) && isset($_POST["height"])) {
        $marital_status="";
        $family_status="";
        $family_type="";
        $family_values="";
        $disability="";
		$height="";
    
        if(isset($_POST['marital_status'])){
            $marital_status=$_POST['marital_status'];
        }
        if(isset($_POST['family_status'])){
            $family_status=$_POST['family_status'];
        }
        if(isset($_POST['family_type'])){
            $family_type=$_POST['family_type'];
        }
        if(isset($_POST['family_values'])){
            $family_values=$_POST['family_values'];
        }
		if(isset($_POST['disability'])){
            $disability=$_POST['disability'];
        }
		if(isset($_POST['height'])){
            $height=$_POST['height'];
        }
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
    
        $sql = "INSERT INTO personal_info_three (marital_status, family_status, family_type, family_values, disability, height) 
		VALUES ('$marital_status', '$family_status', '$family_type', '$family_values', '$disability', '$height')";
    
        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}


if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-4') {
    if(isset($_POST["education"]) && isset($_POST["employed_in"]) && isset($_POST["occupation"]) && isset($_POST["income"]) && isset($_POST["salary"])) {
        $education="";
        $employed_in="";
        $occupation="";
        $income="";
        $salary="";
    
        if(isset($_POST['education'])){
            $education=$_POST['education'];
        }
        if(isset($_POST['employed_in'])){
            $employed_in=$_POST['employed_in'];
        }
        if(isset($_POST['occupation'])){
            $occupation=$_POST['occupation'];
        }
        if(isset($_POST['income'])){
            $income=$_POST['income'];
        }
		if(isset($_POST['salary'])){
            $salary=$_POST['salary'];
        }
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
    
        $sql = "INSERT INTO personal_info_four (education, employed_in, occupation, income, salary) 
		VALUES ('$education', '$employed_in', '$occupation', '$income', '$salary')";
    
        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}


if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-5') {
    if(isset($_POST["help_me"])) {
        $help_me="";
    
        if(isset($_POST['help_me'])) {
            $help_me=$_POST['help_me'];
        }
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}

        $sql = "SELECT MAX(reg_id) FROM personal_info_five";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        $last_inserted_id = $row['MAX(reg_id)'];

        if(empty($last_inserted_id)) {
            $new_reg_id = 'TT2024031001';
        } else {
            $reg_id = explode("202403",$last_inserted_id);
            $new_reg_id = 'TT202403'.intval($reg_id[1]) + 1;
        }
        
        $sql = "INSERT INTO personal_info_five (help_me, reg_id) VALUES ('".htmlspecialchars($help_me)."', '$new_reg_id')";

        echo $new_reg_id;

        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}

if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-6') {
    if(isset($_POST["body_type"]) 
    && isset($_POST["weight"]) 
    && isset($_POST["college"]) 
    && isset($_POST["organisation"])) {
        $body_type="";
        $weight="";
        $help_me="";
        $help_me="";
    
        if(isset($_POST['body_type'])) {
            $body_type=$_POST['body_type'];
        }
        if(isset($_POST['weight'])) {
            $weight=$_POST['weight'];
        }
        if(isset($_POST['college'])) {
            $college=$_POST['college'];
        }
        if(isset($_POST['organisation'])) {
            $organisation=$_POST['organisation'];
        }
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_six (body_type, weight, college, organisation) 
        VALUES ('$body_type', '$weight', '$college', '$organisation')";
    
        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}

if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-7') {
    if(isset($_POST["eating_habit"]) 
    && isset($_POST["drinking_habit"]) 
    && isset($_POST["smoking_habit"]) 
    && isset($_POST["star"])
    && isset($_POST["raasi"])) {
        $eating_habit="";
        $drinking_habit="";
        $smoking_habit="";
        $star="";
        $raasi="";
    
        if(isset($_POST['eating_habit'])) {
            $eating_habit=$_POST['eating_habit'];
        }
        if(isset($_POST['drinking_habit'])) {
            $drinking_habit=$_POST['drinking_habit'];
        }
        if(isset($_POST['smoking_habit'])) {
            $smoking_habit=$_POST['smoking_habit'];
        }
        if(isset($_POST['star'])) {
            $star=$_POST['star'];
        }
		
        if(isset($_POST['raasi'])) {
            $raasi=$_POST['raasi'];
        }
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_seven (eating_habit, drinking_habit, smoking_habit, star, raasi) 
        VALUES ('$eating_habit', '$drinking_habit', '$smoking_habit', '$star', '$raasi')";
    
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}

if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-8') {
    if(isset($_POST["born_country"]) 
    && isset($_POST["born_state"]) 
    && isset($_POST["born_city"]) 
    && isset($_POST["std_time"])) {
        $born_country="";
        $born_state="";
        $born_city="";
        $std_time="";
    
        if(isset($_POST['born_country'])) {
            $born_country=$_POST['born_country'];
        }
        if(isset($_POST['born_state'])) {
            $born_state=$_POST['born_state'];
        }
        if(isset($_POST['born_city'])) {
            $born_city=$_POST['born_city'];
        }
        if(isset($_POST['std_time'])) {
            $std_time=$_POST['std_time'];
        }
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_eight (born_country, born_state, born_city, std_time) 
        VALUES ('$born_country', '$born_state', '$born_city', '$std_time')";
    
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}


if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-9') {
//fulldate: 2024-02-5 11:09:52
    if(isset($_POST["father_status"]) 
    && isset($_POST["mothers_status"]) 
    && isset($_POST["no_of_brothers"]) 
    && isset($_POST["brothers_married"])
    && isset($_POST["no_of_sisters"])
    && isset($_POST["sisters_married"])
    && isset($_POST["family_location"])
    && isset($_POST["parent_country"])
    && isset($_POST["parent_mobile"])
    && isset($_POST["fulldate"])) {
        $father_status="";
        $mothers_status="";
        $no_of_brothers="";
        $brothers_married="";
        $no_of_sisters="";
        $sisters_married="";
        $family_location="";
        $parent_country="";
        $parent_mobile="";
        $fulldate="";
    
        if(isset($_POST['father_status'])) {
            $father_status=$_POST['father_status'];
        }
        if(isset($_POST['mothers_status'])) {
            $mothers_status=$_POST['mothers_status'];
        }
        if(isset($_POST['no_of_brothers'])) {
            $no_of_brothers=$_POST['no_of_brothers'];
        }
        if(isset($_POST['brothers_married'])) {
            $brothers_married=$_POST['brothers_married'];
        }
        if(isset($_POST['no_of_sisters'])) {
            $no_of_sisters=$_POST['no_of_sisters'];
        }
        if(isset($_POST['sisters_married'])) {
            $sisters_married=$_POST['sisters_married'];
        }
        if(isset($_POST['family_location'])) {
            $family_location=$_POST['family_location'];
        }
        if(isset($_POST['parent_country'])) {
            $parent_country=$_POST['parent_country'];
        }
        if(isset($_POST['parent_mobile'])) {
            $parent_mobile=$_POST['parent_mobile'];
        }
        if(isset($_POST['fulldate'])) {
            $fulldate=$_POST['fulldate'];
        }
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_nine (father_status, mothers_status, no_of_brothers, brothers_married,
        no_of_sisters, sisters_married, family_location, parent_country, parent_mobile, created_on) 
        VALUES ('$father_status', '$mothers_status', '$no_of_brothers', '$brothers_married'
        ,'$no_of_sisters', '$sisters_married', '$family_location', '$parent_country', '$parent_mobile', '$fulldate')";
    
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}


if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-10') {
    if(isset($_POST["anches_origin"])) {
        $anches_origin="";
    
        if(isset($_POST['anches_origin'])) {
            $anches_origin=$_POST['anches_origin'];
        }
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_ten (anches_origin) 
        VALUES ('$anches_origin')";
    
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}

if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-11') {
    if(isset($_POST["hobbies"])) {
        $hobbies="";
    
        if(isset($_POST['hobbies'])) {
            $hobbies=$_POST['hobbies'];
        }
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_eleven (hobbies) 
        VALUES ('$hobbies')";
    
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}

if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-12') {
    if(isset($_POST["match_age"])
    && isset($_POST["match_height"])
    && isset($_POST["match_marital"])
    && isset($_POST["match_language"])
    && isset($_POST["match_physical_status"])
    && isset($_POST["match_eating_habits"])
    && isset($_POST["match_drinking_habits"])
    && isset($_POST["match_smoking_habits"])) {
        $match_age="";
        $match_height="";
        $match_marital="";
        $match_language="";
        $match_physical_status="";
        $match_eating_habits="";
        $match_drinking_habits="";
        $match_smoking_habits="";
    
        if(isset($_POST['match_age'])) {
            $match_age=$_POST['match_age'];
        }
        if(isset($_POST['match_height'])) {
            $match_height=$_POST['match_height'];
        }
        if(isset($_POST['match_marital'])) {
            $match_marital=$_POST['match_marital'];
        }
        if(isset($_POST['match_language'])) {
            $match_language=$_POST['match_language'];
        }
        if(isset($_POST['match_physical_status'])) {
            $match_physical_status=$_POST['match_physical_status'];
        }
        if(isset($_POST['match_eating_habits'])) {
            $match_eating_habits=$_POST['match_eating_habits'];
        }
        if(isset($_POST['match_drinking_habits'])) {
            $match_drinking_habits=$_POST['match_drinking_habits'];
        }
        if(isset($_POST['match_smoking_habits'])) {
            $match_smoking_habits=$_POST['match_smoking_habits'];
        }
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_twelve (match_age, match_height, match_marital, match_language, match_physical_status, match_eating_habits, match_drinking_habits, match_smoking_habits) 
        VALUES ('".htmlspecialchars($match_age)."', '".htmlspecialchars($match_height)."', '".htmlspecialchars($match_marital)."','$match_language',
        '$match_physical_status','$match_eating_habits','$match_drinking_habits','".htmlspecialchars($match_smoking_habits)."')";
    
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}

if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-13') {
    if(isset($_POST["match_religion"]) 
    && isset($_POST["match_caste"])
    && isset($_POST["match_dosham"])
    && isset($_POST["match_star"])) {
        $match_religion="";
        $match_caste="";
        $match_dosham="";
        $match_star="";
    
        if(isset($_POST['match_religion'])) {
            $match_religion=$_POST['match_religion'];
        }
        if(isset($_POST['match_caste'])) {
            $match_caste=$_POST['match_caste'];
        }
        if(isset($_POST['match_dosham'])) {
            $match_dosham=$_POST['match_dosham'];
        }
        if(isset($_POST['match_star'])) {
            $match_star=$_POST['match_star'];
        }
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_thirteen (match_religion, match_caste, match_dosham, match_star) 
        VALUES ('$match_religion', '$match_caste', '$match_dosham', '$match_star')";
    
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}


if(isset($_POST['form_no'])){
    $form_no=$_POST['form_no'];
}

if ($form_no == 'form-14') {
    if(isset($_POST["match_education"]) 
    && isset($_POST["match_employed_in"])
    && isset($_POST["match_occupation"])
    && isset($_POST["annual_income"])
    && isset($_POST["match_country"])) {
        $match_education="";
        $match_employed_in="";
        $match_occupation="";
        $annual_income="";
        $match_country="";
    
        if(isset($_POST['match_education'])) {
            $match_education=$_POST['match_education'];
        }
        if(isset($_POST['match_employed_in'])) {
            $match_employed_in=$_POST['match_employed_in'];
        }
        if(isset($_POST['match_occupation'])) {
            $match_occupation=$_POST['match_occupation'];
        }
        if(isset($_POST['annual_income'])) {
            $annual_income=$_POST['annual_income'];
        }
        if(isset($_POST['match_country'])) {
            $match_country=$_POST['match_country'];
        }
		// Create connection
		$conn = mysqli_connect($servername, $username, $db_password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
        
        $sql = "INSERT INTO personal_info_fourteen (match_education, match_employed_in, match_occupation, annual_income, match_country) 
        VALUES ('$match_education', '$match_employed_in', '$match_occupation', '$annual_income', '$match_country')";
    
        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    
    }
}

if(isset($_GET['uploaded'])) {
    echo "uploaded successfully";
}





?>