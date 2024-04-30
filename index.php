<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - Hero Solutions</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body>

    <div id="main-wrapper">
        <!-- sidebar -->
        <?php require_once('includes/sidebar.php'); ?>
        <div class="page-wrapper">
            <!-- header -->
            <?php require_once('includes/header.php'); ?>
            <!-- main -->
            <main>
                <section id="dashbaord">
                    <div class="contain-fluid">
                        <div class="heading">
                            <div class="text">
                                <h3>Dashboard</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href=""> Dashboard</a></li>
                                </ul>
                            </div>
                            <div class="text text2">

                                <select class="form-select">
                                    <option selected="">November</option>
                                    <option value="1">February</option>
                                    <option value="2">May</option>
                                    <option value="3">April</option>
                                </select>
                                <button class="webBtn mdBtn greenBtn"><i class="fa-light fa-plus"></i>Create</button>
                            </div>
                        </div>
                        <div class="grids">
                            <div class="flex">
                                <div class="col">
                                    <div class="inner">
                                        <h3>Daily Sales</h3>
                                        <p>2,064</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <h3>Electric Usage</h3>
                                        <p>2,064</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <h3>Internet Bandwidth</h3>
                                        <p>2,064</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inner">
                                        <h3>Total Profit</h3>
                                        <p>2,064</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="graph_chat">
                            <div class="flex">
                                <div class="col">
                                    <div class="message-card card">
                                        <div class="head">
                                            <h4>Welcome Steave</h4>
                                            <p>You have 4 new messages</p>
                                        </div>
                                        <div class="message-body">
                                            <a href="" class="inner">
                                                <span class="icon">
                                                    <img src="images/user.jpeg" alt="">
                                                </span>
                                                <div class="text">
                                                    <div class="justify">
                                                        <h6>Mathew Anderson</h6>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                    <span class="para">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="" class="inner">
                                                <span class="icon">
                                                    <img src="images/user2.jpeg" alt="">
                                                    <span class="profile-status"></span>
                                                </span>
                                                <div class="text">
                                                    <div class="justify">
                                                        <h6>Bianca Anderson</h6>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                    <span class="para">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="" class="inner">
                                                <span class="icon">
                                                    <img src="images/user3.jpeg" alt="">
                                                    <span class="profile-status"></span>
                                                </span>
                                                <div class="text">
                                                    <div class="justify">
                                                        <h6>Andrew Johnson</h6>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                    <span class="para">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="" class="inner">
                                                <span class="icon">
                                                    <img src="images/user4.jpeg" alt="">
                                                </span>
                                                <div class="text">
                                                    <div class="justify">
                                                        <h6>Mark Strokes</h6>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                    <span class="para">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="" class="inner">
                                                <span class="icon">
                                                    <img src="images/user5.jpeg" alt="">
                                                    <span class="profile-status"></span>
                                                </span>
                                                <div class="text">
                                                    <div class="justify">
                                                        <h6>Mark, Stoinus & Rishvi..</h6>
                                                        <span class="time">9:30 AM</span>
                                                    </div>
                                                    <span class="para">Just see the my new admin!</span>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="colr">
                                    <div class="card">
                                        <div class="head">
                                            <h4>Product Calculation</h4>
                                            <div class="dates">
                                                <ul>
                                                    <li>
                                                        <h6>
                                                            <span></span>
                                                            2016
                                                        </h6>
                                                    </li>
                                                    <li>
                                                        <h6>
                                                            <span></span>
                                                            2023
                                                        </h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="product-calculation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card overview-table">
                            <div class="flex">
                                <div class="head">
                                    <h4>Sales Overview</h4>
                                    <p>Check the monthly sales</p>
                                </div>
                                <div class="month">
                                    <select class="form-select">
                                        <option selected="">November</option>
                                        <option value="1">February</option>
                                        <option value="2">May</option>
                                        <option value="3">April</option>
                                    </select>
                                </div>
                            </div>
                            <div class="highlight">
                                <div class="text">
                                    <h4>March 2023</h4>
                                    <p>Report for this month</p>
                                </div>
                                <div class="text">
                                    <h3>$3,690</h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Elite admin</td>
                                            <td><span class="badge success">Sale</span></td>
                                            <td>August 17, 2023</td>
                                            <td>
                                                <span class="text-success ">
                                                    $24</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Real Homes Theme</td>
                                            <td><span class="badge info">Extended</span></td>
                                            <td>February 25, 2023</td>
                                            <td>
                                                <span class="text-info ">
                                                    $1250</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ample Admin</td>
                                            <td><span class="badge info">Extended</span></td>
                                            <td>June 11, 2023</td>
                                            <td>
                                                <span class="text-info ">
                                                    $750</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Medical Pro WP</td>
                                            <td><span class="badge danger">Tax</span></td>
                                            <td>April 1, 2023</td>
                                            <td>
                                                <span class="text-danger ">
                                                    -$14</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>HostingPress html</td>
                                            <td><span class="badge warning">Sale</span></td>
                                            <td>July 22, 2023</td>
                                            <td>
                                                <span class="text-warning">
                                                    $24</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</body>

</html>