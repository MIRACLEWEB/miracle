<?php
include_once '../model/Destination.php';
require 'database.class.php';
require 'db_connection.php';
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
function getchauffeur() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  chauffeur as p   '
	);
	$q->execute();
	return $q->fetchAll(2);
}
}

?>