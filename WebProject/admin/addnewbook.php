<?php 
include 'header.php';

if (isset($_POST['addbook'])) {
  // Retrieve the form data
  $title = $_POST['title'];
  $img = $_FILES['file']['name'];
  $price = $_POST['price'];
  $fullD = $_POST['fullD'];

  // Prepare the SQL statement
  $stmt = $conn->prepare("INSERT INTO books (title, image, price, content) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssds", $title, $img, $price, $fullD);

  // Execute the statement
  $stmt->execute();
  // if ($stmt->execute()) {
  //   echo "Book added successfully.";
  // } else {
  //   echo "Error adding book: " . $stmt->error;
  // }

  // Close the prepared statement
  $stmt->close();
}
?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New Book</h1>
        <a href ="allbooks.php" class="btn btn-outline-dark w-25 ">All Books</a>
      </div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label>Title:</label>
      <input name="title" type="text" class="form-control" placeholder="Name"/>
      <label>Image:</label>
      <input name="file" type="file" class="form-control" placeholder=""/>
      <label>Price:</label>
      <input name="price" type="text" class="form-control" placeholder="Price"/>
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
    <button name="addbook" class="btn btn-success w-23"> Add</button>
  </form>

</main>
      <!-- <form action="" method="post">
        <div class="mb-3">
          <label>Title:</label>
          <input name="title" type="text" class="form-control" placeholder="Name"/>
          <label>img:</label>
          <input name="file" type="file" class="form-control" placeholder=""/>
          <label>Price:</label>
          <input name="price" type="text" class="form-control" placeholder="Price"/>
          <label>Content:</label>
          <textarea name="content"  class="form-control" rows="5" placeholder="Full Description"></textarea>
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
        <button name="addbook" class="btn btn-success w-23"> Add</button>
      </form> -->

<?php include 'fotter.php'?>