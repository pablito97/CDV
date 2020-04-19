<?php
    
if(isset($_POST['test']))
{
    
    $post = $_POST['test'];



    class foo_mysqli extends mysqli {
        public function __construct($host, $user, $pass, $db) {
            parent::__construct($host, $user, $pass, $db);

            if (mysqli_connect_error()) {
                die('Connect Error (' . mysqli_connect_errno() . ') '
                        . mysqli_connect_error());
            }
        }
    }

    $db = new foo_mysqli('localhost', 'my_user', 'my_password', 'my_db');

    echo 'Success... ' . $db->host_info . "\n";
    
    $query = "INSERT INTO myCity VALUES (NULL, 'Stuttgart', 'DEU', 'Stuttgart', 617000)";
    $mysqli->query($query);

    $db->close();
}

?>