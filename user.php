<?php

class user{
	public $database;
	public $user_id;
	function __construct($database,$user_id){
		$this->database = $database;
		$this->user_id = $user_id;
	}
	function getData(){
		$query = $this->database->prepare("select * from test_message where parent = ?");
		$query->bind_param('i', $this->user_id);
		$query->execute();
		$result = $query->get_result();
		echo '<table>';
		while($row = $result->fetch_assoc()) {
			echo '<tr><td>'.$row['message'].'</td></tr>';	
		}
		echo '</table>';
	}
	function setData($user_input){
		$user_input = strip_tags($user_input);
		$query = $this->database->prepare("INSERT INTO `test_message`(`hidden`, `deleted`, `parent`, `message`) VALUES (0,0,1,?)");
		$query->bind_param('s', $user_input);
		$query->execute();
	}
}

?>
