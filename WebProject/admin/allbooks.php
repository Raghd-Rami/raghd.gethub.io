<?php 
include 'header.php';
 
//to make the delete button function:
if (isset($_GET['delete'])) {
  $bookId = $_GET['delete'];
  $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");
  $stmt->bind_param("i", $bookId);
  if ($stmt->execute()) {
    // Redirect to the updated book list
    header("Location: allbooks.php");
    exit();
  } else {
    echo "Error deleting book: " . $stmt->error;
  }
  $stmt->close();
}
//Retrieving books from the database
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Books</h1>
        <a href="addnewbook.php" class="btn btn-outline-dark w-25 ">Add New Book</a>
      </div>

      <table class="table table-bordered table-hover table-striped">
        <tr class="table-dark">
          <th>Serial</th>
          <th>title</th>
          <th>img</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        <?php
          if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['title']; ?></td>
          <td><img src="../assets/images/<?php echo $row['image']; ?>" style="height: 100px; margin-left: 20px;"/></td>
          <td><?php echo $row['price']; ?></td>
          <td>
            <a href="editbook.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a>

            <a onclick="return confirm('Are you sure?!')"; href="allbooks.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
          </td>
        </tr>
      <?php
        }
      } else {
        echo "<tr><td colspan='5'>No books found.</td></tr>";
      }
      ?>
      </table>

        
</main>

<?php include 'fotter.php' ?>