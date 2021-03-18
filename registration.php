

<?php
include "header.php";
?>
<div class='container'>
    <form class="row g-3" action="actionRegistration.php" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control" id="inputEmail4" placeholder="Enter your first name...">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control" id="inputPassword4" placeholder="Enter your last name...">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Student ID</label>
            <input type="text" name="id" class="form-control" id="inputAddress" placeholder="Enter your id...">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputAddress2" placeholder="Enter your email address...">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputCity" placeholder="Enter your password...">
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">Retype Password</label>
            <input type="password" name="cpassword" class="form-control" id="inputCity" placeholder="Again Enter your password...">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Registration</button>
        </div>
    </form>
</div>

<?php
include "footer.php";
?>
