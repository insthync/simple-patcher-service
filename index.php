<?php
$windows_data = array(
    'file_path' => "./file_windows.zip",
    'file_url' => "http://localhost/ve_patcher/file_windows.zip",
    'exe' => "VECY.exe"
);
$osx_data = array(
    'file_path' => "./file_osx.zip",
    'file_url' => "http://localhost/ve_patcher/file_osx.zip",
    'exe' => "VECY.app"
);
$clients = array(
    $windows_data,
    $osx_data,
);
$notice = "Hello\nWelcome everybody :)";
$client_os = $_GET['os'];
$client_md5 = $_GET['md5'];
$client = $clients[$client_os];
$file_md5 = md5_file($client['file_path']);
$result = array(
    'updated' => true,
    'notice' => $notice,
    'exe' => $client['exe']);
if ($file_md5 !== $client_md5)
{
    $result['updated'] = false;
    $result['fileUrl'] = $client['file_url'];
    $result['fileMd5'] = $file_md5;
}
echo json_encode($result);
?>