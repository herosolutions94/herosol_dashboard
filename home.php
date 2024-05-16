<!DOCTYPE html>
<html lang="en">

<head>
    <title>Message - Hero Solutions</title>
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
                                <h3>Massages</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Message</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="dashTable">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Page Title & Meta Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="txtGrp">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Page Title <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_domain" value=""
                                                                        class="input" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="txtGrp">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Meta Title <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_domain" value=""
                                                                        class="input" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="txtGrp">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="form-label"> Site Email <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_domain" value=""
                                                                        class="input" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="txtGrp">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Meta Description<abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea rows="5" name="site_about"
                                                                        class="input"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="txtGrp">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="form-label">Meta Keywords <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea rows="5" name="site_about"
                                                                        class="input"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Banner</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="card ">
                                                            <div class="card-body preview">
                                                                <h5 class="card-title">Image</h5>
                                                                <div class="blog_img">
                                                                    <img src="images/no-image.svg" class="card-img-top"
                                                                        alt="">
                                                                </div>
                                                                <div class="in-upload">
                                                                    <button type="button" class="uploadImg">
                                                                        <i class="fa-regular fa-image"></i>choose
                                                                        another
                                                                        image
                                                                    </button>
                                                                    <input type="file" class="uploadFile">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="txtGrp">
                                                            <label class="form-label">Heading <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_youtube" value=""
                                                                class="input">
                                                        </div>
                                                        <div class="txtGrp">
                                                            <div class="txtGrp">
                                                                <label class="form-label" for="detail">Detail<abbr
                                                                        class="required"
                                                                        title="required">*</abbr></label>
                                                                <textarea class="ckeditor" nme="section1"
                                                                    id="editor1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="txtGrp">
                                                            <label class="form-label"> Search Placeholder <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_etsy" value="" class="input">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card ">
                                                                    <div class="card-body preview">
                                                                        <h5 class="card-title">Icon 1</h5>
                                                                        <div class="blog_img">
                                                                            <img src="images/no-image.svg"
                                                                                class="card-img-top" alt="">
                                                                        </div>
                                                                        <div class="in-upload">
                                                                            <button type="button" class="uploadImg">
                                                                                <i
                                                                                    class="fa-regular fa-image"></i>choose
                                                                                another
                                                                                image
                                                                            </button>
                                                                            <input type="file" class="uploadFile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_youtube" value=""
                                                                        class="input">
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea class="ckeditor" nme="section1"
                                                                        id="editor1"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card ">
                                                                    <div class="card-body preview">
                                                                        <h5 class="card-title">Icon 2</h5>
                                                                        <div class="blog_img">
                                                                            <img src="images/no-image.svg"
                                                                                class="card-img-top" alt="">
                                                                        </div>
                                                                        <div class="in-upload">
                                                                            <button type="button" class="uploadImg">
                                                                                <i
                                                                                    class="fa-regular fa-image"></i>choose
                                                                                another
                                                                                image
                                                                            </button>
                                                                            <input type="file" class="uploadFile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_youtube" value=""
                                                                        class="input">
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea class="ckeditor" nme="section1"
                                                                        id="editor1"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card ">
                                                                    <div class="card-body preview">
                                                                        <h5 class="card-title">Icon 3</h5>
                                                                        <div class="blog_img">
                                                                            <img src="images/no-image.svg"
                                                                                class="card-img-top" alt="">
                                                                        </div>
                                                                        <div class="in-upload">
                                                                            <button type="button" class="uploadImg">
                                                                                <i
                                                                                    class="fa-regular fa-image"></i>choose
                                                                                another
                                                                                image
                                                                            </button>
                                                                            <input type="file" class="uploadFile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_youtube" value=""
                                                                        class="input">
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea class="ckeditor" nme="section1"
                                                                        id="editor1"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="card ">
                                                                    <div class="card-body preview">
                                                                        <h5 class="card-title">Icon 4</h5>
                                                                        <div class="blog_img forth_icon">
                                                                            <img src="images/no-image.svg"
                                                                                class="card-img-top" alt="">
                                                                        </div>
                                                                        <div class="in-upload">
                                                                            <button type="button" class="uploadImg">
                                                                                <i
                                                                                    class="fa-regular fa-image"></i>choose
                                                                                another
                                                                                image
                                                                            </button>
                                                                            <input type="file" class="uploadFile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_youtube" value=""
                                                                        class="input">
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea class="ckeditor" nme="section1"
                                                                        id="editor1"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Featured Properties</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_facebook" value=""
                                                                        class="input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Link Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_twitter" value=""
                                                                        class="input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Link URL <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_twitter" value=""
                                                                        class="input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>How It Works</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="txtGrp">
                                                            <label class="form-label">Heading <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_twitter" value=""
                                                                class="input">
                                                        </div>
                                                        <div class="card ">
                                                            <div class="card-body preview">
                                                                <h5 class="card-title">Popup Video Poster</h5>
                                                                <div class="blog_img popup_vid">
                                                                    <img src="images/no-image.svg" class="card-img-top"
                                                                        alt="">
                                                                </div>
                                                                <div class="in-upload">
                                                                    <button type="button" class="uploadImg">
                                                                        <i class="fa-regular fa-image"></i>choose
                                                                        another
                                                                        image
                                                                    </button>
                                                                    <input type="file" class="uploadFile">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="txtGrp">
                                                            <label class="form-label">Heading <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_twitter" value=""
                                                                class="input">
                                                        </div>
                                                        <div class="card preview">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Popup Video</h5>
                                                                <video loop="" muted="" autoplay="" controls=""
                                                                    __idm_id__="38862849">
                                                                    <source
                                                                        src="/storage/videos/dc8A99OhR7Syc93N2z4Ye4A8nv7dDS9ACfg70JBv.mp4"
                                                                        type="video/mp4">
                                                                </video>
                                                                <div class="in-upload">
                                                                    <button type="button" class="uploadImg">
                                                                        <i class="fa-regular fa-image"></i>choose
                                                                        another
                                                                        File
                                                                    </button>
                                                                    <input type="file" class="uploadFile">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card ">
                                                                    <div class="card-body preview">
                                                                        <h5 class="card-title">Icon 1</h5>
                                                                        <div class="blog_img">
                                                                            <img src="images/no-image.svg"
                                                                                class="card-img-top" alt="">
                                                                        </div>
                                                                        <div class="in-upload">
                                                                            <button type="button" class="uploadImg">
                                                                                <i
                                                                                    class="fa-regular fa-image"></i>choose
                                                                                another
                                                                                image
                                                                            </button>
                                                                            <input type="file" class="uploadFile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_youtube" value=""
                                                                        class="input">
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea class="ckeditor" nme="section1"
                                                                        id="editor1"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card ">
                                                                    <div class="card-body preview">
                                                                        <h5 class="card-title">Icon 2</h5>
                                                                        <div class="blog_img">
                                                                            <img src="images/no-image.svg"
                                                                                class="card-img-top" alt="">
                                                                        </div>
                                                                        <div class="in-upload">
                                                                            <button type="button" class="uploadImg">
                                                                                <i
                                                                                    class="fa-regular fa-image"></i>choose
                                                                                another
                                                                                image
                                                                            </button>
                                                                            <input type="file" class="uploadFile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_youtube" value=""
                                                                        class="input">
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea class="ckeditor" nme="section1"
                                                                        id="editor1"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card ">
                                                                    <div class="card-body preview">
                                                                        <h5 class="card-title">Icon 3</h5>
                                                                        <div class="blog_img">
                                                                            <img src="images/no-image.svg"
                                                                                class="card-img-top" alt="">
                                                                        </div>
                                                                        <div class="in-upload">
                                                                            <button type="button" class="uploadImg">
                                                                                <i
                                                                                    class="fa-regular fa-image"></i>choose
                                                                                another
                                                                                image
                                                                            </button>
                                                                            <input type="file" class="uploadFile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_youtube" value=""
                                                                        class="input">
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea class="ckeditor" nme="section1"
                                                                        id="editor1"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="card ">
                                                                    <div class="card-body preview">
                                                                        <h5 class="card-title">Icon 4</h5>
                                                                        <div class="blog_img forth_icon">
                                                                            <img src="images/no-image.svg"
                                                                                class="card-img-top" alt="">
                                                                        </div>
                                                                        <div class="in-upload">
                                                                            <button type="button" class="uploadImg">
                                                                                <i
                                                                                    class="fa-regular fa-image"></i>choose
                                                                                another
                                                                                image
                                                                            </button>
                                                                            <input type="file" class="uploadFile">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Heading <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <input type="text" name="site_youtube" value=""
                                                                        class="input">
                                                                </div>
                                                                <div class="txtGrp">
                                                                    <label class="form-label">Text <abbr
                                                                            class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <textarea class="ckeditor" nme="section1"
                                                                        id="editor1"></textarea>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Update Our Listings</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="txtGrp">
                                                            <label class="form-label">Heading <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_youtube" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="blocks_1">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h3>Block 1</h3>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="card ">
                                                                        <div class="card-body preview">
                                                                            <h5 class="card-title">Popup Video Poster
                                                                            </h5>
                                                                            <div class="blog_img">
                                                                                <img src="images/no-image.svg"
                                                                                    class="card-img-top" alt="">
                                                                            </div>
                                                                            <div class="in-upload">
                                                                                <button type="button" class="uploadImg">
                                                                                    <i
                                                                                        class="fa-regular fa-image"></i>choose
                                                                                    another
                                                                                    image
                                                                                </button>
                                                                                <input type="file" class="uploadFile">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="txtGrp">
                                                                        <label class="form-label">Heading <abbr
                                                                                class="required"
                                                                                title="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" name="site_youtube" value=""
                                                                            class="input">
                                                                    </div>
                                                                    <div class="txtGrp">
                                                                        <div class="txtGrp">
                                                                            <textarea class="ckeditor" nme="section1"
                                                                                id="editor1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="txtGrp">
                                                                        <label class="form-label"> Search Placeholder
                                                                            <abbr class="required"
                                                                                title="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" name="site_etsy" value=""
                                                                            class="input">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="blocks_1">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h3>Block 2</h3>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="card ">
                                                                        <div class="card-body preview">
                                                                            <h5 class="card-title">Popup Video Poster
                                                                            </h5>
                                                                            <div class="blog_img">
                                                                                <img src="images/no-image.svg"
                                                                                    class="card-img-top" alt="">
                                                                            </div>
                                                                            <div class="in-upload">
                                                                                <button type="button" class="uploadImg">
                                                                                    <i
                                                                                        class="fa-regular fa-image"></i>choose
                                                                                    another
                                                                                    image
                                                                                </button>
                                                                                <input type="file" class="uploadFile">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="txtGrp">
                                                                        <label class="form-label">Heading <abbr
                                                                                class="required"
                                                                                title="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" name="site_youtube" value=""
                                                                            class="input">
                                                                    </div>
                                                                    <div class="txtGrp">
                                                                        <div class="txtGrp">
                                                                            <textarea class="ckeditor" nme="section1"
                                                                                id="editor1"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="txtGrp">
                                                                        <label class="form-label"> Search Placeholder
                                                                            <abbr class="required"
                                                                                title="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" name="site_etsy" value=""
                                                                            class="input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="card ">
                                                                        <div class="card-body preview">
                                                                            <h5 class="card-title">Image 1
                                                                            </h5>
                                                                            <div class="blog_img">
                                                                                <img src="images/no-image.svg"
                                                                                    class="card-img-top" alt="">
                                                                            </div>
                                                                            <div class="in-upload">
                                                                                <button type="button" class="uploadImg">
                                                                                    <i
                                                                                        class="fa-regular fa-image"></i>choose
                                                                                    another
                                                                                    image
                                                                                </button>
                                                                                <input type="file" class="uploadFile">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="txtGrp">
                                                                        <label class="form-label">Link 1 <abbr
                                                                                class="required"
                                                                                title="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" name="site_youtube" value=""
                                                                            class="input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="card ">
                                                                        <div class="card-body preview">
                                                                            <h5 class="card-title">Image 2
                                                                            </h5>
                                                                            <div class="blog_img">
                                                                                <img src="images/no-image.svg"
                                                                                    class="card-img-top" alt="">
                                                                            </div>
                                                                            <div class="in-upload">
                                                                                <button type="button" class="uploadImg">
                                                                                    <i
                                                                                        class="fa-regular fa-image"></i>choose
                                                                                    another
                                                                                    image
                                                                                </button>
                                                                                <input type="file" class="uploadFile">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="txtGrp">
                                                                        <label class="form-label">Link 1 <abbr
                                                                                class="required"
                                                                                title="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" name="site_youtube" value=""
                                                                            class="input">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body" style="padding: 0 11px;">
                                            <div class="table-responsive">
                                                <table class="table" id="rowRepeater">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th scope="col" width="25%">Heading</th>
                                                            <th scope="col" width="55%">Text</th>
                                                            <th scope="col">Order #</th>
                                                            <th scope="col">
                                                                <a class="badge badge-primary addNewRowTbl"
                                                                    href="javascript:void(0)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-plus-circle">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                                                    </svg>
                                                                </a>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr id="0">
                                                            <td scope="row">
                                                                <input type="text" name="blk_heading[]" class="input"
                                                                    placeholder="Heading" value="Simplicity">
                                                            </td>
                                                            <td>
                                                                <textarea class="input" name="blk_detail[]"
                                                                    placeholder="Text..."
                                                                    rows="8">Whether you are looking to rent an apartment or are a first-time home buyer, you must go through multiple systems and entities before you can finally move in. Loftus consolidates a variety of offerings into one simplified user-friendly platform to get you settled in faster. Our services are modularized; whether you are looking for a single offering or the complete bundle, our step-by-step workflow will guide you from start to finish.</textarea>
                                                            </td>
                                                            <td>
                                                                <input type="number" name="blk_order_no[]" class="input"
                                                                    placeholder="Order #" value="1">
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr id="1">
                                                            <td scope="row">
                                                                <input type="text" name="blk_heading[]" class="input"
                                                                    placeholder="Heading" value="Transparency">
                                                            </td>
                                                            <td>
                                                                <textarea class="input" name="blk_detail[]"
                                                                    placeholder="Text..."
                                                                    rows="8">At any point during the home buying or renting process, you may incur unforeseen costs and hidden fees. Loftus emphasizes transparency in all our offerings. We aim to minimize and remove redundant and unnecessary fees. As a tenant or a buyer, you can gauge what the competition is offering and verify your offers are being presented and considered. As an owner, easily browse through your offers to select the most competitive one for your needs.</textarea>
                                                            </td>
                                                            <td>
                                                                <input type="number" name="blk_order_no[]" class="input"
                                                                    placeholder="Order #" value="2">
                                                            </td>
                                                            <td>
                                                                <a class="badge badge-danger delNewRowTbl"
                                                                    href="javascript:void(0)">
                                                                    <i class="fa fa-minus-circle"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr id="2">
                                                            <td scope="row">
                                                                <input type="text" name="blk_heading[]" class="input"
                                                                    placeholder="Heading" value="Collaboration">
                                                            </td>
                                                            <td>
                                                                <textarea class="input" name="blk_detail[]"
                                                                    placeholder="Text..."
                                                                    rows="8">With its in-app messaging system, Loftus makes connecting directly with tenants, prospective buyers and sellers, and various third parties easy. No matter when and where you are, the real time responses help you stay engaged with interested parties. Plus, you’ll be able to stay on top of it all with push notifications and alerts that can be tailored for your priorities.</textarea>
                                                            </td>
                                                            <td>
                                                                <input type="number" name="blk_order_no[]" class="input"
                                                                    placeholder="Order #" value="3">
                                                            </td>
                                                            <td>
                                                                <a class="badge badge-danger delNewRowTbl"
                                                                    href="javascript:void(0)">
                                                                    <i class="fa fa-minus-circle"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="submit" class="webBtn" value="Update Settings">
                                            </div>
                                        </div>


                                    </div>
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