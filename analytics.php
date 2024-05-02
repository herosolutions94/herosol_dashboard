<!DOCTYPE html>
<html lang="en">

<head>
    <title>Analytics - Hero Solutions</title>
    <?php require_once('includes/site-master.php'); ?>
</head>

<body>

    <div id="main-wrapper">
        <!-- sidebar -->
        <?php require_once('includes/sidebar.php'); ?>
        <div class="page-wrapper">
            <!-- header -->
            <?php require_once('includes/header.php'); ?>
            <main>
                <section id="dashbaord">
                    <div class="contain-fluid">
                        <div class="heading">
                            <div class="text">
                                <h3>Analytics</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Analytics</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- analytics -->
                        <div class="analytics">
                            <div class="analytic_grid">
                                <div class="flex">
                                    <div class="col">
                                        <div class="outer">
                                            <div class="inner">
                                                <h3>Unique Visit</h3>
                                                <div id="unique-visit" class="mt"></div>
                                            </div>
                                            <div class="bot">
                                                <h4>
                                                    <i class="fa-light fa-chevron-up text-success"></i> 12456
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="outer">
                                            <div class="inner">
                                                <h3>Total Visit</h3>
                                                <div id="total_visit" class="mt"></div>
                                            </div>
                                            <div class="bot">
                                                <h4>
                                                    <i class="fa-light fa-chevron-down text-danger"></i> 456
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="outer">
                                            <div class="inner">
                                                <h3>Bounce Rate</h3>
                                                <div id="bounce-rate" class="mt"></div>
                                            </div>
                                            <div class="bot">
                                                <h4>
                                                    <i class="fa-light fa-chevron-up text-success"></i> 223
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="outer">
                                            <div class="inner">
                                                <h3>Bounce Rate</h3>
                                                <div id="page_views" class="mt"></div>
                                            </div>
                                            <div class="bot">
                                                <h4>
                                                    <i class="fa-light fa-chevron-down text-danger"></i> 567
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- graph -->
                        <div class="analytic_grpah">
                            <div class="flex">
                                <div class="col">
                                    <div class="card">
                                        <div class="head">
                                            <h4>Total Revenue</h4>
                                            <div class="dates">
                                                <ul>
                                                    <li>
                                                        <h6>
                                                            <span></span>
                                                            2022
                                                        </h6>
                                                    </li>
                                                    <li>
                                                        <h6>
                                                            <span></span>
                                                            2023
                                                        </h6>
                                                    </li>
                                                    <li>
                                                        <h6>
                                                            <span></span>
                                                            2024
                                                        </h6>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="total-revenue"></div>
                                    </div>
                                </div>
                                <div class="colr">
                                    <div class="card">
                                        <div class="text">
                                            <h4>Sales Prediction</h4>
                                            <h2>$3,528</h2>
                                            <p>(150-165 Sales)</p>
                                        </div>
                                        <div class="circle">
                                            <div id="sales-prediction"></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="text">
                                            <h4>Sales Difference
                                            </h4>
                                            <h2>$4,316</h2>
                                            <p>(150-165 Sales)</p>
                                        </div>
                                        <div class="circle">
                                            <div id="sales-difference"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- calendar -->
                        <div class="card">
                            <div class="">
                                <div class=" calender-sidebar app-calendar">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                            <!-- BEGIN MODAL -->
                            <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="eventModalLabel">
                                                Add / Edit Event
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form action="">
                                                    <div class="col-md-12">
                                                        <div class="txtGrp">
                                                            <label>
                                                                <h6>Event Title</h6>
                                                            </label>
                                                            <input type="text" class="input">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-4">
                                                        <div>
                                                            <label>
                                                                <h6>Event Color</h6>
                                                            </label>
                                                        </div>
                                                        <div class="txtGrp">
                                                            <div class="form-check">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="customControlValidation2" name="radio-stacked">
                                                                <label for="customControlValidation2">Danger</label>
                                                            </div>
                                                            <div class="form-check ">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="customControlValidation3" name="radio-stacked">
                                                                <label for="customControlValidation3">Success</label>
                                                            </div>
                                                            <div class="form-check ">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="customControlValidation4" name="radio-stacked"
                                                                    disabled="">
                                                                <label for="customControlValidation4">Primary</label>
                                                            </div>
                                                            <div class="form-check ">
                                                                <input type="radio" class="custom-control-input"
                                                                    id="customControlValidation4" name="radio-stacked"
                                                                    disabled="">
                                                                <label for="customControlValidation4">Warning</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="webBtn smBtn grayBtn" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="button" class="webBtn smBtn green btn-update-event"
                                                data-fc-event-public-id="">
                                                Update changes
                                            </button>
                                            <button type="button" class="webBtn smBtn btn-add-event">
                                                Add Event
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->
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