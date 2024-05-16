<!DOCTYPE html>
<html lang="en">

<head>
    <title>New Testimonial - Hero Solutions</title>
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
                                <h3>Add New Testimonial</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">New Testimonial</a></li>
                                </ul>
                            </div>
                            <div class="text text2">

                                <a href="blog.php" class="webBtn mdBtn greenBtn"><i
                                        class="fa-regular fa-arrow-left"></i>Cancel</a>
                            </div>
                        </div>
                        <div class="dashTable">

                            <div class="card editor_card">
                                <div class="card-header">
                                    <h5>Testimonial Block</h5>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card ">
                                                    <div class="card-body preview">
                                                        <h5 class="card-title">Image</h5>
                                                        <div class="blog_img">
                                                            <img src="images/no-image.svg" class="card-img-top" alt="">
                                                        </div>
                                                        <div class="in-upload">
                                                            <button type="button" class="uploadImg">
                                                                <i class="fa-regular fa-image"></i>choose another
                                                                image
                                                            </button>
                                                            <input type="file" class="uploadFile">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <form action="">
                                                    <div class="row switch-showcase">
                                                        <div class="col-md-12">
                                                            <div class="txtGrp media">
                                                                <label class="form-label">Status</label>
                                                                <div
                                                                    class="txtGrp-body text-end icon-state switch-outline">
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="status"><span
                                                                            class="switch-state bg-primary"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="txtGrp">
                                                                <label class="form-label" for="title">Name<abbr
                                                                        class="required"
                                                                        title="required">*</abbr></label>
                                                                <input class="input" id="title" type="text"
                                                                    name="title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="txtGrp">
                                                                <label class="form-label" for="title">Designation<abbr
                                                                        class="required"
                                                                        title="required">*</abbr></label>
                                                                <input class="input" id="title" type="text"
                                                                    name="title">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="txtGrp">
                                                                <label class="form-label" for="detail">Detail<abbr
                                                                        class="required"
                                                                        title="required">*</abbr></label>
                                                                <textarea class="ckeditor" nme="section1"
                                                                    id="editor1"></textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </form>


                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr>
                                <div class="card-footer text-end">
                                    <button class="webBtn" type="submit">Update Content <i
                                            class="fa fa-spinner fa-spin hidden"></i></button>
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