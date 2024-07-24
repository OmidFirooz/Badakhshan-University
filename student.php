<?php

require "main.inc.php";
require "db.inc.php";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dOfBirth = $_POST['dOfBirth'];
    $gender = $_POST['gender'];
    $enrDate = $_POST['enrDate'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];
    $photo = $_POST['photo'];
    $department = $_POST['department'];

    $sql = "INSERT INTO student(FirstName,LastName,DateOfBirth,Gender,EnrollmentDate,Email,PhoneNumber,Photo,Department) VALUES 
    ('$firstName','$lastName','$dOfBirth','$gender','$enrDate','$email','$phoneNo','$photo','$department')";
    mysqli_query($conn, $sql);
}
?>

<body>

<div class="container mt-5">
    <?php 
        $query_read = 'SELECT * FROM student';

        $result = mysqli_query($conn,$query_read);
        if(mysqli_num_rows($result)>0):
    ?>
    <div class="row justify-content-center custom-form-container-list">
        <div class="col-md-8">
            <h3>Students List</h3>
            <table class="table table-success table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Date of Birth</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">Enrollment Date</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center">Photo</th>
                        <th class="text-center">Department</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td><?php echo $row['StudentID']; ?></td>
                        <td><?php echo $row['FirstName']; ?></td>
                        <td><?php echo $row['LastName']; ?></td>
                        <td><?php echo $row['DateOfBirth']; ?></td>
                        <td><?php echo $row['Gender']; ?></td>
                        <td><?php echo $row['EnrollmentDate']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['PhoneNumber']; ?></td>
                        <td><?php echo $row['Photo']; ?></td>
                        <td><?php echo $row['Department']; ?></td>
                    </tr>
                    <?php
                    endwhile;
                    ?>  
                </tbody>
            </table>
        </div>
    </div>
<?php
    else:
        echo "No record found.";
    endif;
    mysqli_close($conn)
?>
</div>


<div class="container">
    <div class="custom-form-container">
        <h3>Add New Student</h3>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST' class="row justify-content-center">
            <div class="custom-form-group">
                <label for="faculty" class="custom-form-label">First Name</label>
                <input class="form-control" type="text" name="firstName" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Last Name</label>
                <input class="form-control" type="text" name="lastName" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Date of Birth</label>
                <input class="form-control" type="text" name="dOfBirth" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Gender</label>
                <input class="form-control" type="text" name="gender" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Enrollment Date</label>
                <input class="form-control" type="text" name="enrDate" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Email</label>
                <input class="form-control" type="email" name="email" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Phone Number</label>
                <input class="form-control" type="text" name="phoneNo" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Photo</label>
                <input class="form-control" type="text" name="photo" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Department</label>
                <input class="form-control" type="text" name="department" class="form-control custom-input" required>
            </div>
            <div class="text-center">
                <input class="btn custom-btn" type="submit" value="Add">
            </div> 
        </form>
    </div>
</div>

</body>