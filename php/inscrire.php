<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <div class="lef_add"></div>
    <div class="right_add"></div>
    <div class="banner">
    </div>
    <div class="menu">
        <span><a href="index.php">Accueil</a></span>
        <span><a href="plan_site.php">Plan de Site</a></span>
        <span><a href="qui_somme_nous.php">Qui somme-nous ?</a></span>
        <span><a href="contact.php">Contact</a></span>
    </div>
    <div class="left_side">
        <span><a href="monuments.php">Sites et Monuments</a></span>
        <span><a href="index_ville.php">Index des villes</a></span>
        <span><iframe al
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6944536.185077173!2d-7.150687899999963!3d31.80083464999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b88619651c58d%3A0xd9d39381c42cffc3!2sMorocco!5e0!3m2!1sen!2sma!4v1700945748606!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></span>
        <span><a href="lien_utile.php">Liens utiles</a></span>
    </div>
    <div class="right_side" style="text-align: center;">
        <span class="documentry">
       <iframe
       src="https://www.youtube.com/embed/LB6CUnNWKes" frameborder="0"></iframe>
    </span>
       
    </div>
    <!-- inside-->

    <div class="inside">

   
            <form action="inscrire.php" method="get" >
        <div class="prclass">

            <span class="first" style="height:150px;">
                <span >             <h3>Nom</h3>
                                    <input class="padding" type="text" placeholder="Yassine" name="nom">
                </span>
                <span>
                                    <h3>Prenom</h3>
                                    <input class="padding" type="text" placeholder="Touzani" name="prenom">
                </span>
            </span>
            <span class="first" style="height:150px;">
                <span style="height:20px;">
                                    <h3>Email</h3>
                                    <input class="padding" type="email" placeholder="yassin.tou@gamil.com" name="email">
                </span>
            </span>
            <button>Envoyer</button>
            </div>
        </form>
        
    </div>
    </div>
    <footer>
        <h1>Suggestions Condition d'utilisation</h1>
        <h3>copyright xxxxx 2014-2015</h3>
    </footer>
    
    
    
    <!--php script-->
    <?php
$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$email=$_GET["email"];
//mysql
$host = 'localhost';
$username= 'root';
$password= '';
$dbname= 'projet';
// Etablir une connexion MySQLi
$mysqli = new mysqli($host, $username, $password, $dbname);
//verifier la connexion
if ($mysqli->connect_error){
    die('Erreur de connexion a la base de donnees'. $mysqli->connect_error);
}

  
            // Now you can work with the extracted data
            $sql ='insert into internaute values (?,?,?)';
            $stm=$mysqli->prepare($sql);
            $stm->bind_param('sss',$nom,$prenom,$email);
            if($stm->execute()) {
                echo "data inserted successfully. <br>";
            }
            else echo"Error inserting data: " . $stmt->error;
        
/*
$sql='insert into modele values ("17C92853AZ","Citroën C5","diesel")';
// Executer la requete SQL
if ($mysqli->query($sql)==TRUE) {
    echo"le fishier a ete inserer avec succes dans la base de donnees.";
}
else
    echo"Erreur" . $sql ."<br>". $mysqli->error;
  
//Fermer la connection
*/
//$stm->close();
$mysqli->close(); 
?>
</body>
</html>