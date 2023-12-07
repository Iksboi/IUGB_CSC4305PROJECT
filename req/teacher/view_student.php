<?php



session_start();
include 'C:\xampp\htdocs\IUGB_CSC4305PROJECT\DB_connection.php';
//$course_id = $_GET['course_id'];




if (isset($_GET['course_id'])) {
    $course_id = $_GET['course_id'];

    echo "course ID: $course_id";

} else {
    echo "course ID not found in the session.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="img\logo\logo.png">
</head>
<body>
    <br>
    <div class="container">
        <h3>Students in this class</h3>
        <div>
            <a href="teacher_home.php" class="text-decoration-none">Go back to homepage</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Course ID</th>             
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
    <?php
    
    $sql = "SELECT student_id FROM `student_course` WHERE course_id = $course_id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $student_id = $row['student_id'];

            echo '
            <tr>
                <th scope="row">' . $student_id . '</th>
                <td>'.$course_id.'</td>
                <td>
                    <a href="assign_grade.php" class="text-dark">Assign grade</a>
                </td>
            </tr>';
        }
    }
    ?>
</tbody>

        </table>
    </div>

    <div class="text-center text-light">
        <> Copyright &copy; 2023 International University of Grand Bassam. All rights reserved.  </>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
