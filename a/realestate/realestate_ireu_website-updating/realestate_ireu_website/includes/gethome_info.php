<?php
 include('config.php');

// to get main info about home page
$sql = "SELECT `hm_id`, `hm_ac_collab_title`, `hm_academic_title`, `hm_course_re_title`, `hm_research_title`, `hm_research_sub_title`, `hm_fac_title`, `hm_fac_image`, `hm_fac_name`, `hm_fac_description`, `hm_fac_credential_title`, `hm_fac_credential_link`, `hm_partners _infra_title` FROM `home` WHERE `hm_id`= 1";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
$homeinfo_Details = array();
if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $homeinfo_Details[] =  $row;
  }
}

// to get credentials points info about home page
$sql1 = "SELECT `hm_credential_id`, `hm_id`, `hm_credential_list` FROM `hm_credentials` WHERE `hm_id` = 1";
$result1 = mysqli_query($db, $sql1);
$resultCheck1 = mysqli_num_rows($result1);
$homecred_Details = array();
if ($resultCheck1 > 0) {
  while ($row = mysqli_fetch_assoc($result1)) {
    $homecred_Details[] =  $row;
  }
}

// to get research points info about home page
$sql2 = "SELECT `hm_res_id`, `hm_id`, `hm_research_features`,`hm_link` FROM `hm_research` WHERE `hm_id` = 1";
$result2 = mysqli_query($db, $sql2);
$resultCheck2 = mysqli_num_rows($result2);
$homeres_Details = array();
if ($resultCheck2 > 0) {
  while ($row = mysqli_fetch_assoc($result2)) {
    $homeres_Details[] =  $row;
  }
}


// to get acedemic info about home page
$sql3 = "SELECT `hm_acd_id`, `hm_id`, `hm_academic_info`, `hm_academic_img` FROM `hm_academics` WHERE `hm_id` = 1";
$result3 = mysqli_query($db, $sql3);
$resultCheck3 = mysqli_num_rows($result3);
$home_acd_Details = array();
if ($resultCheck3 > 0) {
  while ($row = mysqli_fetch_assoc($result3)) {
    $home_acd_Details[] =  $row;
  }
}

// to get courses in real estate info home page
$sql4 = "SELECT `hm_course_re_id`, `hm_id`, `hm_course_re_image`, `hm_course_re_name`, `hm_course_re_link` FROM `hm_course_re` WHERE `hm_id` = 1";
$result4 = mysqli_query($db, $sql4);
$resultCheck4 = mysqli_num_rows($result4);
$hm_cr_Details = array();
if ($resultCheck4 > 0) {
  while ($row = mysqli_fetch_assoc($result4)) {
    $hm_cr_Details[] =  $row;
  }
}


// to get global acedameic pictures home page
$sql5 = "SELECT `hm_ac_collab_id`, `hm_id`, `hm_ac_collab_img` FROM `hm_academic_collaboration` WHERE `hm_id` = 1";
$result5 = mysqli_query($db, $sql5);
$resultCheck5 = mysqli_num_rows($result5);
$hm_gl_collab_pics = array();
if ($resultCheck5 > 0) {
  while ($row = mysqli_fetch_assoc($result5)) {
    $hm_gl_collab_pics[] =  $row;
  }
}


// to get partners pictures home page
$sql6 = "SELECT `hm_partners _infra_id`, `hm_id`, `hm_partners _infra_image` FROM `hm_partners _infra` WHERE `hm_id` = 1";
$result6 = mysqli_query($db, $sql6);
$resultCheck6 = mysqli_num_rows($result6);
$hm_partners_imgs = array();
if ($resultCheck6 > 0) {
  while ($row = mysqli_fetch_assoc($result6)) {
    $hm_partners_imgs[] =  $row;
  }
}

// to get banner images home page
$sql7 = "SELECT `hm_ban_id`, `hm_id`, `hm_ban_image`, `hm_ban_img_docname` FROM `hm_banner_images` WHERE `hm_id` = 1";
$result7 = mysqli_query($db, $sql7);
$resultCheck7 = mysqli_num_rows($result7);
$hm_banner_imgs = array();
if ($resultCheck7 > 0) {
  while ($row = mysqli_fetch_assoc($result7)) {
    $hm_banner_imgs[] =  $row;
  }
}

// to get courses in real_estate images home page
$sql8 = "SELECT `hm_course_re_id`, `hm_id`, `hm_course_re_image`, `hm_course_re_name`, `hm_course_re_link` FROM `hm_course_re` WHERE `hm_id` = 1";
$result8 = mysqli_query($db, $sql8);
$resultCheck8 = mysqli_num_rows($result8);
$hm_courses_re_imgs = array();
if ($resultCheck8 > 0) {
  while ($row = mysqli_fetch_assoc($result8)) {
    $hm_courses_re_imgs[] =  $row;
  }
}

?>