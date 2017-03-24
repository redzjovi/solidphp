<?php
class User
{
	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function create(array $data)
	{
		try {
			// save user to database
		} catch (Exception $e) {
			$this->logger->writeToFile($e->getMessage());
		}
	}
}