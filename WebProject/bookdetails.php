<?php
include 'header.php';

// Check if the book ID is provided in the URL
if (isset($_GET['id'])) {
    $bookId = $_GET['id'];

    // Fetch the book details from the database based on the ID
    $stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
    $stmt->bind_param("i", $bookId); //بيجيب الآيدي وبيقول لك انه من نوع انتجر
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a book with the given ID exists
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $title = $row['title'];

        // Check if 'author' key exists in the array
        $author = isset($row['author']) ? $row['author'] : 'Author Not Available';

        // Check if 'content' key exists in the array
        $content = isset($row['content']) ? $row['content'] : 'Content Not Available';

        // Check if 'price' key exists in the array
        $price = isset($row['price']) ? $row['price'] : 'Price Not Available';

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
?>

<main>
    <div class="book-container">
        <div class="book-content">
            <div class="book-img">
                <img src="assets/images/<?php echo $row['image']; ?>" title="<?php echo $title; ?>" style="width: 200px; height: 300px; margin-right: 200px; margin-top: 50px;">
            </div>
            <div class="book-details">
                <p><?php echo $title; ?></p>
                <p>Author: <?php echo $author; ?></p>
                <p>Price: <span class="price" style="color: darkred;"><?php echo $price; ?>$</span></p>
                <a href="cartpage.php" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i> Add to Cart</a>
            </div>
        </div>

        <div class="book-description">
            <dl>
                <dt><?php echo $title; ?></dt>
                <dd><?php echo $content; ?></dd>
            </dl>
        </div>
    </div>
</main>

<?php include 'fotter.php'?>
