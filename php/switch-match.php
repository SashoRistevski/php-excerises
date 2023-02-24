<?php

//$paymentStatuses = 'paid';
//$paymentStatuses = [1,2,3];
//// does loose comparison
//
//// if we wrap a for loop over the switch, the break will exit the switch only and not the for loop,
//// we have to say how many loops we have to exit by specifying "break 2,3 etc
//foreach ($paymentStatuses as $paymentStatus)
//switch ($paymentStatus) {
//    case 1:
//        echo 'Paid';
//        break 2;
//    case 2:
//    case 3;
//        echo 'Declined';
//        break;
//    case 4:
//        echo 'Pending';
//        break;
//    default:
//        echo 'Unknown Payment Status';
//        echo '<br />';
//}
$paymentStatus = 10;
// the match is an expression so it can be assigned to a variable
// match expression does strict comparison
$paymentStatusDisplay = match ($paymentStatus) {
    1 => print 'Paid',
    2,3 => print 'payment Declined',
    0 => print  'pending payment',
    default => 'unknown status',
    };

echo $paymentStatusDisplay;