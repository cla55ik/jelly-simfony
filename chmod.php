<?php 

exec('chmod go-rwx /var/www');
exec('chmod go+x /var/www');
exec('chgrp -R www-data /var/www');
exec('chmod -R go-rwx /var/www');
exec('chmod -R g+rw /var/www');
exec('chmod -R g+rwx /var/www');