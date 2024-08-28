<?php
// Assuming you have already set up the database connection
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your database credentials
$connection = mysqli_connect("localhost", "root", "", "stay_free");

if (isset($_GET['id'])) {
    // Escape the email input to prevent SQL injection
    $email = mysqli_real_escape_string($connection, $_GET['id']);

    $query = "SELECT freeSessionVariable FROM patient WHERE p_mail = '$email'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $link = $row['freeSessionVariable'];

            if ($link == 1) {
                header("Location: AlreadyAttended.php");
                exit();
            } else {
                // Update the freeSessionVariable to 1
                $query = "UPDATE patient SET freeSessionVariable = 1 WHERE p_mail='$email'";
                $result = mysqli_query($connection, $query);

                if ($result) {
                    header("Location: Attend.php");
                    exit();
                } else {
                    echo "Error updating freeSessionVariable: " . mysqli_error($connection);
                }
            }
        } else {
            echo "No records found for the given email.";
        }
    } else {
        echo "Error executing the query: " . mysqli_error($connection);
    }

    mysqli_close($connection);
    exit();
}

exit();
?>
