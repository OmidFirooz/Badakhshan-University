<?php

require "main.inc.php";
require "db.inc.php";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $facultyName = $_POST['facultyName'];

    $sql = "INSERT INTO faculty(facultyName) VALUES ('$facultyName')";
    mysqli_query($conn, $sql);

}
?>


<body>

<div class="container mt-5">
    <?php 
        $query_read = 'SELECT * FROM faculty';

        $result = mysqli_query($conn,$query_read);
        if(mysqli_num_rows($result)>0):
    ?>
    <div class="row justify-content-center custom-form-container">
        <div class="col-md-8">
            <table class="table table-success table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Faculty</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td><?php echo $row['fac_id']; ?></td>
                        <td><?php echo $row['facultyName']; ?></td>
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
?>
</div>


<div class="container">
    <div class="custom-form-container">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST' class="row justify-content-center">
            <div class="custom-form-group">
                <label for="faculty" class="custom-form-label">Faculty Name</label>
                <input class="form-control" type="text" name="facultyName" id="faculty" class="form-control custom-input" required>
            </div>
            <div class="text-center">
                <input class="btn custom-btn" type="submit" value="Add">
            </div>
        </form>
    </div>
</div>

</body>