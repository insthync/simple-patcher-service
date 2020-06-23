<?php
$filepath = "ENTER YOUR FILE PATH HERE";
$fileurl = "ENTER YOUR FILE URL HERE";
$filemd5 = md5_file($filepath);
$client_md5 = $_GET['md5'];
$result = array('updated' => true);
if ($filemd5 !== $client_md5)
{
    $result['updated'] = false;
    $result['fileurl'] = $fileurl;
    $result['filemd5'] = $filemd5;
}
echo json_encode($result);
?>