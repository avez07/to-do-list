<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookbaddies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body class="add-note">
<?php
ob_start();
include "config.php";
$id = $_GET['id'];
$sn = $_GET['sn'];
$si = $_GET['st'];

?>

<script>
     function alert_msg() {
        if (window.confirm("Are You Sure , You Want To `UPDATE` This Record")) {
          return true;

        } else {
            return false;
        }
    }
</script>

<section>
    <div class="head">
        <p class="m-o fs-2 text-center text-uppercase fw-bolder">update tasks</p>
    </div>
    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ADD TITLLE</label>
            <input type="text" class="form-control" name="titlle" value="<?php echo $sn?>" id="exampleInputEmail1" placeholder="TITLLE" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <textarea name="text-notes" id="notes" class="text-note form-control" placeholder="Note"><?php echo $si?></textarea>
        </div>

        <button type="submit" onclick="alert_msg()" class="btn btn-primary">Submit</button>
    </form>
</section>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s_titlle = $_POST["titlle"];
    $s_task = $_POST["text-notes"];


    $stmt = $conn->prepare("UPDATE `note` SET `TITLLE` = ?, `TASK` = ? WHERE `id` = ?");
    if (!$stmt) {
        die("Error preparing SQL statement: " . $conn->error);
    }

    $result = $stmt->bind_param("ssi", $s_titlle, $s_task, $id);
    if (!$result) {
        die("Error binding parameters: " . $stmt->error);
    }

    $executed = $stmt->execute();
    if (!$executed) {
        die("Error executing statement: " . $stmt->error);
    }

    header("location: /all-my-projects/to-do-list/index.php");
    exit;
}
?>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>