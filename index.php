This is the easiest way:

php -f /home/your_username/public_html/script.php

And if you want to log the script output to a file, add this to the end of the command:

>> /home/your_username/logs/someFile.txt 2>&1


php -f /home/your_username/public_html/script.php >> /home/your_username/logs/someFile.txt 2>&1



<?php 


logman("Arvind");




function logman($mas){
$message = date('Y-m-d H:i:s') . ":\t $mas\n";
echo $message;
}

?>
