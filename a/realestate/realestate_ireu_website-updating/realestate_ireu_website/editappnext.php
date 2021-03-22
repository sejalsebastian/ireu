<?php
session_start();
include("includes/config.php");
      $stu_id = $_SESSION['stu_id'];
      //program info 
      $program_type = $_POST['programtype'];
      $program_name =$_POST['programname'];
      //personal info 
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
      //Communication info
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
      //educational info
      $X_Institution = $_POST['X_Institution']; 
      $X_CGPA = $_POST['X_CGPA']; 
      $X_year = $_POST['X_year']; 
      $XI_institution = $_POST['XI_institution']; 
      $XI_CGPA = $_POST['XI_CGPA']; 
      $XI_year = $_POST['XI_year']; 
      //other info
      $extra_curricular = $_POST['extra_curricular'];
      $source = $_POST['source'];
      $hostel_accom = $_POST['hostel_accom'];
      $previous_applied = $_POST['previous_applied'];
      $studied_puc = $_POST['studied_puc'];
      $test_center = $_POST['test_center'];


//query to get application id
// $appid=$_GET['applicationnumber'];
$appid = $_SESSION['appid'];
// echo json_encode($appid);
// echo json_encode( array("applicayionID" => $appid));
echo json_encode(['filename' => "dan"]);

