<?php
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
  <Gather action="http://apt.example.com/gather.php" method="POST">
    <Say voice="woman">Welcome! If you'd like to call Sean press 1. If you'd like Bob press 2.</Say>
  </Gather>
</Response>
