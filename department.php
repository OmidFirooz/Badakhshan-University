<?php

require "main.inc.php";
require "db.inc.php";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $departmentName = $_POST['departmentName'];
    $facultyName = $_POST['facultyName'];

    $sql = "INSERT INTO department(departmentName,faculty) VALUES ('$departmentName','$facultyName')";
    mysqli_query($conn, $sql);

}
?>


<body>

<div class="container mt-5">
    <?php 
        $query_read = 'SELECT * FROM Department';

        $result = mysqli_query($conn,$query_read);
        if(mysqli_num_rows($result)>0):
    ?>
    <div class="row justify-content-center custom-form-container">
        <div class="col-md-8">
            <table class="table table-success table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Department</th>
                        <th class="text-center">Faculty</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td><?php echo $row['depId']; ?></td>
                        <td><?php echo $row['departmentName']; ?></td>
                        <td><?php echo $row['faculty']; ?></td>
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
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST' class="row justify-content-center">
            <div class="custom-form-group">
                <label for="faculty" class="custom-form-label">Department Name</label>
                <input class="form-control" type="text" name="departmentName" class="form-control custom-input" required>
                <label for="faculty" class="custom-form-label">Faculty Name</label>
                <input class="form-control" type="text" name="facultyName" class="form-control custom-input" required>
            </div>
            <div class="text-center">
                <input class="btn custom-btn" type="submit" value="Add">
            </div> 
        </form>
    </div>
</div>

</body>