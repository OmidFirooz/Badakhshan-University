<?php

require "main.inc.php";
require "db.inc.php";

if ($_SERVER['REQUEST_METHOD']=="POST"){
    $facultyName = $_POST['facultyName'];

    $sql = "INSERT INTO faculty(facultyName) VALUES ('$facultyName')";
    mysqli_query($conn, $sql);

}

mysqli_close($conn);


?>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST' class="row row-cols-lg-auto g-3 align-items-center" style="margin: auto 100px;justify-content:center;align-items:center">
    <div class="form-control mt-2 mb-2" style="height:fit-content;width:50rem;margin:10rem auto">
        <input class="form-control" type="text" name="facultyName" id="faculty">
        <input class="btn btn-primary" type="submit" value="Add">
    </div>
</form>