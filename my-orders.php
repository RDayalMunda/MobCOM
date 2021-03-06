<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    require('modules/header.php');

    ?>

</head>

<body class="bg-light">

    <!-- Navbar Start -->

    <?php

    require('modules/navbar.php');

    ?>

    <!-- Navbar End -->

    <div class="container-fluid my-3">
        <h4 class="font-weight-bold">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            My Account
        </h4>
    </div>

    <!-- Main Content Start -->

    <div class="container-fluid my-3">

        <div class="row">

            <!-- Left Sidebar Start -->

            <div class="col md-3">

                <nav class="list-group card-mycart mb-3">

                    <a class="list-group-item list-group-item-action" href="#">
                        Account overview
                    </a>
                    <a class="list-group-item list-group-item-action active" href="#">
                        My Orders
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        Settings
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        Log out
                    </a>

                </nav>

            </div>

            <!-- Left Sidebar End -->

            <!-- Right Side Start -->

            <div class="col-md-9">

                <!-- Order Card Start -->

                <div class="card card-mycart mb-4">

                    <!-- Delivery Deitail Start -->

                    <div class="card-header">
                        <strong class="mr-3">Order ID: 6123456789</strong>
                        <span>Order Date: 16 December 2018</span>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-8">

                                <h6 class="text-muted">Delivery to</h6>
                                <p>
                                    User Name
                                    <br>
                                    Phone 123456789
                                    <br>
                                    Email: username@hotmail.com
                                    <br>
                                    Location: User Address
                                    <br>
                                </p>

                            </div>

                            <div class="col-md-4">

                                <h6 class="text-muted">Payment</h6>

                                <span class="text-success">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    Cash On Delivery
                                </span>

                                <p>
                                    Subtotal: ₹ 17,249
                                    <br>
                                    Shipping fee: Free
                                    <br>
                                    <span>Total: ₹ 17,249</span>
                                </p>

                            </div>

                        </div>

                    </div>

                    <!-- Delivery Detail End -->

                    <!-- Order Detail Start -->

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <tbody>

                                <!-- Product Detail Start -->

                                <tr>

                                    <td width="65">
                                        <img class="img-xs border p-1" src="images/phone_images/samsung-galaxy-a21/samsung-galaxy-a21-front.jpeg">
                                    </td>
                                    <td>
                                        <p class=" mb-0">Samsung Galaxy A21s (Silver, 128 GB)</p>
                                        <span class="price text-muted">₹ 17,249</span>
                                    </td>
                                    <td>
                                        Seller
                                        <br>
                                        TrueComRetail
                                    </td>

                                    <td width="250">
                                        <a href="#" class="btn btn-outline-primary">Track order</a>
                                        <div class="dropdown d-inline-block">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary">More</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Return</a>
                                                <a href="#" class="dropdown-item">Cancel order</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                                <!-- Product Detail End -->

                            </tbody>

                        </table>

                    </div>

                </div>

                <!-- Order Card End -->

            </div>

            <!-- Main Content End -->

        </div>

    </div>

    <!-- Footer Start -->

    <?php

    require('modules/footer.php');

    ?>

    <!-- Footer End -->


</body>

</html>