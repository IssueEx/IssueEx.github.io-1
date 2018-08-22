<html>
<head>
  <style>
  body{
    background-color: black;
    color: white;
  }
  </style>
<body>
  The page group you chose was: <?php $myfile = fopen("action_file.txt", "r");
  echo fread($myfile,filesize("action_file.txt")); echo $_POST["pagegroup"]; fclose($myfile)?><br>
  The Violence page you chose was: <?php $myfile = fopen("action_file.txt", "r");
  fread($myfile,filesize("action_file.txt")); $_POST["violencepage"]; fclose($myfile) ?><br>
  Your suggestion for this Violence page was: <?php $myfile = fopen("action_file.txt", "r");
  fread($myfile,filesize("action_file.txt"));echo $_POST["violencepagerate"];fclose($myfile) ?><br>
  The Climate Change page you chose was: <?php $myfile = fopen("action_file.txt", "r");
  fread($myfile,filesize("action_file.txt"));echo $_POST["climatepage"]; fclose($myfile)?><br>
  Your suggestion for this Climate Change page was: <?php $myfile = fopen("action_file.txt", "r");
  fread($myfile,filesize("action_file.txt"));echo $_POST["climatepagerate"]; fclose($myfile)?><br>
  The Disability page you chose was: <?php $myfile = fopen("action_file.txt", "r");
  fread($myfile,filesize("action_file.txt"));echo $_POST["disabilitypage"]; fclose($myfile)?><br>
  Your suggestion for this Disability page was: <?php $myfile = fopen("action_file.txt", "r");
  fread($myfile,filesize("action_file.txt"));echo $_POST["disabilitypagerate"]; fclose($myfile)?><br>
</body>
</html>
