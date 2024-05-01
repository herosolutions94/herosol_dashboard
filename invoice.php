<!DOCTYPE html>
<html lang="en">

<head>
    <title>Invoice - Hero Solutions</title>
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
                                <h3>Invoice</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Invoice</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- invoice -->
                        <div class="invoice_outer">
                            <div class="">
                                <div class="invoice_logo">
                                    <div class="in_logo">
                                        <img src="images/logo.png" alt="">
                                    </div>
                                    <h3>Invoice</h3>
                                </div>
                                <!-- <div class="inv_info">
                                    <ul>
                                        <li>
                                            <p>Date : <span>05/10/2018</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>Invoice # : <span>005</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>Status : <span>Paid</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="shipInfo">
                                    <div class="lftShip">
                                        <div class="innerShip">
                                            <h4>Bill Form:</h4>
                                            <div class="innerViewOrdList">
                                                <ul>
                                                    <li>
                                                        <i class="fi-user"></i> Aleena James
                                                    </li>
                                                    <li>
                                                        <i class="fi-envelope"></i> Aleena@gmail.com
                                                    </li>
                                                    <li>
                                                        <i class="fi-phone"></i> (293)-734-84329
                                                    </li>
                                                    <li>
                                                        <i class="fi-map-marker"></i> 1264 Custer Ave SE, Atlanta,
                                                        GA 30316, USA
                                                    </li>
                                                    <li>
                                                        <i class="fi-pushpin"></i> 40100
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rgtShip">
                                        <div class="innerShip">
                                            <h4>Bill To:</h4>
                                            <div class="innerViewOrdList">
                                                <ul>
                                                    <li>
                                                        <i class="fi-user"></i> Aleena James
                                                    </li>
                                                    <li>
                                                        <i class="fi-envelope"></i> Aleena@gmail.com
                                                    </li>
                                                    <li>
                                                        <i class="fi-phone"></i> (293)-734-84329
                                                    </li>
                                                    <li>
                                                        <i class="fi-map-marker"></i> 1264 Custer Ave SE, Atlanta,
                                                        GA 30316, USA
                                                    </li>
                                                    <li>
                                                        <i class="fi-pushpin"></i> 40100
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="checkList">
                                    <li class="_head">
                                        <div class="ser_no">
                                            <h4>#</h4>
                                        </div>
                                        <div class="pro_cart">
                                            <h4> Product</h4>
                                        </div>
                                        <div class="qty_cart">
                                            <h4>Quantity</h4>
                                        </div>
                                        <div class="price_cart">
                                            <h4>Price</h4>
                                        </div>
                                        <div class="price_total">
                                            <h4>Total</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ser_no">
                                            <p>1</p>
                                        </div>
                                        <div class="pro_cart">
                                            <div class="ico">
                                                <a href="?"><img src="images/iphone.jpeg" alt=""></a>
                                            </div>
                                            <div class="pro_name">
                                                <h4><a href="?">Iphone 18 Pro Max</a></h4>
                                                <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui
                                                    blanditiis praesentium voluptatum deleniti atque corrupti</p>
                                            </div>
                                        </div>
                                        <div class="qty_cart">
                                            <h4>3</h4>
                                        </div>
                                        <div class="price_cart">
                                            <div class="price">$70</div>
                                        </div>
                                        <div class="price_total">
                                            <div class="price">$2000</div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="orderTable topNegativeMrgn">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Subtotal:</td>
                                                <td class="price">$4363.64</td>
                                            </tr>
                                            <tr>
                                                <td>Indication shipping:</td>
                                                <td class="price">Free</td>
                                            </tr>
                                            <tr>
                                                <td>Discount:</td>
                                                <td class="price">$5.64</td>
                                            </tr>
                                            <tr>
                                                <td>Sales Tax:</td>
                                                <td class="price">$12.64</td>
                                            </tr>
                                            <tr>
                                                <td>Total:</td>
                                                <td class="price">$4363.64</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="bTn in_btn">
                                    <a href="?" class="webBtn greenBtn">Print Reciept</a>
                                    <a href="?" class="webBtn">Download Reciept</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>