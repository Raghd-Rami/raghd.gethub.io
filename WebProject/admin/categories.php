<?php
 include 'header.php';
 
 if(isset($_GET['del'])){
  $id = $_GET['del'];
  $sql = " DELETE FROM categories WHERE id = '$id'";
  if(mysqli_query($conn, $sql)){
    header("Location: categories.php");
  }
 }

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
        <a href="addcategory.php" class="btn btn-outline-dark w-25 ">Add New Category</a>
      </div>

      <table class="table table-bordered table-hover table-striped">
        <tr class="table-dark">
          <th>ID</th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
    <?php
      $sql = "SELECT * FROM categories";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
    ?>
        

      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td>
          <a href="editcategory.php?edit=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a>
          
          <a onclick="return confirm('Are you sure?!')";  href="categories.php?del=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"
          style="color: #ffffff;"></i></a>
        </td>
      </tr>


    <?php } ?>
      </table>
        
</main>

<?php include 'fotter.php'?>