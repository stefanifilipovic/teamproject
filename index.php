<!DOCTYPE html>
<html>
<head>
    <title>Product Review Page</title>
    <style>
      
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-section {
            margin-bottom: 30px;
            padding: 15px;
            border: 1px solid #ccc;
            width: 300px;
        }
        .review-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        label {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Product Reviews</h1>

    <!-- FORM SECTION -->
    <div class="form-section">
        <h3>Submit a Review</h3>
        <form method="POST" action="index.php">
            <label>Product Name:</label>
            <input type="text" name="product_name" required>

            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Rating (1-5):</label>
            <input type="number" name="rating" min="1" max="5" required>

            <label>Comment:</label>
            <textarea name="comment" rows="4" required></textarea>

            <label>Date:</label>
            <input type="date" name="review_date" required>

            <br><br>
            <button type="submit" name="submit_review">Post Review</button>
        </form>
    </div>

    <hr>

    <!-- DATA LIST SECTION -->
    <h2>Recent Reviews</h2>
    <div id="reviews-list">
        <?php
        // This part checks if the form was submitted
        if (isset($_POST['submit_review'])) {
            $product = $_POST['product_name'];
            $user = $_POST['username'];
            $rating = $_POST['rating'];
            $comment = $_POST['comment'];
            $date = $_POST['review_date'];

          
           
            echo "<div class='review-item'>";
            echo "<strong>Product:</strong> " . $product . "<br>";
            echo "<strong>User:</strong> " . $user . " | <strong>Rating:</strong> " . $rating . "/5<br>";
            echo "<strong>Date:</strong> " . $date . "<br>";
            echo "<strong>Comment:</strong> " . $comment;
            echo "</div>";
        } else {
            echo "<p>No reviews yet. Be the first to post!</p>";
        }
        ?>
    </div>

</body>
</html>
