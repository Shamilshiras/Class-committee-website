<?php
session_start();
include("connect.php");

// Check if session variables are set and correct
if (!isset($_SESSION['student_email']) || $_SESSION['role'] != 'student') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Homepage</title>
    <link rel="stylesheet" href="style_homepage.css">
</head>
<body>

     <!-- Navigation Bar -->
     <nav class="navbar">
        <div class="logo">Class Committee</div>
        <div class="department-text">Computer Science & Design</div> <!-- Replaced search bar -->
        <div class="nav-links">
            <a href="student_profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <!-- Categories Section -->
    <div class="categories">
        <div class="category" onclick="window.location.href='student_complaints.php'">📌 Complaints</div>
        <div class="category" onclick="window.location.href='student_atten.php'">📊 Attendance</div>
        <div class="category" onclick="window.location.href='student_timetable.php'">📅 Timetable</div>
        <div class="category" onclick="window.location.href='student_event.php'">📅 Events</div>
    </div>

    <!-- Main Content Wrapper -->
    <div class="main-wrapper">

        <!-- Mission Section -->
        <div class="mission-box">
            <h3>🎯 Our Mission</h3>
            <p>Our mission is to create a collaborative and engaging learning environment where students and faculty can interact effectively.</p>
        </div>

        <!-- Center Content -->
        <div class="main-content">
            <div class="banner">
                <h2>Welcome to the Class Committee Portal</h2>
                <p>Stay updated with the latest announcements and events.</p>
            </div>

            <div class="sections">
                <div class="card" onclick="window.location.href='student_survey.php'">📈 Survey</div>
                <div class="card" onclick="window.location.href='chat.php'">📆 Chat</div>
                <div class="card" onclick="window.location.href='student_poll.php'">📩 Poll</div>
                <div class="card" onclick="window.location.href='poll_results.php'">📩 Poll Results</div>
            </div>

            <!-- Welcome Message -->
            <div class="welcome-message">
                <p>
                    <?php 
                    if (isset($_SESSION['student_email'])) {
                        $email = $_SESSION['student_email'];
                        $query = mysqli_query($conn, "SELECT firstName, lastName FROM students WHERE email='$email'");
                        if ($row = mysqli_fetch_array($query)) {
                            echo "Welcome, " . $row['firstName'] . " " . $row['lastName'];
                        } else {
                            echo "No user found.";
                        }
                    } else {
                        header("Location: student_login.php");
                        exit();
                    }
                    ?>
                </p>
            </div>
        </div>

        <!-- Vision Section -->
        <div class="vision-box">
            <h3>🚀 Our Vision</h3>
            <p>To revolutionize education by bridging the gap between students and faculty through an innovative and user-friendly platform.</p>
        </div>

    </div>

</body>
</html>
