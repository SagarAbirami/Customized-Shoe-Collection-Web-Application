<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $raw_password = $_POST['password'];

    if ($user && $raw_password) {
        $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO login (username, password) VALUES (?, ?)";
        $stmt = $connection->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $user, $hashed_password);

            if ($stmt->execute()) {
                header("Location: design.html?login=success");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $connection->error;
        }
    } else {
        echo "Both username and password are required!";
    }
}

$connection->close();
?>
