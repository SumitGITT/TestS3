<?php
// Include the SDK using the Composer autoloaderr
require '/var/www/html/vendor/autoload.php';
$client = new Aws\S3\S3Client([
    'version' => 'latest',
    'region'  => 'ap-south-1'
]);
?>
