<?php

	include '../config/config.php';

	function getAll($table){
		global $dbc;
		$query = "SELECT * FROM $table";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}
	
	function getUserFromUserId($userId){
		global $dbc;
		$query = "SELECT * FROM user WHERE user_id=$userId";
		$result = mysqli_query($dbc,$query);
		while($row = mysqli_fetch_assoc($result)){
			$data = $row;
		}
		return $data;
	}

	function getEducationFromUserId($userId){
		global $dbc;
		$query = "SELECT * FROM education WHERE user_id=$userId";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}

	function getWorkFromUserId($userId){
		global $dbc;
		$query = "SELECT * FROM work WHERE user_id=$userId";
		$result = mysqli_query($dbc,$query);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}

?>