<?php
echo gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo getenv('COMPUTERNAME');
echo $_SERVER['AUTH_USER'];
echo getenv('USERNAME');
?>