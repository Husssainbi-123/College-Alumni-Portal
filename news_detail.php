<?php 
// Database connection
$conn = new mysqli('localhost', 'root', '', 'test'); // Update with your database credentials

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'title' is provided in the URL
if (isset($_GET['title'])) {
    $news_title = $_GET['title']; // Get the news title from the URL

    // Prepare the SQL statement to fetch news details
    $stmt = $conn->prepare("SELECT Title, Description, Post_Date, Upload_Image, Share_Link FROM newsroom WHERE Title = ?");
    
    if ($stmt) {
        // Bind the title parameter and execute the statement
        $stmt->bind_param("s", $news_title);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any result is returned
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc(); // Fetch the row
            ?>
            <!doctype html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title><?php echo htmlspecialchars($row['Title']); ?></title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <style>
                    .share-box {
                        display: none;
                        border: 1px solid #ced4da;
                        padding: 10px;
                        border-radius: 5px;
                        margin-top: 10px;
                    }
                    .news-detail-card {
                        padding: 20px;
                        border: 1px solid #e0e0e0;
                        border-radius: 10px;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    }
                </style>
            </head>
            <body>
                <div class="container mt-5">
                    <div class="news-detail-card">
                        <h1><?php echo htmlspecialchars($row['Title']); ?></h1>
                        <p><strong>Posted on:</strong> <?php echo date('jS M, Y', strtotime($row['Post_Date'])); ?></p>
                        <div>
                            <img src="../uploads/<?php echo htmlspecialchars($row['Upload_Image']); ?>" alt="News Image" class="img-fluid mb-3">
                        </div>
                        <p><?php echo nl2br(htmlspecialchars($row['Description'])); ?></p>

                        <p><strong>Registration Link:</strong> <a href="<?php echo htmlspecialchars($row['Share_Link']); ?>" target="_blank"><?php echo htmlspecialchars($row['Share_Link']); ?></a></p>

                        <button id="shareBtn" class="btn btn-secondary">Share</button>
                        <div id="shareBox" class="share-box">
                            <p><strong>Share Link:</strong> <span id="shareLink"><?php echo htmlspecialchars($row['Share_Link']); ?></span></p>
                            <button id="copyBtn" class="btn btn-primary">Copy Link</button>
                        </div>

                        <a href="newsroom.php" class="btn btn-primary mt-3">Back to Newsroom</a>
                    </div>
                </div>

                <script>
                    document.getElementById('shareBtn').onclick = function() {
                        var shareBox = document.getElementById('shareBox');
                        shareBox.style.display = shareBox.style.display === 'block' ? 'none' : 'block';
                    };

                    document.getElementById('copyBtn').onclick = function() {
                        var copyText = document.getElementById('shareLink').innerText;
                        navigator.clipboard.writeText(copyText).then(function() {
                            alert('Link copied to clipboard!');
                        }, function(err) {
                            alert('Error copying link: ' + err);
                        });
                    };
                </script>
            </body>
            </html>
            <?php
        } else {
            echo "<p>No news found.</p>";
        }

        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
} else {
    echo "<p>No title provided.</p>";
}

// Close the database connection
$conn->close();
?>
