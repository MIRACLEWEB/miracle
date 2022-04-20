<?php
	class Destination{
		private $id=null;
		private $name=null;
		private $image=null;
		private $prix=null;
		private $description=null;
		private $categorie=null;
		
		private $password=null;
		function __construct($id, $name, $image, $prix, $description, $categorie){
			$this->id=$id;
			$this->name=$name;
			$this->image=$image;
			$this->prix=$prix;
			$this->description=$description;
			$this->categorie=$categorie;
		}
		function getId(){
			return $this->id;
		}
		function getName(){
			return $this->name;
		}
		function getImage(){
			return $this->image;
		}
		function getPrix(){
			return $this->prix;
		}
		function getDescription(){
			return $this->description;
		}
		function getCategorie(){
			return $this->categorie;
		}
		function setName(string $name){
			$this->name=$name;
		}
		function setImage(string $image){
			$this->image=$image;
		}
		function setPrix(string $prix){
			$this->prix=$prix;
		}
		function setDescription(string $description){
			$this->description=$description;
		}
		function setCategorie(string $categorie){
			$this->categorie=$categorie;
		}
		
	}


?>