<?php 
include 'header.php';

if(isset($_POST['add'])){
  $name = $_POST['name'];

  $sql = "INSERT INTO categories (name) VALUES ('$name')";
  
  if(mysqli_query($conn, $sql)){
    header("Location: categories.php");
  }
}

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Categories</h1>
        <a href ="category.php" class="btn btn-outline-dark w-25 ">All Categories</a>
      </div>
      <form action="" method="post">
        <div class="mb-3">
          <label>Name:</label>
          <input type="text" class="form-control" placeholder="Name" name="name"/>
        </div>
        <button class="btn btn-success w-25" name="add"> Add</button>
      </form>
      
        
</main>

<?php include 'fotter.php' ?>