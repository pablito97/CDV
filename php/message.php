<?php
    
if(isset($_POST['message']))
{
    
    $message = $_POST['message'];



    class foo_mysqli extends mysqli {
        public function __construct($host, $user, $pass, $db) {
            parent::__construct($host, $user, $pass, $db);

            if (mysqli_connect_error()) {
                die('Connect Error (' . mysqli_connect_errno() . ') '
                        . mysqli_connect_error());
            }
        }
    }

    $db = new foo_mysqli('localhost', 'rowery_patryk', 'TajneHaslo2020', 'rowery_goscie');

    echo 'Success... ' . $db->host_info . "\n";
    
    $query = "INSERT INTO `message` (`id`, `text`, `data`) VALUES (NULL, $message, CURRENT_TIMESTAMP);";
    $mysqli->query($query);

    $db->close();
}

?>