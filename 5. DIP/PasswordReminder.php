<?php
class PasswordReminder
{
	private $dbConnection;

	public function __construct(DBConnectionInterface $dbConnection)
	{
		$this->dbConnection = $dbConnection;
	}
}