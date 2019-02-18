<?php
include_once('etudiants.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
    <form action="etudiants.php" method="get">
        <table>
        <tr>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" /></tr>
        <tr><input type="submit" value="OK" class="Valider" /></tr>
        </table>

        <div>
        <caption> Etudiants </caption>
        <table border="3" cellpadding="5" cellspacing="5">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                
            </tr>
        <?php foreach ($getArgument as $key => $etudiant){ ?>
        
            <tr>
                <td>
                    <?php echo $etudiant['id']; ?>
                </td>
                <td>
                    <?php echo $etudiant['nom']; ?>
                </td>
                <td>
                    <?php echo $etudiant['prenom']; }?>
                </td>
        </table>        
    </div>
    </form>
</body>
</html>