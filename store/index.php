<?php
    require_once("db/connection.php");
?>
<html>

<head>
    <title>ViniStore</title>
    <link rel="stylesheet" href="css/top.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4d48954776.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="ct-general">
        <div class="ct-top">
        </div>
        <div class="ct-body">
            <div class="ct-title-form">
                <h3>
                    <i class="fas fa-user-alt"></i>
                    <label>Register</label>
                </h3>
            </div>
            <div class="form-register">
                <form class="row g-3" action="insert.php" method="POST">
                    <div class="col-12">
                        <label for="inputName" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Ex.: Harry Potter">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" >
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="inputAddress"  placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select" name="inputState">
                            <option selected>Choose...</option>
                            <option>SP</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZipCode" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZipCode" name="inputZipCode">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="ct-footer">
        </div>
    </div>
</body>

</html>