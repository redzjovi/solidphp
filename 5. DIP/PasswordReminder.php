<?php
class PasswordReminder
{
	private $dbConnection;

	public function __construct(MySQLConnection $dbConnection)
	{
		$this->dbConnection = $dbConnection;
	}
}