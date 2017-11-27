<?

if (!$HTTP_POST_VARS){

?>

<form name="form" method="post" action="">
Your Email:<br>
<input name="email" type="text" />
<input type="button" name="Submit" value="Submit">
</form>

<?

} else {

    echo "Record insert successfully!";
}

?>