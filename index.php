<! DOCTYPE html>
<html>
<head>
    <title>verification</title>

</head>
<body>
<form class="verif" method="post">
    <input type="text" name="insert"  placeholder="Nom...">
    <br>    <br>
    <input type="submit" class="valider" value="Valider">
</form>
</body>
<?php


if(isset($_POST['insert']))
{
    /* on verifie l'état des magic_quotes */
    if(get_magic_quotes_runtime()==1)
    {
        $phrase = stripslashes($_POST['insert']);
    }
    else
    {
        $phrase = $_POST['insert'];
    }

    /* on inverse le sens des lettres de la phrase */
    $inverse = strrev($phrase);
    if($phrase==$inverse){
        echo 'est un palindrome';
    }
    else{
        echo 'n\'est pas un palindrome';
        }

}
?>
</html>