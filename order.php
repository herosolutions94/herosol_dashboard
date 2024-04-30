<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order - Hero Solutions</title>
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
                                <h3>Dashboard</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href=""> Order</a></li>
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
                        <div class="dashTable">
                            <table class="dataTable display" id="basic-1">
                                <thead>
                                    <tr class="table-scnd-row">
                                        <th width="7%">
                                            <p>Sr#</p>
                                        </th>
                                        <th width="12%">
                                            <p>Order ID </p>
                                        </th>
                                        <th width="21%">
                                            <p>Customer Detail </p>
                                        </th>
                                        <th width="13%">
                                            <p>Phone No</p>
                                        </th>
                                        <th width="13%">
                                            <p>Amount</p>
                                        </th>
                                        <th width="13%">
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
                                            <p>#75859 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-1.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Abdullah Tahir</p>
                                                    <p>Abdul12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>985704585</p>
                                        </td>
                                        <td>
                                            <p>$790</p>
                                        </td>
                                        <td>
                                            <p>July 5 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Completed</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>#75859 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-1.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Abdullah Tahir</p>
                                                    <p>Abdul12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>985704585</p>
                                        </td>
                                        <td>
                                            <p>$790</p>
                                        </td>
                                        <td>
                                            <p>July 5 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Completed</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-3.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Cencled</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-4.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Completed</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-5.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Pending</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-6.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Cencled</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>7</p>
                                        </td>
                                        <td>
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-7.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Completed</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>8</p>
                                        </td>
                                        <td>
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-8.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Completed</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>9</p>
                                        </td>
                                        <td>
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-9.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Cencled</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>10</p>
                                        </td>
                                        <td>
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-10.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Pending</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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
                                            <p>11</p>
                                        </td>
                                        <td>
                                            <p>#64843 </p>
                                        </td>
                                        <td>
                                            <div class="flex">
                                                <div class="image">
                                                    <img src="images/team-10.jpeg">
                                                </div>
                                                <div class="cntnt">
                                                    <p>Arsalan Tahir</p>
                                                    <p>Ab12@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>343458533</p>
                                        </td>
                                        <td>
                                            <p>$721</p>
                                        </td>
                                        <td>
                                            <p>July 6 , 2022</p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status">Pending</a>
                                            </p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                                    <li>
                                                        <a href="">
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