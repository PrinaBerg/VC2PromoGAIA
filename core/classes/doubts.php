<?php
class Doubts{

	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}

	public function update_user($name, $last_name, $email, $partner, $problem, $id){

		$query = $this->db->prepare("UPDATE `doubts` SET
								`name`	= ?,
								`last_name`		= ?,
								`email`		= ?,
								`partner`			= ?,
								`problem`= ?

								WHERE `id` 		= ?
								");

		$query->bindValue(1, $name);
		$query->bindValue(2, $last_name);
		$query->bindValue(3, $email);
		$query->bindValue(4, $partner);
		$query->bindValue(5, $problem);
		$query->bindValue(6, $id);

		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}


	public function user_exists($name) {

		$query = $this->db->prepare("SELECT COUNT(`id`) FROM `doubts` WHERE `name`= ?");
		$query->bindValue(1, $name);

		try{

			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				return true;
			}else{
				return false;
			}

		} catch (PDOException $e){
			die($e->getMessage());
		}

	}


	public function register($name, $last_name, $email, $partner, $problem){


		$query 	= $this->db->prepare("INSERT INTO `doubts` (`name`, `last_name`, `email`, `partner`, `problem`) VALUES (?, ?, ?, ?, ?) ");

		$query->bindValue(1, $name);
		$query->bindValue(2, $last_name);
		$query->bindValue(3, $email);
		$query->bindValue(4, $partner);
		$query->bindValue(5, $problem);

		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}


	public function userdata($id) {

		$query = $this->db->prepare("SELECT * FROM `doubts` WHERE `id`= ?");
		$query->bindValue(1, $id);

		try{

			$query->execute();

			return $query->fetch();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}

	public function get_users() {

		$query = $this->db->prepare("SELECT * FROM `doubts` ORDER BY `time` DESC");

		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		return $query->fetchAll();

	}
}
