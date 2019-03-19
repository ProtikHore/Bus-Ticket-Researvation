<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    </head>
    <body>
        <div class="main-wrapper">
            <header class="header mainmenu_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="nav">
                                <li><a href=""><i class="fa fa-home"></i></a></li>
                                <li><a href="<?php echo e(route('home.index')); ?>">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Dropdown menu</a></li>
                                        <li><a href="">Dropdown menu</a>
                                            <ul>
                                                <li><a href="">Dropdown Item</a></li>
                                                <li><a href="">Dropdown Item</a></li>
                                                <li><a href="">Dropdown Item</a></li>
                                                <li><a href="">Dropdown Item</a></li>
                                                <li><a href="">Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Dropdown menu</a></li>
                                        <li><a href="">Dropdown menu</a></li>
                                        <li><a href="">Dropdown menu</a></li>
                                    </ul>
                                </li>
                                <li><a href="#footer">Footer Link Hash</a></li>
                                <li><a href="login.html">Log In</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center bus_heading">Online Bus Ticket Booking</h2>

                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <!-- Date input -->
                                            <label class="control-label" for="date">Date</label>
                                            <input class="form-control" id="date" name="date" type="date"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn text-center btn-block go_button">Go</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="available">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <h2 class="available_heading text-center">Dhaka To Sylhet Available Bus</h2>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="table_top text-center">
                                        <tr>
                                            <th>Bus Type</th>
                                            <th>Dep. Time</th>
                                            <th>Seats Available</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php $__currentLoopData = $bus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availablebus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <tbody>
                                        <tr>
                                            <td><?php echo e($availablebus->bus_type); ?></td>
                                            <td><?php echo e($availablebus->deprature_time); ?></td>
                                            <td><?php echo e($availablebus->available_seat); ?></td>
                                            <td><?php echo e($availablebus->price); ?></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success">View Bus Info</button>
                                                <!-- <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-info">Buy Tickets</button> -->
                                                <a href="<?php echo e(route('buyticket.index', $availablebus->id)); ?>">Buy Ticket</a>
                                                <!-- Modal -->
                                                
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>john@example.com</td>
                                            <td>john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>john@example.com</td>
                                            <td>john@example.com</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>
