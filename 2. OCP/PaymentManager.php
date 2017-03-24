<?php
class PaymentManager
{
	protected $bcaPayment;

	public function __construct(BcaPayment $bcaPayment)
	{
		$this->bcaPayment = $bcaPayment;
	}

	public function process()
	{
		$this->bcaPayment->processPayment();
		// and other payment
	}
}