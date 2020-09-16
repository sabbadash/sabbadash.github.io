<?php
if ($_REQUEST['login'] == 'root' and $_REQUEST['password'] == 'root1'){
	echo "Доступ открыт!";
} else{
	echo "Доступ закрыт";
}
?>