<?php
echo "Today is ". date("Y/m/d")."<br>";
echo "Today is ". date("Y-M-d")."<br>";
echo "Today is ". date("Y.m.d")."<br>";
echo "Today is ". date("l")."<br>";

echo "&copy; 2025-".date("m", strtotime("-1 month"));

echo "&copy month was ".date("M")."will be".date("M", strtotime("+2 month"));

echo "<br><hr>";
date_default_timezone_set('Asia/Calcutta');

$strtime = strtotime("10:30pm April 15 2014");
echo "Created at ".date("Y-m-d h:i:sa", $strtime);

echo "<br><hr>";

echo "<br>";

echo "The time is ".date("h:i:sa");

$d = mktime(11, 14, 54, 8, 12, 2014);
echo "created date is ". date("Y-m-d h:i:sa", $d);

echo "<br><hr>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    # code...
    echo date("M d", $startdate)."<br>";
    $startdate = strtotime("+1 week", $startdate);
}

echo "<br>";

$d1 = strtotime("July 04");
$d2 = ceil(($d1-time())/60/60/24);
echo $d2;
echo "<br>";



echo "<br>";


$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php

if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

<?php

$arr =  '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($arr);
echo $arr->Peter;

?>
