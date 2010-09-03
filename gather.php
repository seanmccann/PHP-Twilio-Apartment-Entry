<?php
  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

if($_REQUEST['Digits'] == '1234'){
  ?>
  <Response>
      <Play>http://idisk.s3.amazonaws.com/tmp/9.wav</Play>
  </Response>
  <?php
  die;
}elseif($_REQUEST['Digits'] == '1'){
  ?>
  <Response>
    <Say>Transferring to Sean now</Say>
    <Dial>818-575-6191</Dial>
  </Response>
  <?php
  die;
}elseif($_REQUEST['Digits'] == '2'){
  ?>
  <Response>
    <Say>Transferring to Bob now</Say>
    <Dial>780-555-5555</Dial>
  </Response>
  <?php
  die;
}

header("content-type: text/xml");
?>

<Response>
  <Say>You did not make a selection. Bye!</Say>
</Response>
