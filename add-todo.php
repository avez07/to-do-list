<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add ToDo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="add-note">
    <section>
        <div class="head">
            <p class="m-o fs-2 text-center text-uppercase fw-bolder">add tasks</p>
        </div>
        <form action = "add-note.php" method="post" >
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ADD TITLLE</label>
              <input type="text" class="form-control" name="titlle" id="titlle" placeholder="TITLLE" aria-describedby="emailHelp">
              <span class="fw-semibold text-danger" id="v-tittle"></span>
            
            </div>
            <div class="mb-3">
              <textarea name="text-notes" id="notes" class="text-note form-control" placeholder="Note"></textarea>
            </div>
           
            <button type="submit" onclick="return validate()" class="btn btn-primary">Submit</button>
          </form>
    </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <script src="/index.js"></script>

</body>
</html>