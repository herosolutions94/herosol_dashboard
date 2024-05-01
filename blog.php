<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog - Hero Solutions</title>
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
                                <h3>Blog</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Blog</a></li>
                                </ul>
                            </div>
                            <div class="text text2">

                                <button class="webBtn mdBtn greenBtn"><i class="fa-light fa-plus"></i>Add New</button>
                            </div>
                        </div>
                        <div class="dashTable">
                            <table class="dataTable display" id="basic-1">
                                <thead>
                                    <tr class="table-scnd-row blog-table">
                                        <th width="10%">
                                            <p>Sr#</p>
                                        </th>
                                        <th width="15%">
                                            <p>Photo</p>
                                        </th>
                                        <th width="53%">
                                            <p>Description</p>
                                        </th>
                                        <th width="12%">
                                            <p>Status</p>
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
                                            <div class="image-blog">
                                                <img src="images/blog-1.jpeg">
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Top 6 Techniques To Manifesting A Better Life</h6>
                                            <p class="blog-cntnt"> Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. </p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge success">Read</a>
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
                                            <div class="image-blog">
                                                <img src="images/blog-2.jpeg">
                                            </div>
                                        </td>
                                        <td>
                                            <h6>How Being Selfish Is the Best Thing You Can Do</h6>
                                            <p class="blog-cntnt"> Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. </p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge success">Read</a>
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
                                            <div class="image-blog">
                                                <img src="images/team-7.jpeg">
                                            </div>
                                        </td>
                                        <td>
                                            <h6>Top 6 Techniques To Manifesting A Better Life</h6>
                                            <p class="blog-cntnt"> Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. </p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="status badge success">Read</a>
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