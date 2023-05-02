<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-DO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <section class="head ">
        <div class="container-fluid">
          <div class="d-flex justify-content-between mx-3 my-4">
          <p class="fs-3 fw-bolder">To-Do List</p>
         <a class="nav-link active d-none d-sm-inline" aria-current="page" href="add-todo.php"><button type="button" class="btn btn-primary">ADD NOTE</button></a>
      
          </div>
          </div>
        
   </section> 
   <section class="headind">
    <div class="headline">
        <p class="text-uppercase text-dark fs-1 fw-bolder text-notes">all notes</p>
    </div>
   </section>
   <section class="notes">
    <div class="container-fluid content-t d-none d-md-block">
       <?php
       include "pagination.php"
       ?>
    </div>
    <div class="container-fluid p-0 d-block d-md-none mb-5">
    <?php
       include "mobile.php"
       ?>
    </div>

  
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
    // Create a media query
var mediaQuery = window.matchMedia('(max-width: 600px)');

// Define the function to be executed when the media query matches
function handleMobileChange(mobile) {
  if(mobile) {
    // Code for mobile devices
    console.log('Mobile device detected');
  } else {
    // Code for tablets and desktops
    console.log('Tablet or desktop device detected');
  }
}

// Call the function on page load
handleMobileChange(mediaQuery.matches);

// Add a listener to execute the function when the media query matches
mediaQuery.addListener(function(e) {
  handleMobileChange(e.matches);
});

   </script>
</body>
</html>