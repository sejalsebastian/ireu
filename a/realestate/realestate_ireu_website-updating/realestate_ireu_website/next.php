<?php
session_start();
include("includes/config.php");
      $stu_id = $_SESSION['stu_id'];
      // program info 
      $program_type = $_POST['programtype'];
      $program_name =$_POST['programname'];
      // personal info 
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $dob = $_POST['dob'];
      $mobile_no = $_POST['mobile_no'];
      $alt_mobile_no = $_POST['alt_mobile_no'];
      $gender = $_POST['gender'];
      $religion = $_POST['religion'];
      $caste = $_POST['caste'];
      $category = $_POST['category'];
      $aadhar_no = $_POST['aadhar_no'];
      $blood_group = $_POST['blood_group'];
      $physical_status = $_POST['physical_status'];
      $father_name = $_POST['father_name'];
      $f_phone_no = $_POST['f_phone_no'];
      $f_email = $_POST['f_email'];
      $f_occupation = $_POST['f_occupation'];
      $mother_name = $_POST['mother_name'];
      $m_phone_no = $_POST['m_phone_no'];
      $m_email = $_POST['m_email'];
      $m_occupation = $_POST['m_occupation'];
      $parents_income = $_POST['parents_income'];
      $preferred_contact = $_POST['preferred_contact'];
      $guardian_name = $_POST['guardian_name'];
      $guardian_mobile = $_POST['guardian_mobile'];
      $guardian_relation = $_POST['guardian_relation'];
      // //Communication info
      $cor_addr_line1 = $_POST['cor_addr_line1'];
      $cor_addr_line2 = $_POST['cor_addr_line2'];
      $cor_state = $_POST['cor_state'];
      $cor_city = $_POST['cor_city'];
      $cor_pincode = $_POST['cor_pincode'];
      $pre_addr_line1 = $_POST['pre_addr_line1'];
      $pre_addr_line2 = $_POST['pre_addr_line2'];
      $pre_state = $_POST['pre_state'];
      $pre_city = $_POST['pre_city'];
      $pre_pincode = $_POST['pre_pincode'];
      // //educational info
      $X_Institution = $_POST['X_Institution']; 
      $X_CGPA = $_POST['X_CGPA']; 
      $X_year = $_POST['X_year']; 
      $XI_institution = $_POST['XI_institution']; 
      $XI_CGPA = $_POST['XI_CGPA']; 
      $XI_year = $_POST['XI_year']; 

      // //other info
      $extra_curricular = $_POST['extra_curricular'];
      $source = $_POST['source'];
      $hostel_accom = $_POST['hostel_accom'];
      $previous_applied = $_POST['previous_applied'];
      $studied_puc = $_POST['studied_puc'];
      $test_center = $_POST['test_center'];
      //file info
     



      //logic to handle same state problem
      if(($_POST['pre_state'] == "")){

            $_POST['pre_state'] = $cor_state;
            $pre_state = $_POST['pre_state'];
      }
      // echo '<pre>';
      // echo var_dump($_FILES);
      // echo '</pre>';
      // application query 

   
      $sql ="INSERT INTO `application`(`app_id`, `stu_id`, `fee_status`) VALUES (NULL, '{$stu_id}', NULL);";
      
      if (mysqli_query($db, $sql)) {
             
       $last_id = mysqli_insert_id($db);
       echo json_encode( array("lastid" => $last_id));
       $_SESSION['last_id'] = $last_id;
       // program query 
       $sql1 = "INSERT INTO `program` (`prog_id`, `stu_id`, `app_id`, `prog_type`, `prog_name`) VALUES (NULL, '{$stu_id}','{$last_id}', '{$program_type}', '{$program_name}');";
       if(mysqli_query($db, $sql1)){
           echo json_encode("It happend");
       }
       // personal query
       $sql2 = "INSERT INTO `stu_per_info` (`stu_info_id`, `stu_id`, `app_id`, `firstname`, 
                `lastname`, `email`, `dateofbirth`, `registered_mob_num`, 
                `alternative_mob_num`, `gender`, `religion`, `caste`, 
                `category`, `aadhar_no`, `blood_group`, `pwd_disability`, 
                `father_name`, `father_mob_num`, `father_email`, 
                `father_occupation`, `mother_name`, `mother_mob_number`, 
                `mother_email`, `mother_occupation`, `parent_annual_inc`, 
                `pref_poc`, `local_gaurdian_name`, `gaur_mob_num`, `gaur_relat`) 
                 VALUES (NULL, '{$stu_id}','{$last_id}','{$fname}', 
                 '{$lname}', '{$email}', '{$dob}', '{$mobile_no}', 
                 '{$alt_mobile_no}', '{$gender}', '{$religion}', '{$caste}', 
                 '{$category}', '{$aadhar_no}', '{$blood_group}', '{$physical_status}', 
                 '{$father_name}', '{$f_phone_no}', '{$f_email}', 
                 '{$f_occupation}', '{$mother_name}', '{$m_phone_no}', 
                 '{$m_email}', '{$m_occupation}', '{$parents_income}', 
                 '{$preferred_contact}',  '{$guardian_name}', '{$guardian_mobile}', '{$guardian_relation}');";
       if(mysqli_query($db, $sql2)){
        echo json_encode("It also happend");
       }
       //Communication query
       $sql3 = "INSERT INTO `stu_com_info` (`com_id`, `stu_id`, `app_id`, 
                `corr_add_1`, `corr_add_2`, `corr_state`, `corr_city`, `corr_pincode`, 
                `per_add_1`, `per_add_2`, `per_state`, `per_city`, `per_pincode`) 
                VALUES (NULL, '{$stu_id}', '{$last_id}', 
                '{$cor_addr_line1}', '{$cor_addr_line2}', '{$cor_state}', '{$cor_city}', '{$cor_pincode}', 
                '{$pre_addr_line1}', '{$pre_addr_line2}', '{$pre_state}', '{$pre_city}', '{$pre_pincode}');";
      if(mysqli_query($db, $sql3)){
        echo json_encode("Comminfo succeded");
       }
       //educational query
        $data = array(
          array( 
            'stu_edu' => NULL ,
            'stu_id' => $stu_id ,
            'app_id' => $last_id,
            'stu_class_type' => '1',
            'stu_inst' => $X_Institution, 
            'stu_cgpa' => $X_CGPA,
            'stu_yr_pass' => $X_year
          ),
          array( 
            'stu_edu' => NULL ,
            'stu_id' => $stu_id ,
            'app_id' => $last_id,
            'stu_class_type' => '2',
            'stu_inst' => $XI_institution, 
            'stu_cgpa' => $XI_CGPA,
            'stu_yr_pass' =>$XI_year
          )
          );   
          
          $msg = '';
          foreach($data as $arrayData){

            $sql4 = "INSERT INTO `stu_edu` (stu_edu,stu_id, app_id, stu_class_type, stu_inst, stu_cgpa, stu_yr_pass)
            VALUES ('$arrayData[stu_edu]','$arrayData[stu_id]', '$arrayData[app_id]',  '$arrayData[stu_class_type]',  '$arrayData[stu_inst]',  
                   '$arrayData[stu_cgpa]',  '$arrayData[stu_yr_pass]')";
             $done = mysqli_query($db, $sql4);
             if(!$done) {
              $msg = 'Fail';
             }
             else {
              $msg = 'saved.';
             }
           
           } 
           if(!empty($msg)) {
            echo $msg;
           }
           //other info query
           $sql5 = "INSERT INTO `stu_othr_info` (`stu_othr_info_id`, `stu_id`, `app_id`, 
           `extra_cur_activ`, `knw_jain`, `host_acc`, 
           `app_jain`, `puc_at_jain`, `jain_test_loc`)
            VALUES (NULL, '{$stu_id}', '{$last_id}',
            '{$extra_curricular}', '{$source}', '{$hostel_accom}', 
            '{$previous_applied}', '{$studied_puc}', '{$test_center}');";
          if(mysqli_query($db, $sql5)){
            echo json_encode("otherinfo succeded");
            
            }         

      //file upload query  
       if (isset($_FILES['file_array'])){
             $name_array = $_FILES['file_array']['name'];
             $tmp_name_array = $_FILES['file_array']['tmp_name'];
             $type_array = $_FILES['file_array']['type'];
             $size_array = $_FILES['file_array']['size'];
             $error_array = $_FILES['file_array']['error'];
            //  echo '<pre>';
            echo '<br/>';
            echo '<br/>';
             echo '<pre>';
            // echo var_dump($_FILES);
             echo '<pre>';
            //  echo var_dump($error_array);
             echo '</pre>';
             $documentname =array( 
                  '0' => "photo" ,
                  '1' => "10th" ,
                  '2' => "2ndpuc",
                  '3' => "ug" 
            );    
            foreach ($size_array as $key => $svalue) {
                  if($svalue > 1048576){
                  echo "Greater than one mb";
                  $canexcute = "false";
                   break;
                  }
                  else{
                        // echo var_dump($svalue);
                        $canexcute = "true";
             
                  }
                   
            }
             //allowed formats 
             $allowed = array('jpg','jpeg','pdf','png','pdf');
            //to get microseconds
            $result = preg_replace('/[^a-zA-Z0-9-_\.]/','', microtime());
            $t = str_replace(".", "", $result);
            $timestamp = date("Y-m-d H:i:s");
            $i=0;
            $temp=-1;
            $filemsg = "";
            foreach ($name_array as $key => $value) {
                  //$filenames-> file names
                  $filenames = $value;
                  // file extension
                  $file_sepreate_extn = explode('.', $value);
                  $file_extn = strtolower(end($file_sepreate_extn));
                  echo '<br/>';
                  echo '<br/>';
                  // echo var_dump($filenames);
                  // coursetype_appid_studid_timestamp.extn
                  $document_name = $documentname[$i++]."_".$last_id."_".$stu_id."_".$timestamp.$t."".$file_extn;
                  // if(in_array($file_extn, $allowed)){
                  if($filenames != ""){
                        $temp++; 
                        if(in_array($file_extn, $allowed)){
                              if ($canexcute == "true") {
                                    # code...
                              
                              $sql6="INSERT INTO `stu_docs` (`stu_docs_id`, `stu_id`, `app_id`, `doc_type`, `doc_name`, `doc_org_name`) 
                              VALUES (NULL, '{$stu_id}', '{$last_id}', '{$documentname[$temp]}', '{$document_name}', '{$filenames}');";
                              mysqli_query($db, $sql6);      
                              $uploadname[]=$document_name; 
                              }
                       
                  }else{
                        $filemsg = "Format not allowed";
                       }
                  }else if($filenames == ""){
                        $filemsg =  "Fill the uploads";
                  }
                
            }
            if(!empty($filemsg)) {
                  echo $filemsg;
                 }
            
                 foreach ($uploadname as $key => $uvalue) {
                       
                       $goodUrl = str_replace(':', '', $uvalue);
                       $filenamenewuplaod[] = 'uploads/'.$goodUrl; 
                  }
                 //logic to upload the files into uploads folder
            for ($i=0; $i <count($tmp_name_array) ; $i++) {
                   
                  $temp1 = explode(".",$name_array[$i]);
                  $newfilename = end($temp1);
                  if(move_uploaded_file($tmp_name_array[$i],$filenamenewuplaod[$i].".".$newfilename )){
                        echo '<br/>';
                        echo '<br/>';
                        echo $name_array[$i]. "Upload complete<br/>";
                        
                        
                  }else{
                        echo '<br/>';
                        echo '<br/>';
                        echo  "Failed to upload<br/>".$name_array[$i];
                  }
                  
                  
            }
           echo json_encode(var_dump($_FILES)); 
            // get method to payment
            // $getname=$fname.' '.$lname;
            // header("Location:./payment/payscript.php?name=$getname&mobile=$mobile_no&email=$email");
            header("Location:./payment/payscript");
       } else {
            echo "failed";
             
       }
       
      //  header("Location:user_application.php");
       
        
      } else {
          echo "No";
          echo "Error: " . $sql . "<br>" . mysqli_error($db);
      }
