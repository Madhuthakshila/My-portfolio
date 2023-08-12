<?php

function validateForm($data) {
    $errors = array();


    if (empty($data['project_name'])) {
        $errors[] = "Project name is required.";
    }

    
    return $errors;
}

function connectDatabase() {
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "myportfolio";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

function insertProject($data) {
    $conn = connectDatabase();

    
    $stmt = $conn->prepare("INSERT INTO projects(project_name, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $data['project_name'], $data['description']);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

function getProjects() {
    $conn = connectDatabase();
    
t
    
    $conn->close();
}

function updateProject($id, $data) {
    $conn = connectDatabase();


    $stmt = $conn->prepare("UPDATE projects SET project_name = ?, description = ? WHERE id = ?");
    $stmt->bind_param("ssi", $data['project_name'], $data['description'], $id);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

function deleteProject($id) {
    $conn = connectDatabase();


    $stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces are allowed";
        }
    }
    
    // Validate and sanitize email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    // Sanitize message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = sanitizeInput($_POST["message"]);
        // Additional validation or checks for the message can be added here
    }
}

function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>

  

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br><br>
        Message: <textarea name="message"><?php echo $message; ?></textarea>
        <span class="error"><?php echo $messageErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
