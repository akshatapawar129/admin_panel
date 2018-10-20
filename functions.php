<?php
function redirect($pg_name)
{
	header('location:'.$pg_name);
}
function isvaliduser(){
	global $connect;
	$sess=session_id();
	$sel_qry = "SELECT * FROM smshetty_login WHERE adm_sess_id ='$sess' AND adm_active = 0";
	$res_sel = mysqli_query($connect,$sel_qry);
	if(mysqli_num_rows($res_sel)>0) return 1;
	else	return 0;
}
function loginchk($usernm,$passwd){
	global $connect;
	$pass_enc = md5($passwd);
	$sel_qry = "SELECT * FROM smshetty_login WHERE adm_us_nm = '$usernm' AND adm_pass = '$pass_enc' AND adm_active=0";
	$res_qry = mysqli_query($connect,$sel_qry);
	if(mysqli_num_rows($res_qry)>0){
		$session_id = session_id();
		$row_data = mysqli_fetch_array($res_qry);
		$_SESSION['smshetty_adm_id'] = $row_data['adm_id'];
		$adm_id = $row_data['adm_id'];
		$_SESSION['smshetty_adm_us_nm'] = $usernm;
		$upd_qry = "UPDATE smshetty_login SET adm_sess_id = '$session_id' WHERE adm_id = $adm_id";
		$res_upd_qry = mysqli_query($connect, $upd_qry);
		if($res_upd_qry) 
		{
			$error_count = 0;
		}
		else
		{
			$error_count = 2;
		}
	}
	else
	{
		$error_count = 1;
	}
	return $error_count;
}

function exc_qry($qry)
	{
		global $connect;
        $resultArray=array();
		$resultQueryFinal=mysqli_query($connect,$qry);
		if(mysqli_num_rows($resultQueryFinal)>0)
		{
			while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal))
			{
				array_push($resultArray,$RwGtAlSbmsn);
			}
		}
		return array($resultArray);
	}  
?>