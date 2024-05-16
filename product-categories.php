<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Categories - Hero Solutions</title>
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
                                <h3>Product List</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Product Categories</a></li>
                                </ul>
                            </div>
                            <div class="text text2">
                                <select class="form-select">
                                    <option selected="">November</option>
                                    <option value="1">February</option>
                                    <option value="2">May</option>
                                    <option value="3">April</option>
                                </select>
                                <a href="blog.php" class="webBtn greenBtn"><i class="fa-light fa-plus"></i>Add New
                                    product</a>
                            </div>
                        </div>
                        <div class="dashTable">
                            <table class="dataTable display" id="basic-1">
                                <thead>
                                    <tr class="table-scnd-row">
                                        <th width="10%">
                                            <p>Sr#</p>
                                        </th>
                                        <th width="20%">
                                            <p>Products</p>
                                        </th>
                                        <th width="20%">
                                            <p>Categories</p>
                                        </th>
                                        <th width="15%">
                                            <p>Price</p>
                                        </th>
                                        <th width="15%">
                                            <p>Date</p>
                                        </th>
                                        <th width="12%">
                                            <p>Status</p>
                                        </th>
                                        <th width="8%" style="display:table-cell;">
                                            <p>Action</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bottom-cntnt">
                                        <td>
                                            <p>1</p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/p1.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Curology Face wash</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Cosmetic Product </p>
                                        </td>
                                        <td>
                                            <p>$790</p>
                                        </td>
                                        <td>
                                            <p>July 5 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge success">InStock</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="order-detail.php">
                                                            <i class="fa fa-building" aria-hidden="true"></i>Detail </a>
                                                    </li>
                                                    <li>
                                                        <a href="" onclick="return confirm('Are you sure?');">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt">
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/p2.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Body Lotion</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Cosmetic Product</p>
                                        </td>
                                        <td>
                                            <p>$790</p>
                                        </td>
                                        <td>
                                            <p>July 5 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge success">InStock</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="order-detail.php">
                                                            <i class="fa fa-building" aria-hidden="true"></i>Detail </a>
                                                    </li>
                                                    <li>
                                                        <a href="" onclick="return confirm('Are you sure?');">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt">
                                        <td>
                                            <p>3</p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/p3.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Smart Watch</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Accessories</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge danger">Out of Stock</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="order-detail.php">
                                                            <i class="fa fa-building" aria-hidden="true"></i>Detail </a>
                                                    </li>
                                                    <li>
                                                        <a href="" onclick="return confirm('Are you sure?');">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt">
                                        <td>
                                            <p>4</p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/p4.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Glossy Solution</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Electronics</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge success">InStock</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="order-detail.php">
                                                            <i class="fa fa-building" aria-hidden="true"></i>Detail </a>
                                                    </li>
                                                    <li>
                                                        <a href="" onclick="return confirm('Are you sure?');">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt">
                                        <td>
                                            <p>5</p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/p5.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Derma-E</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>fashionelectronics</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge warning">Pending</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="order-detail.php">
                                                            <i class="fa fa-building" aria-hidden="true"></i>Detail </a>
                                                    </li>
                                                    <li>
                                                        <a href="" onclick="return confirm('Are you sure?');">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt">
                                        <td>
                                            <p>6</p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/p1.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Shampoo</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>Cosmetic Product</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge danger">Out of Stock</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="order-detail.php">
                                                            <i class="fa fa-building" aria-hidden="true"></i>Detail </a>
                                                    </li>
                                                    <li>
                                                        <a href="" onclick="return confirm('Are you sure?');">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>Delete </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>