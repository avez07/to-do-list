<script>

    function alert_msg() {
        if (window.confirm("Are You Sure , You Want To `DELETE` This Record")) {
            alert("After `DELETE` You Cannot Undo");
        } else {
            return false;
        }
    }
   
    function redirect(){
            window.location.href = "/all-my-projects/to-do-list/add-todo.php";
        }
      
</script>

<?php

$sql_query = "SELECT * FROM note";
$sql_result = $conn->query($sql_query);







    if ($sql_result->num_rows > 0) {
        while ($row = $sql_result->fetch_assoc()) {
          echo '<a href = update.php?id=' . $row['id'] . '&sn=' . $row['TITLLE'] .
          '&st=' . $row['TASK'] .'"><div class="button d-flex justify-content-between px-3 py-0">
          <p class="my-2">' . $row['TITLLE'] . '</p>
          <p class="my-2">' . $row['DATE_'] . '</p>
              </div></a>';
          
          

        }

    } else {
        echo "no row added";
    };

        echo ' <div id="scroll" onclick="redirect()">
        <div>
        <i class="fa-sharp fa-solid fa-pen-to-square"></i>
        <div>
        </div>';





$conn->close();


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
   