<?php
$sdd_db_host='localhost';
$sdd_db_name='shadulles';
$sdd_db_user='root';
$sdd_db_pass='';
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);
@mysql_select_db($sdd_db_name);
$result=mysql_query( 'SELECT * FROM `tp-20`');


//$edit = mysql_query(" SELECT time,kab1,day1 FROM tp-20 ");
$row = mysql_fetch_assoc($result);

if(isset($_POST['save']))
{
    $kab=s
}

mysql_close();
?>
<form>
	<input type="text" value="<?php echo $work['kab1'];?>" >
</form>