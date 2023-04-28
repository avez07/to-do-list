<?php

include "./config.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $titlle = $_POST["titlle"];
        $note = $_POST["text-notes"];
       



        $conn->query("CREATE TABLE IF NOT EXISTS note(
                                     id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                                TITLLE varchar(30) NOT NULL,
                                 TASK VARCHAR(500) NOT NULL,
                                 DATE_ DATE NOT NULL DEFAULT CURRENT_TIMESTAMP
                                   );");

        $query_template = $conn->prepare("INSERT INTO note (TITLLE , TASK ) VALUES ( ?, ?)");
        if (!$query_template) {
            die("Error preparing SQL statement: " . $conn-> error);
        } else{
            echo "ansari avez";
        }
        $result = $query_template->bind_param('ss', $titlle, $note);

        if (!$result) {
            die("Error preparing SQL statement: " . $query_template->error);
        } else {
            $query_template->execute();
            header("location: /all-my-projects/to-do-list/index.php");

        }




    }



?>