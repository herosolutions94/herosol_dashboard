<!DOCTYPE html>
<html lang="en">

<head>
    <title>Manage Page - Hero Solutions</title>
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
                                <h3>Manage Pages</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Manage Pages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dashTable">
                            <table class="dataTable display" id="basic-1">
                                <thead>
                                    <tr class="table-scnd-row message-table">
                                        <th width="12%">
                                            <p>Sr#</p>
                                        </th>
                                        <th width="61%">
                                            <p>Name</p>
                                        </th>
                                        <th width="20%">
                                            <p>Action</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bottom-cntnt" style="    height: 61px;">
                                        <td>
                                            <p>1</p>
                                        </td>
                                        <td>
                                            <p>Home</p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="Bt-btn" data-toggle="dropdown"
                                                    onclick="document.location='home.php';">
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>Edit Page
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt" style="    height: 61px;">
                                        <td>
                                            <p>2</p>
                                        </td>
                                        <td>
                                            <p>About</p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="Bt-btn" data-toggle="dropdown">
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>Edit Page
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt" style="    height: 61px;">
                                        <td>
                                            <p>3</p>
                                        </td>
                                        <td>
                                            <p>Sevices</p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="Bt-btn" data-toggle="dropdown">
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>Edit Page
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt" style="    height: 61px;">
                                        <td>
                                            <p>4</p>
                                        </td>
                                        <td>
                                            <p>FAQ</p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="Bt-btn" data-toggle="dropdown">
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>Edit Page
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bottom-cntnt" style="    height: 61px;">
                                        <td>
                                            <p>5</p>
                                        </td>
                                        <td>
                                            <p>Contact Us</p>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="Bt-btn" data-toggle="dropdown">
                                                    <i class="fa fa-pencil-square" aria-hidden="true"></i>Edit Page
                                                </button>
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