<?php
$filepath = "./file.zip";
$fileurl = "http://localhost/ve_patcher/file.zip";
$filemd5 = md5_file($filepath);
$windowsexe = "VECY.exe";
$osxexe = "VECY.app";
$notice = "Hello\nWelcome everybody :)";
$client_md5 = $_GET['md5'];
$result = array(
    'updated' => true,
    'notice' => $notice,
    'windowsexe' => $windowsexe,
    'osxexe' => $osxexe);
if ($filemd5 !== $client_md5)
{
    $result['updated'] = false;
    $result['fileurl'] = $fileurl;
    $result['filemd5'] = $filemd5;
}
echo json_encode($result);
?>