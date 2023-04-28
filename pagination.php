<div class="modal animate" id="exampleModal1" tabindex="-1" aria-labelledby="studentlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="studentlabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <p class="text-uppercase text-dark fw-bold fs-5">titlle:</p>
                            <p class="text-capitalize text-dark fw-semibold fs-6" id="titlle"></p>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <p class="text-uppercase text-dark fw-bold fs-5">task:</p>
                            <p class="text-capitalize text-dark fw-semibold fs-6" id="task"></p>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<script>
    function openmodal(title, task) {
        document.getElementById('titlle').innerHTML = titlle;
        document.getElementById('task').innerHTML = task;
        $('#exampleModal1').modal('show')

    }

<script>
    function alert_msg() {
        if (window.confirm("Are You Sure , You Want To `DELETE` This Record")) {
            alert("After `DELETE` You Cannot Undo");
        } else {
            return false;
        }



    }
</script>

<?php


//pagination logics started

$sql_query = "SELECT * FROM note";
$sql_result = $conn->query($sql_query);

$result_per_page = 20;
$number_of_result = $sql_result->num_rows;

$number_of_pages = ceil($number_of_result / $result_per_page);




if (!isset($_GET['pages'])) {
    $pages = 1;
} else {
    $pages = $_GET['pages'];
}
$page_num = ($pages - 1) * $result_per_page; //set a number limmit output of this query is 0


//pagination logic end only limit keyword added to the query

$sql_query = "SELECT * FROM note LIMIT " . $page_num . ',' . $result_per_page;
$sql_result = $conn->query($sql_query);

    echo '
    <table class="notes-table">
    <thead>
    <tr>
        <th style="width: 5%;" class="ps-1">SR.NO</th>
        <th style="width: 25%;">TITLLE</th>
        <th style="width: 50%;"colspan = 2>TASKS</th>
        <th style="width: 20%;" colspan=3>ACTIONS</th>

    </tr>
    </thead>


                    <tbody>';


    if ($sql_result->num_rows > 0) {
        while ($row = $sql_result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['TITLLE'] . '</td>';
            echo '<td>' . $row['TASK'] . '</td>';
            echo '<td>' . $row['DATE_'] . '</td>';
            echo '<td class="text-center"><span class = "veiw-text" onClick= "openmodal(\'' . $row['TITLLE'] . '\',\'' . $row['TASK'] . '\')"><span class= "veiw"><i class="fa-solid fa-eye "></i></span>view</span></td>';
            
            echo '<td><a href = "delete.php?id=' . $row['id'] . '" onClick = "return alert_msg()">delete</a></td>';

            echo '<td><a href="update.php?id=' . $row['id'] . '&sn=' . $row['TITLLE'] .
                '&st=' . $row['TASK'] .'">updated</a></td>';


            echo '</tr>';

        }

    } else {
        echo "No rows found";
    }

    echo '</tbody></table></div></div>';



echo ' 
            <nav aria-label="...">
            <ul class="pagination float-right me-3 mt-auto">';

if ($pages > 1) {
    $prev = $pages - 1;
    echo '<li class="page-item">
                <a class="page-link" href= "index.php?pages=' . $prev . '">Previous</a>
              </li>';
} else {
    echo '<li class="page-item">
                <a class="page-link">Previous</a>
              </li>';
}
for ($i = 1; $i <= $number_of_pages; $i++) {
    $active = ($i == $pages) ? "active" : "";
    echo ' <li class="page-item ' . $active . '"><a class="page-link" href="index.php?pages=' . $i . '">' . $i . '</a></li>';
}

if ($pages < $number_of_pages) {
    $next_pages = $pages + 1;
    echo '<li class="page-item">
                      <a class="page-link" href="index.php?pages=' . $next_pages . '">Next</a>
                    </li>';
} else {
    echo '<li class="page-item disabled">
                      <a class="page-link">Next</a>
                    </li>';
}
echo '</ul>
                  </nav>
                  ';


$conn->close();


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>