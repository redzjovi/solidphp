<?php
$bcaPayment = new BcaPayment();

$paymentManager = new PaymentManager($bcaPayment);
$paymentManager->process();