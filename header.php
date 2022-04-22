<?PHP
include 'common.php';
include 'constants/facilities.php';

$AsJson = getTimeAsJson();
$Time = json_decode($AsJson,true);

$saat = $Time["hour"];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?PHP include 'meta.php'; ?>

    <?PHP include 'title.php'; ?>

    <?PHP include 'favicon.php'; ?>

    <?PHP include 'css.php'; ?>
  </head>
