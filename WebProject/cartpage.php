<?php include 'header.php'?>

<main>
    <div class="tabel">
        <h1>Your Cart</h1>
        <table class="table table-bordered table-hover table-striped">
            <title> Your Cart</title>
            <tr class="table-dark">
                <th>ID</th>
                <th>Image</th>
                <th>Book</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>
            
            <?php
            // Retrieve book details from the database based on the book_id stored in the session
            // Replace the database retrieval code with your own logic
            $bookId1 = 1;
            $bookId2 = 2;
            // Example book details
            $book1 = array(
                'id' => $bookId1,
                'image' => 'assets/images/b4.jpg',
                'title' => 'أنت لي',
                'price' => '125',
                'quantity' => 2,
                'total' => 250
            );
            $book2 = array(
                'id' => $bookId2,
                'image' => 'assets/images/b3.jpg',
                'title' => 'في قلبي أنثى عربية',
                'price' => '7',
                'quantity' => 1,
                'total' => 7
            );
            
            $booksInCart = array($bookId1, $bookId2); // Retrieve book IDs from the session
            
            foreach ($booksInCart as $bookId) {
                // Retrieve book details from the database based on $bookId
                // Replace the database retrieval code with your own logic
                if ($bookId == $book1['id']) {
                    $book = $book1;
                } elseif ($bookId == $book2['id']) {
                    $book = $book2;
                } else {
                    continue; // Skip if book details not found
                }
                ?>
                <tr>
                    <td><?php echo $book['id']; ?></td>
                    <td><img src="<?php echo $book['image']; ?>" style="height: 100px; margin-left: 20px;"></td>
                    <td><?php echo $book['title']; ?></td>
                    <td><?php echo $book['price']; ?>$</td>
                    <td><?php echo $book['quantity']; ?></td>
                    <td><?php echo $book['total']; ?>$</td>
                    <td><a href="#" class="btn btn-danger"><i class="fa-solid fa-x" style="color: #ffffff;"></i></a></td>
                </tr>
                <?php
            }
            ?>
            
            <tr class="table-dark">
                <td colspan="5">Total</td>
                <td colspan="2"> 257$</td>
            </tr>
            
        </table>
    </div>
</main>



<?php include 'fotter.php'?>


<!-- <main>
    <div class="tabel">
        <h1>Your Cart</h1>
        <table class="table table-bordered table-hover table-striped">
            <title> Your Cart</title>
            <tr class="table-dark">
                <th>ID</th>
                <th>Image</th>
                <th>Book</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>1</td>
                <td> <img src="../assets/images/b4.jpg" style="height: 100px; margin-left: 20px;"/> </td>
                <td>أنت لي</td>
                <td>125$</td>
                <td>2</td>
                <td>250$</td>
                <td><a href="#" class="btn btn-danger"> <i class="fa-solid fa-x" style="color: #ffffff;"></i></a></td>
            </tr>
            <tr>
                <td>1</td>
                <td> <img src="assets/images/b3.jpg" title= "في قلبي أنثى عربية" style="height: 100px; margin-left: 20px;"/> </td>
                <td> في قلبي أنثى عربية</td>
                <td>7$</td>
                <td>1</td>
                <td>7$</td>
                <td> <a href="#" class="btn btn-danger"> <i class="fa-solid fa-x" style="color: #ffffff;"></i></a> </td>
            </tr>
            <tr class="table-dark">
                <td colspan="5">Total</td>
                <td colspan="2"> 257$</td>
            </tr>
            
        </table>
    </div>
</main> -->
