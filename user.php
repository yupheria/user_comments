<?php

class user{
	public $database;
	public $user_id;
	function __construct($database,$user_id){
		$this->database = $database;
		$this->user_id = $user_id;
	}
	function getData(){
		$qstring = "select * from test_message where parent = {$this->user_id}";
		$query = mysqli_query($this->database,$qstring);
		echo '<table>';
		while($row = $query->fetch_assoc()) {
			echo '<tr><td>'.$row['message'].'</td></tr>';	
		}
		echo '</table>';
	}
	function setData($user_input){
		$qstring = "INSERT INTO `test_message`(`hidden`, `deleted`, `parent`, `message`) VALUES (0,0,1,'{$user_input}')";
		$query = mysqli_query($this->database,$qstring);
	}
}

?>
