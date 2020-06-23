<?php
$filepath = "ENTER YOUR FILE PATH HERE";
$fileurl = "ENTER YOUR FILE URL HERE";
$client_md5 = $_GET['md5'];
$result = array('updated' => true);
if (md5_file($filepath) !== $client_md5)
{
    $result['updated'] = false;
    $result['fileurl'] = $fileurl;
}
echo json_encode($result);
?>