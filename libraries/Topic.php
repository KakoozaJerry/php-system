<?php
class Topic{
	//Init DB Variable
	private $db;


	//Constructor
	public function __construct(){
		$this->db = new Database;

	}


	//Get All Topics
	public function getAllTopics(){
		$this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
			INNER JOIN users
			ON topics.user_id = users.id
			INNER JOIN categories
			ON topics.category_id = categories.id
			ORDER BY create_date DESC
			");

	//Assign Results
		$results = $this->db->resultset();

		return $results;
	}

	public function getByCategory($category_id){
		$this->db->query("SELECT topics.*,categories.*, users.username, users.avatar FROM topics
			INNER JOIN categories
			ON topics.category_id = categories.id
			INNER JOIN users
			ON topics.user_id = users.id
			WHERE topics.category_id = :category_id
			");
		$this->db->bind(':category_id', $category_id);

	//Assign Results
		$results = $this->db->resultset();

		return $results;
	}

	//Get Total Topics
	public function getTotalTopics(){
		$this->db->query('SELECT * FROM topics');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

	//Get Total Categories
	public function getTotalCategories(){
		$this->db->query('SELECT * FROM categories');
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}
	//Get category by ID
	public function getCategory($category_id){
		$this->db->query("SELECT * FROM categories WHERE id = :category_id");
		$this->db->bind(':category_id', $category_id);

		//Assign  Row
		$row = $this->db->single();

		return $row;
	}

	//Get Total Replies
	public function getTotalReplies($topic_id){
		$this->db->query('SELECT * FROM replies  WHERE topic_id = '.$topic_id);
		$rows = $this->db->resultset();
		return $this->db->rowCount();
	}

}