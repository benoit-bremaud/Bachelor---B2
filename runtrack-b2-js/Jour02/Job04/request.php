<?php
require_once('connexion.php'); // Include the database connection file

function my_insert_student(string $email, string $fullname, string $gender, int $grade_id, string $birthdate) : bool {
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    // Validate date format (YYYY-MM-DD)
    if (!DateTime::createFromFormat('Y-m-d', $birthdate)) {
        return false;
    }

    // Establish a database connection
    $conn = connectToDatabase();

    // Prepare the insertion query
    $stmt = $conn->prepare("INSERT INTO student (email, fullname, gender, grade_id, birthdate) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $email, $fullname, $gender, $grade_id, $birthdate);

    // Execute the query
    $result = $stmt->execute();

    // Close the statement and the connection
    $stmt->close();
    $conn->close();

    return $result;
}

// Get data from the form using POST superglobal
$email = $_POST["email"];
$fullname = $_POST["fullname"];
$gender = $_POST["gender"];
$grade = $_POST["grade"];
$birthdate = $_POST["birthdate"];

// Call the insertion function and return the result
if (my_insert_student($email, $fullname, $gender, $grade, $birthdate)) {
    echo "success";
} else {
    echo "error";
}
?>
