<?php
include('include/config.php');
include('include/head.php');
include('include/admin-nav.php');

?>


  <div class="contact-dash mt-5o">
    <h2>User Messages</h2>

    <?php
    $query = "SELECT * FROM messages";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        echo "<table border='1' cellpadding='10' cellspacing='0'>
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Message</th>
                  </tr>
                </thead>
                <tbody>";

        while ($row = $result->fetch_assoc()) {
            $name = htmlspecialchars($row['username']);
            $email = htmlspecialchars($row['email']);
            $message = htmlspecialchars($row['message']);

            echo "<tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$message</td>
                  </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>No messages found.</p>";
    }
    ?>
  </div>
</div>
