<?php
header('Content-type: application/json');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('bootstrap.php');
use PayPal\Api\ExecutePayment; 
use PayPal\Api\Payment; 
use PayPal\Api\PaymentExecution;

if (isset($_GET['success']) && $_GET['success'] == 'true') 
{
    $paymentId = $_GET['paymentId']; 
    $payment = Payment::get($paymentId, $apiContext);
    $execution = new PaymentExecution();
    $execution->setPayerId($_GET['paymentId']);
    //echo $execution->getPayerId();
    try {
        $result = $payment->execute($execution, $apiContext);
        
        //ResultPrinter::printResult("Executed Payment", "Payment", $payment->getId(), $execution, $result);
         try { $payment = Payment::get($paymentId, $apiContext); } catch (Exception $ex)
         {
             $payment = Payment::get($paymentId, $apiContext);
         }
         catch (Exception $ex) 
         {
            //ResultPrinter::printError("Get Payment", "Payment", null, null, $ex);
            //exit(1);
         }
    }
    catch (Exception $ex) {
        //ResultPrinter::printError("Executed Payment", "Payment", null, null, $ex); exit(1); }
    //ResultPrinter::printResult("Get Payment", "Payment", $payment->getId(), null, $payment);
    }
    echo $payment->links[0]->href;
   // $info	= json_decode($payment);
    //$id         = $info->id;
    //$server     = 'http://'.$_SERVER['SERVER_NAME'];
   // header('Location:'.$server.'/aisha/index.php?option=com_astrologin&task=astroask.confirmPayment&id='.$id);
    
	//echo $info->invoice_number;
}
else if(isset($_GET['success']) && $_GET['success'] == 'false')
{   
    echo "No Way Jose!!";
}
?>
