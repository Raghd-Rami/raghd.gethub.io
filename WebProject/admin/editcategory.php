<?php
 include 'header.php';
 
 if(isset($_GET['edit'])){ //is there an edit? (once clicked then yes)
  $id = $_GET['edit']; //get id
  $sql = " SELECT * FROM categories WHERE id = '$id'"; //get it from db
  $result = mysqli_query($conn, $sql); 
  $category = mysqli_fetch_assoc($result); //and move it to category
 }

 if(isset($_POST['update'])){
  $name = $_POST['name'];
  $sql = "UPDATE  categories SET name = '$name' WHERE id = '$id'";
  if(mysqli_query($conn, $sql)){
    header("Location: categories.php");
  }
 }
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Categories</h1>
        <a href ="categories.php" class="btn btn-outline-dark w-25 ">All Categories</a>
      </div>
      <form action="" method="post">
        <div class="mb-3">
          <label>Name:</label>
          <input type="text" class="form-control" name="name" value="<?php echo $category['name'] ?>" placeholder="Name"/>

        </div>
        <button class="btn btn-info w-25" name="update"> Update</button>
      </form>
      
        
</main>

<?php include 'fotter.php' ?>