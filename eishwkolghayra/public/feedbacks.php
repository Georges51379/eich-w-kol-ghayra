<?php require '../private/dataProccessing.php'; ?>
<html>
  <head>

    <title>eich w kol ghayra</title>
    <?php include 'includes/head.inc.php'; ?>
  </head>

  <body>
<?php   include 'includes/arrow_to_top.inc.php'; 
        include 'navbar/navbar.php'; ?>

  <div class="wrapper">
  <!-- Feedback form -->
  <div class="feedback-form">
        <h2>Leave Your Feedback</h2>
        <form action="submit_feedback.php" method="post">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="feedback">Your Feedback:</label><br>
            <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" name="addFeedback" value="Submit Feedback">
        </form>
    </div>

    <!-- Display feedbacks -->
    <div class="feedbacks">
        <?php
        // Fetch and display feedbacks
        $sql = "SELECT * FROM feedbacks";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="card">
                    <div class="card-header">
                        <span class="username"><?php echo $row['usr_token']; ?></span>
                        <span class="date-of-joining"><?php echo $row['fd_create_date']; ?></span>
                    </div>
                    <div class="card-body">
                        <p class="feedback"><?php echo $row['fd_content']; ?></p>
                        <span class="date-of-feedback"><?php echo $row['fd_update_date']; ?></span>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p class='no-feedbacks'>No feedbacks yet.</p>";
        }
        ?>
    </div>
    
</div><!--END WRAPPER SECTION-->
  <script src="js/script.js"></script>
  <?php include 'navbar/footer.php'; ?>
  </body>

</html>