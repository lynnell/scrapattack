<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Twilio Test</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
include_once('twilio-php/config-sms.php');

$sql = "SELECT ts, SUBSTRING(SUBSTRING_INDEX(SUBSTRING_INDEX(twiliosms.dump, '\n', 17), '\n', -1), 8, 10) as phone,
SUBSTRING(SUBSTRING_INDEX(SUBSTRING_INDEX(twiliosms.dump, '\n', 11), '\n', -1), 6, 10000) as body 
from twiliosms order by ts desc limit 20";

print '<br /><table>';
if ($result=mysqli_query($db,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
  {
//    printf('<tr><td>%s</td><td><pre>%s</pre></td></tr>',$row[0],$row[1]);
    printf('<tr><td>%s</td></tr><tr><td>%s</td></tr><tr><td>%s</td></tr><tr><td><br /></td></tr>',$row[0],$row[1],$row[2]);
  }
  // Free result set
  mysqli_free_result($result);
}
print '</table>';

mysqli_close($db);
?>

</body>
</html>
