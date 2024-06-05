<?php include '../../../config/constants.php'?>
<script src="js/session_validation.js"></script>
<?php
  	$action=$_POST['action'];
switch ($action){

	
	case 'get_page':
		$page=$_POST['page'];
		$ids=$_POST['ids'];
		require_once '../content/page-content.php';
	break;

	case 'get_page_with_id':
		$page=$_POST['page'];
		$ids=$_POST['ids'];
		$other_ids=$_POST['other_ids'];
		require_once '../content/page-content.php';
	break;


	case 'get_form':
		$page=$_POST['page'];
		require_once '../content/forms.php';
	break;
	

	case 'get_form_with_id':
		$page=$_POST['page'];
		$ids1=$_POST['ids1'];
		$ids2=$_POST['ids2'];
		$ids=$_POST['ids'];
		require_once '../content/forms.php';
	break;


	case 'unlink_passport':
		$db_passport=$_POST['db_passport'];

		if ($db_passport=='friends.png') {
			/// do nothing
		} else {
			unlink("../../../uploaded_files/user_pix/".$db_passport);
		}
	break;


	case 'move_passport':
		$passport=$_POST['passport'];
		move_uploaded_file($_FILES["passport"]["tmp_name"], "../../../uploaded_files/user_pix/".$passport);
	break;





}
?>
