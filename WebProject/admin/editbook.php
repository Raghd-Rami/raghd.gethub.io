<?php
include 'header.php';

if (isset($_GET['id'])) {
  $bookId = $_GET['id'];

  // Fetch the book details from the database
  $stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
  $stmt->bind_param("i", $bookId);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $img = $row['image'];
    $price = $row['price'];
    // Retrieve other book details as needed
  } else {
    echo "Book not found.";
    exit();
  }
  $stmt->close();
} else {
  echo "Invalid book ID.";
  exit();
}

// Update book details
if (isset($_POST['updating'])) {
  // Retrieve the edited form data
  $newTitle = $_POST['title'];
  $newImg = $_FILES['file']['name'];
  $newPrice = $_POST['price'];
  // Retrieve other edited form fields as needed

  // Prepare the SQL statement to update the book
  $stmt = $conn->prepare("UPDATE books SET title = ?, image = ?, price = ? WHERE id = ?");
  $stmt->bind_param("ssdi", $newTitle, $newImg, $newPrice, $bookId);

  // Execute the statement
  if ($stmt->execute()) {
    // Book updated successfully
  } else {
    echo "Error updating book: " . $stmt->error;
  }

  // Close the prepared statement
  $stmt->close();
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Book</h1>
    <a href ="allbooks.php" class="btn btn-outline-dark w-25 ">All Books</a>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Title:</label>
      <input name="title" type="text" class="form-control" placeholder="Name" value="<?php echo $title; ?>"/>
      <label>Image:</label>
      <input name="file" type="file" class="form-control" placeholder=""/>
      <label>Price:</label>
      <input name="price" type="text" class="form-control" placeholder="Price" value="<?php echo $price; ?>"/>
      <label>Full Description:</label>
      <textarea name="fullD" class="form-control" rows="5" placeholder="Full Description"></textarea>
      <label>Author:</label>
      <select name="selectA" class="form-control">
        <option value="author A" selected>author A</option>
        <option value="author B">author B</option>
      </select>
      <label>Category:</label>
      <select name="selectC" class="form-control">
        <option value="Drama" selected>Drama</option>
        <option value="Action">Action</option>
        <option value="Mystery">Mystery</option>
      </select>
    </div>
    <button name="updating" class="btn btn-success w-23"> Update</button>
  </form>
</main>
<?php include 'fotter.php'?>
