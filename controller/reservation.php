
<?php

require 'database.class.php';
require 'db_connection.php';
DB::init(
		'localhost:3306',
		'miracle',
		'root',
		''
	);
   

if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['tel'])&& isset($_POST['chauffeur'])&& isset($_POST['datee']) && isset($_POST['heure']) && isset($_POST['id_destination'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $chauffeur=$_POST['chauffeur'];
	$datee=$_POST['datee'];
 	$heure=$_POST['heure'];
 	$id_destination=$_POST['id_destination'];
	$q = DB::pdo()->prepare(
 		'INSERT INTO reservations(name, email,tel,id_chauffeur,datee,heure,id_destination)
 		 VALUES(:na,:em,:te,:ch,:da,:he,:des)'
	);

	$q->bindValue(':na', $name);
	$q->bindValue(':em', $email);
	$q->bindValue(':te', $tel);
	$q->bindValue(':ch', $chauffeur);
	$q->bindValue(':da', $datee);
	$q->bindValue(':he', $heure);
	$q->bindValue(':des', $id_destination);
	$q->execute();
  header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/vinazine/views/index.html" );
	return $q->rowCount();

}
?>