// program update query 
$sql1 = "UPDATE `program` SET `prog_type`='".$program_type."',`prog_name`= '".$program_name."' WHERE stu_id = $stu_id AND program.app_id=$appid";
if(mysqli_query($db, $sql1)){
      //      echo json_encode("Program Info Updated.");

            // personal update query
            $sql2 = "UPDATE `stu_per_info` SET `firstname`='".$fname."',
            `lastname`='".$lname."',`email`='".$email."',`dateofbirth`='".$dob."',`registered_mob_num`='".$mobile_no."',
            `alternative_mob_num`='".$alt_mobile_no."',`gender`='".$gender."',`religion`='".$religion."',`caste`='".$caste."',
            `category`='".$category."',`aadhar_no`='".$aadhar_no."',`blood_group`='".$blood_group."',`pwd_disability`='".$physical_status."',
            `father_name`='".$father_name."',`father_mob_num`='".$f_phone_no."',`father_email`='".$f_email."',
            `father_occupation`='".$f_occupation."',`mother_name`='".$mother_name."',`mother_mob_number`='".$m_phone_no."',
            `mother_email`='".$m_email."',`mother_occupation`='".$m_occupation."',`parent_annual_inc`='".$parents_income."',
            `pref_poc`='".$preferred_contact."',`local_gaurdian_name`='".$guardian_name."',`gaur_mob_num`='".$guardian_mobile."',`gaur_relat`='".$guardian_relation."' WHERE stu_id = $stu_id AND stu_per_info.app_id=$appid";
            if(mysqli_query($db, $sql2)){
            //     echo json_encode("Personal info updated.");
            }
             //Communication query
             $sql3="UPDATE `stu_com_info` SET `corr_add_1`='".$cor_addr_line1."',`corr_add_2`='".$cor_addr_line2."',`corr_state`='".$cor_state."',`corr_city`='".$cor_city."',`corr_pincode`='".$cor_pincode."',
                  `per_add_1`='".$pre_addr_line1."',`per_add_2`='".$pre_addr_line2."',`per_state`='".$pre_state."',`per_city`='".$pre_city."',`per_pincode`='".$pre_pincode."' WHERE stu_id = $stu_id AND stu_com_info.app_id=$appid";
            if(mysqli_query($db, $sql3)){
            // echo json_encode("Communication information updated.");
            }
             //educational query
            $sql4="UPDATE `stu_edu` SET `stu_inst`='".$X_Institution."',`stu_cgpa`='".$X_CGPA."',`stu_yr_pass`='".$X_year."' WHERE stu_id = $stu_id AND stu_edu.stu_class_type = 1 AND stu_edu.app_id=$appid";
            $sql5="UPDATE `stu_edu` SET `stu_inst`='".$XI_institution."',`stu_cgpa`='".$XI_CGPA."',`stu_yr_pass`='".$XI_year."' WHERE stu_id = $stu_id AND stu_edu.stu_class_type = 2 AND stu_edu.app_id=$appid";
            if(mysqli_query($db, $sql4) && mysqli_query($db, $sql5)){
            //   echo json_encode("educational information updated.");
            }
            //other info query
            $sql6="UPDATE `stu_othr_info` 
            SET `extra_cur_activ`='".$extra_curricular."',`knw_jain`='".$source."',`host_acc`='".$hostel_accom."',
            `app_jain`='".$previous_applied."',`puc_at_jain`='".$studied_puc."',`jain_test_loc`='".$test_center."' WHERE stu_id = $stu_id AND stu_othr_info.app_id=$appid"; 

            if(mysqli_query($db, $sql6)){
            // echo json_encode("otherinfo updated.");
            }         
           
            // echo '<pre>';
            // echo json_encode(var_dump($_FILES['edit_file_array']));
            // echo '</pre>';

            //file upload query  
            if (isset($_FILES['edit_file_array'])){
            $name_array = $_FILES['edit_file_array']['name'];
            $tmp_name_array = $_FILES['edit_file_array']['tmp_name'];
            $type_array = $_FILES['edit_file_array']['type'];
            $size_array = $_FILES['edit_file_array']['size'];
            $error_array = $_FILES['edit_file_array']['error'];
          
      //       echo '<pre>';
      //      //  echo var_dump($error_array);
      //       echo '</pre>';
            $documentname = array( 
                 '0' => "photo" ,
                 '1' => "10th" ,
                 '2' => "2ndpuc",
                 '3' => "ug",
                 
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
           $temp=0;
           $filemsg = "";
           
           foreach ($name_array as $key => $value) {
                 //$filenames-> file names
                 $filenames = $value;
                 // file extension
                 $file_sepreate_extn = explode('.', $value);
                 $file_extn = strtolower(end($file_sepreate_extn));
               
                 // coursetype_appid_studid_timestamp.extn
                 $document_name = $documentname[$i++]."_".$appid."_".$stu_id."_".$timestamp.$t."".$file_extn;
                    
                 $sql7="UPDATE `stu_docs` SET `stu_id`='".$stu_id."',`app_id`='".$appid."',`doc_type`='".$documentname[$temp]."',`doc_name`='".$document_name."',`doc_org_name`='".$filenames."' 
                        WHERE stu_docs.app_id=$appid AND stu_docs.doc_type='".$documentname[$temp]."'";

                 if($filenames != ""){
                       
                       if(in_array($file_extn, $allowed)){
                        $temp++;
                         
                             if ($canexcute == "true") {
                              mysqli_query($db, $sql7);      
                             $uploadname[]=$document_name;
                             }   
                            
                 }else{
                       $filemsg = "Format not allowed";
                      }
                 }else if($filenames == ""){
                       $filemsg =  "Fill the uploads";
                 }
               
           }
      //      if(!empty($filemsg)) {
      //            echo $filemsg;
      //           }
           
                foreach ($uploadname as $key => $uvalue) {

                      $goodUrl = str_replace(':', '', $uvalue);
                      $filenamenewuplaod[] = 'uploads/'.$goodUrl; 
                 
                 }
                //logic to upload the files into uploads folder
           for ($i=0; $i <count($tmp_name_array) ; $i++) {
                  
                 $temp1 = explode(".",$name_array[$i]);
                 $newfilename = end($temp1);
                 echo json_encode(end($documentname));
            //      if (end($documentname)) {
            //            # code...
            //      }
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
           // redirect to payment if satus is null or unpaid
            
            // header("Location:./payment/payscript");
        
      } else {
           echo "failed";
            
      }
           
    
}
