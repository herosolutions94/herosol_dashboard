<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact List - Hero Solutions</title>
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
                                <h3>Contact</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Contact</a></li>
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
                                        <th width="10%">
                                            <p>#</p>
                                        </th>
                                        <th width="15%">
                                            <p>Name </p>
                                        </th>
                                        <th width="20%">
                                            <p>Email</p>
                                        </th>
                                        <th width="15%">
                                            <p>Phone No</p>
                                        </th>
                                        <th width="15%">
                                            <p>Country</p>
                                        </th>
                                        <th width="15%">
                                            <p>City</p>
                                        </th>
                                        <th width="10%">
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

                                                <div class="custm-cntnt">
                                                    <p>Abeera Asjid</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>Abdul12@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>95957549</p>
                                        </td>
                                        <td>
                                            <p>Pakistan</p>
                                        </td>
                                        <td>
                                            <p> Sargodha </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>Subhan Azam</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>Subhan@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>75849326</p>
                                        </td>
                                        <td>
                                            <p>India</p>
                                        </td>
                                        <td>
                                            <p> Dalhi </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>Ayat Sajid</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>Ayan2@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>8476529</p>
                                        </td>
                                        <td>
                                            <p>Pakistan</p>
                                        </td>
                                        <td>
                                            <p> Lahore </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>Ahmed Ali</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>Ahmed@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>84758947</p>
                                        </td>
                                        <td>
                                            <p>China</p>
                                        </td>
                                        <td>
                                            <p> Billging </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>Zubia Ahmed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>ZUB@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>95957549</p>
                                        </td>
                                        <td>
                                            <p>Pakistan</p>
                                        </td>
                                        <td>
                                            <p> Islamabad </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>Abdullah Tahir</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>Abdul12@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>95957549</p>
                                        </td>
                                        <td>
                                            <p>Pakistan</p>
                                        </td>
                                        <td>
                                            <p> Gujrat </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>ALi Tahir</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>alil12@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>95957549</p>
                                        </td>
                                        <td>
                                            <p>Pakistan</p>
                                        </td>
                                        <td>
                                            <p> Lahore </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>Anaya Shah</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>Anaya12@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>74587955</p>
                                        </td>
                                        <td>
                                            <p>Pakistan</p>
                                        </td>
                                        <td>
                                            <p> Sargodha </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>Abdullah Tahir</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>Abdul12@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>95957549</p>
                                        </td>
                                        <td>
                                            <p>Pakistan</p>
                                        </td>
                                        <td>
                                            <p> Sargodha </p>
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
                                            <div class="flex">

                                                <div class="custm-cntnt">
                                                    <p>Abdullah Tahir</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>
                                            <p>Abdul12@gmail.com</p>
                                            </p>
                                        </td>
                                        <td>
                                            <p>95957549</p>
                                        </td>
                                        <td>
                                            <p>Pakistan</p>
                                        </td>
                                        <td>
                                            <p> Sargodha </p>
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