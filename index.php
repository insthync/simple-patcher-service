<?php
$filepath = "ENTER YOUR FILE PATH HERE";
$client_md5 = $_GET['md5'];
$result = array('updated' => true);
if (md5_file($filepath) !== $client_md5)
{
    $result['updated'] = false;
    $result['filepath'] = $filepath;
}
echo json_encode($result);
?>