<?php include "structure/header.php"; 
include "model/model_livreor.php";

$date = new DateTime('2025-09-29');
$formatter = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN,
    'EEEE dd/MM'
);

?>
    <link rel="stylesheet" href="./css/livre-or.css" >
  <?php include "structure/menu.php"; ?>
<h1> LIVRE D'OR </h1>|
<section>
    <form method = "get">
        <table border="9" >
            <tr>
                <th>POSTE LE: </th>
                <th>Par utilisateur </th>
                <th>Commentaire </th>
            </tr>
            <tr>
                <td><input type="text" value = "<?php  echo $formatter->format($date);?>"disabled></td>
                <td><input name = "login" type="text"value = "<?php ?>"disabled></td>
                <td>
                    <textarea id="textarea" name="commentaire" rows="15" cols="20"></textarea>
                    <input  name = "bouton" type="submit" value="Envoie commentaire ">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><?php  
                        // $dataform = [$_GET];
                    ?>
                </td>
            </tr>
        </table>
    </form>
</section>
</body>
</html>


