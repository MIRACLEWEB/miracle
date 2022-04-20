<?php
require 'database.class.php';
require 'db_connection.php';
include 'config.php';
DB::init(
    'localhost:3306',
    'miracle',
    'root',
    ''
  );
class getwhatever {
function getdestinationamicale() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  destination as p where categorie="amicale"  '
	);
	$q->execute();
	return $q->fetchAll(2);
}

function getdestinationfamiliale() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  destination as p where categorie="familiale"  '
	);
	$q->execute();
	return $q->fetchAll(2);
}
function getdestinationbyid($id) {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  destination as p where id=:idu '
	);
	$q->bindValue(':idu', $id);
	$q->execute();
	return $q->fetchAll(2);
}
function getreservation() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  reservations as p   '
	);
	$q->execute();
	return $q->fetchAll(2);
}
function gethebergements() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  hebergement as p   '
	);
	$q->execute();
	return $q->fetchAll(2);
}
function getnomchauffeur($id) {	
	$q = DB::pdo()->prepare(
 		' SELECT p.nom from  chauffeur as p  where id=:idu '
	);
	$q->bindValue(':idu', $id);
	$q->execute();

	return $q->fetchAll(2);
}

function getnomdestination($id) {	
	$q = DB::pdo()->prepare(
 		' SELECT p.name from  destination as p  where id=:idu '
	);
	$q->bindValue(':idu', $id);
	$q->execute();

	return $q->fetchAll(2);
}

function getdestinations() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  destination as p  '
	);
	$q->execute();
	return $q->fetchAll(2);
}

function ajouterdestination($destination){


			$sql="INSERT INTO destination(name, description , image ,prix,categorie,lat,lng)
			VALUES(:na , :de , :im , :pr ,:ca,:la,:ln)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'na' => $destination->getName(),
					'de' => $destination->getDescription(),
					'im' => $destination->getImage(),
					'pr' => $destination->getPrix(),
					'ca' => $destination->getCategorie(),
					'la' => $_COOKIE['lat'],
					'ln' => $_COOKIE['lng']
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

			function supprimerdestination($id){
			$sql="DELETE FROM destination WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerreservation($id){
		$sql="DELETE FROM reservations WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function countamicale(){
	

$q = DB::pdo()->prepare(
 		' SELECT count(*) as p from  destination  where categorie=:amicale '
	);
	$q->bindValue(':amicale', "amicale");
	$q->execute();

		return $q->fetchAll(2);
		}

		function countfamiliale(){
	

$q = DB::pdo()->prepare(
 		' SELECT count(*) as p from  destination  where categorie=:familiale '
	);
	$q->bindValue(':familiale', "familiale");
	$q->execute();

		return $q->fetchAll(2);
		}
		
}
?>