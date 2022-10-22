<?php
    $servername = "localhost";
    $username = "root";
    $password = "sritwik2";
    $dbname = "splitWise";
     
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
     
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
     
    $sql = "SELECT * FROM activities WHERE sender_id = '20BCE1053'";
     
    $result = $conn->query($sql);

    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Styles/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid text-black">
            <h3 class="h3 ms-3"><a class="navbar-brand" href="#">Navbar</a></h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="leftDiv col-4">
                <div class="d-flex flex-column p-5 justify-content-center align-items-center">
                    <button type="button" class="btn red w-75 text-black" data-bs-toggle="modal" data-bs-target="#addExpenseModal"><h5 class="my-1">Add Expense</h5></button>
                    <button type="button" class="btn green mt-4 w-75 text-black" data-bs-toggle="modal" data-bs-target="#settleExpenseModal"><h5 class="my-1">Settle Expense</h5></button>

                    <!-- Add Expense Modal -->
                    <div class="modal" tabindex="-1" id="addExpenseModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title">Add Expense</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">Add Others</span>
                                        <input type="text" class="form-control" placeholder="Regno or Email" aria-label="Username">
                                    </div>
                                    <div class="input-group mb-4">
                                        <textarea class="form-control" aria-label="With textarea" placeholder="Description"></textarea>
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">₹</span>
                                        <input type="text" class="form-control" placeholder="0.00" aria-label="Username">
                                    </div>
                                    <p class="text-center h6">Paid by you and split equally</p>
                                    <h5 class="text-center">₹0.0 / person</h5>
                                    <div class="input-group my-4">
                                        <span class="input-group-text">Date</span>
                                        <input type="date" class="form-control" aria-label="Username">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn red">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settle Expense Modal -->
                    <div class="modal" tabindex="-1" id="settleExpenseModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header green">
                                    <h5 class="modal-title">Settle Expense</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <img src="../Static/default.png" alt="pic">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right mx-4" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                        </svg>
                                        <img src="../Static/default.png" alt="pic">
                                    </div>

                                    <h5 class="text-center mt-4">You paid Chandra Kiran Reddy</h5>

                                    <div class="input-group my-5 w-50 mx-auto">
                                        <span class="input-group-text">₹</span>
                                        <input type="text" class="form-control" placeholder="0.00" aria-label="Username">
                                    </div>
                                    <div class="input-group mt-5 mb-3 w-75 mx-auto">
                                        <span class="input-group-text">Date</span>
                                        <input type="date" class="form-control" aria-label="Username">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn green">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex flex-column me-5 pe-5 ps-4">
                    <div class="h4 d-flex flex-row justify-content-between mt-3">
                        <div>
                            Total Balance :
                        </div>
                        <div>
                            ₹ 100
                        </div>
                    </div>
                    <div class="h4 d-flex flex-row justify-content-between mt-5">
                        <div>
                            You Owe :
                        </div>
                        <div class="text-danger">
                            ₹ 50
                        </div>
                    </div>
                    <div class="h4 d-flex flex-row justify-content-between mt-5">
                        <div>
                            You are Owed :
                        </div>
                        <div class="text-success">
                            ₹ 150
                        </div>
                    </div>
                </div>
            </div>

            <div class="rigthDiv col d-flex flex-row justify-content-evenly pt-3">
                <div class="d-flex flex-column align-items-center">
                    <div class="h3">YOU OWE</div>
                    <hr class="border bg-black w-100">
                    <?php
                        while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <div class="mt-3 prof px-3 rounded-4">
                        <div class="d-flex flex-row">
                            <img src="../Static/default.png" style="border-radius: 50%; width: 100px; height: 100px;">
                            <div class="d-flex flex-column ms-4">
                                <h4 class="mt-3"><?php echo $rows["reciever"]; ?></h4>
                                <p class="h6 text-danger">You owe ₹<?php echo $rows["amount"]; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>

                <div class="vr"></div>

                <div class="d-flex flex-column align-items-center">
                    <div class="h3">YOU ARE OWED</div>
                    <hr class="border bg-black w-100">
                    <div class="mt-3 prof px-3 rounded-4">
                        <div class="d-flex flex-row">
                            <img src="../Static/default.png" style="border-radius: 50%; width: 100px; height: 100px;">
                            <div class="d-flex flex-column ms-4">
                                <h4 class="mt-3">Chandra Kiran Reddy</h4>
                                <p class="h6 text-success">Owes you ₹100</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="../Script/dashboard.js"></script>
    <script src="../Script/dashboard.php""></script>
</body>
</html>
