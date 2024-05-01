<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Detail - Hero Solutions</title>
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
                                <h3>Order Detail</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href=""> Order detail</a></li>
                                </ul>
                            </div>
                            <div class="text text2">
                                <button class="webBtn mdBtn greenBtn"><i class="fa-light fa-plus"></i>New
                                    product</button>
                            </div>
                        </div>
                        <form action="" id="form">
                            <div class="table-bg" style="overflow-x: auto;">
                                <h4>Order#95850</h4>
                                <table class="table table-bordered tabl-detail">
                                    <tbody>
                                        <tr>
                                            <th width="16%"><strong>Order By</strong></th>
                                            <td width="17%">Elia</td>
                                            <th width="16%"><strong>Email</strong></th>
                                            <td width="17%">elia12@gmail.com</td>
                                            <th width="16%"><strong>Order Date</strong></th>
                                            <td width="17%">August 20, 2022 02:58:50</td>
                                        </tr>
                                        <tr>
                                            <th><strong>City</strong></th>
                                            <td>Sargodha</td>
                                            <th><strong>Country</strong></th>
                                            <td>Pakistan</td>
                                            <th><strong>Status</strong></th>
                                            <td><span class="status">Completed</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-bg" style="overflow-x: auto;">
                                <h4>Billing Detail</h4>
                                <table class="table table-bordered tabl-detail">
                                    <tbody>
                                        <tr>
                                            <th width="15%"><strong>Address</strong></th>
                                            <td width="35%">3 Templeby Way Northeast, Calgary, AB, Canada</td>
                                            <th width="15%"><strong>Zip/Postal Code</strong></th>
                                            <td width="35%">T1Y 5N7</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-bg" style="overflow-x: auto;">
                                <h4>Order Product</h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th class="text-center" width="10%"><strong>Image</strong></th>
                                            <th class="text-left"><strong>Title</strong></th>
                                            <th class="text-center" width="10%"><strong>Price</strong></th>
                                            <th class="text-center" width="10%"><strong>Quantity</strong></th>
                                            <th class="text-right" width="15%"><strong>Sub Total</strong></th>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><img src="images/smart-watch.webp" border="0"
                                                    height="40"></td>
                                            <td class="text-left">Smart Watch</td>
                                            <td class="text-center">$145.00</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$145.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><img src="images/iphone.jpeg" border="0"
                                                    height="40">
                                            </td>
                                            <td class="text-left">Roasted Prawns Coriander</td>

                                            <td class="text-center">$140.00</td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$140.00</td>
                                        </tr>

                                        <tr>
                                            <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                            <td class="text-right"><strong> $285.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right" colspan="4"><strong>Delivery Cost:</strong></td>
                                            <td class="text-right"><strong> $6.00</strong></td>
                                        </tr>

                                        <tr>
                                            <td class="text-right" colspan="4"><strong>Grand Total:</strong></td>
                                            <td class="text-right"><strong>$291.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-bg" style="overflow-x: auto;">
                                <h4>Shipping Details</h4>
                                <table class="table table-bordered tabl-detail">
                                    <tbody>
                                        <tr>
                                            <th width="16%"><strong>Contact Person</strong></th>
                                            <td width="17%">Ella</td>
                                            <th width="16%"><strong>Email</strong></th>
                                            <td width="17%">ella12@gmail.com</td>
                                            <th width="16%"><strong>Phone</strong></th>
                                            <td width="17%">73289374</td>
                                        </tr>
                                        <tr>
                                            <th><strong>City</strong></th>
                                            <td>Sargodha</td>
                                            <th><strong>Country</strong></th>
                                            <td>Pakistan</td>
                                            <th><strong>Status</strong></th>
                                            <td><span class="status">Completed</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <div class="radio-table">
                                    <label for="driver-first-name" class="">
                                        Status
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="radio" id="html" name="fav_language" value="HTML">
                                    <label for="html">Complete</label><br>
                                    <input type="radio" id="" name="not_language" value="HTML">
                                    <label for="html">Pending</label><br>
                                </div> -->
                                <div class="center-btn">
                                    <input type="submit" class="webBtn colorBtn">
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>