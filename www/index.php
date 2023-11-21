<?php require ("./inc/config.php");?>
<?php require ("./inc/header.php");?>

<h1>Bienvenue sur ce earthBlog</h1>
<form name="recherche" method="post" action="submitform.php">
    <input placeholder="ID Sql" name="search" type="text">
    <input type="hidden" name="champinvisible" value="<?php echo "AZERTY" ;?>>



</form>

<?php require ("./inc/footer.php"); ?>
