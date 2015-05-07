<?php     //start php tag
//include connect.php page for database connection
include('application/config/database.php')
//if submit is not blanked i.e. it is clicked.

if (isset ( $_REQUEST ['submit'] ) != '') {
	if ($_REQUEST ['name'] == '' || $_REQUEST ['email'] == '' || $_REQUEST ['password'] == '' || $_REQUEST ['repassword'] == '' || $_REQUEST ['address'] || $_REQUEST ['phone'] || $_REQUEST ['sex'] || $_REQUEST ['birth_date'] || $_REQUEST ['age'] || $_REQUEST ['blood_group']) {
		echo "please fill the empty field.";
	} else {
		$sql = "insert into student(name,email,password,repassword) values('" . $_REQUEST ['name'] . "', '" . $_REQUEST ['email'] . "', '" . $_REQUEST ['password'] . "', '" . $_REQUEST ['repassword'] . "', '" . $_REQUEST ['address'] . "', '" . $_REQUEST ['phone'] . "', '" . $_REQUEST ['sex'] . "', '" . $_REQUEST ['birth_date'] . "', '" . $_REQUEST ['age'] . "', '" . $_REQUEST ['blood_group'] . "')";
		$res = mysql_query ( $sql );
		if ($res) {
			echo "Record successfully inserted";
		} else {
			echo "There is some problem in inserting record";
		}
	}
}

?>