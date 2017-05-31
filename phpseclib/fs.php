<?php
$connection = ssh2_connect('192.168.0.85', 22);
ssh2_auth_password($connection, 'triata', 'tR49$Gs4729Hp25&');

$stream = ssh2_exec($connection, '/usr/local/bin/php -i');
