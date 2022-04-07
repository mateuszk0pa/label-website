<?php
 $to = '####@gmail.com';
 $subject = 'Simple Cart Order';
 $content = $_POST;
 $body = '';
 for($i=1; $i < $content['itemCount'] + 1; $i++) {
 $name = 'item_name_'.$i;
 $quantity =  'item_quantity_'.$i;
 $price = 'item_price_'.$i;
 $company = 'extra_data_company_'.$i;
 $body .= 'item #'.$i.': ';
 $body .= $content[$name].' '.$content[$quantity].' '.$content[$price]  $content[$company];
 $body .= '<br>';
}
 $headers = 'From: shop@vibesite.pl' . "\r\n" .
 'Reply-To: shop@vibesite.pl' . "\r\n" .
 'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $body, $headers);
  Header('Location: thankyou.php');
?>
