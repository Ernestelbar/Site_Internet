<!DOCTYPE html>
<html>
<meta charset="utf-8"/>

<?php
if(isset($_POST['cap1'])){
    echo $_POST['cap1'];
}

?>
<!--
if (isset($_POST['cap1']))
{
    echo $_POST['cap1'];
    $fcapteur = $_POST['cap1'];
    $dsn = 'mysql:host=localhost';
    $user = 'root';
    $password = '';

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=manipulation;charset=utf8', 'root', '');
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->exec('INSERT INTO piece(capteur1) VALUES('.$fcapteur.')');

    echo 'Vos capteurs ont bien été ajouté !';
}
else
{
    echo 'Veuillez choisir vos capteurs';
}

?>

-->
</html>
