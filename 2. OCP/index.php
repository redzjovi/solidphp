<?php
$bcaPayment = new BcaPayment();
$mandiriPayment = new MandiriPayment();

$paymentManager = new PaymentManager($mandiriPayment);
$paymentManager->process();