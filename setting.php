<!DOCTYPE html>
<html lang="en">

<head>
    <title>Site Settings - Hero Solutions</title>
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
                                <h3>Site Settings</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Site Settings</a></li>
                                </ul>
                            </div>
                            <div class="text text2">

                                <a href="blog.php" class="webBtn mdBtn greenBtn"><i
                                        class="fa-regular fa-arrow-left"></i>Cancel</a>
                            </div>
                        </div>
                        <div class="dashTable">
                            <div class="card">
                                <div class="card-header">
                                    <h5>General Detail</h5>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Site Domain <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_domain" value="" class="input"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Site Name <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_domain" value="" class="input"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Site Email <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_domain" value="" class="input"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Address <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <textarea rows="5" name="site_about"
                                                                class="input"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Site Email for receiving emails
                                                                <abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_email_send" value=""
                                                                class="input" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Site No-Reply Email <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_noreply_email" value=""
                                                                class="input" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Site Phone <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <input type="text" name="site_phone" value="" class="input"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Footer Copyright <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <textarea rows="5" name="site_address"
                                                                class="input"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Social Media</h5>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Facebook Link <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fab fa-facebook ic-left"></i>

                                                            <input type="text" name="site_facebook" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Twitter Link <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fab fa-twitter ic-left"></i>

                                                            <input type="text" name="site_twitter" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Instagram Link <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fab fa-instagram ic-left"></i>

                                                            <input type="text" name="site_instagram" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Youtube Link <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fab fa-youtube ic-left"></i>

                                                            <input type="text" name="site_youtube" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Spotify Link <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fab fa-spotify ic-left"></i>

                                                            <input type="text" name="site_spotify" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Etsy Link <abbr class="required"
                                                                    title="required">*</abbr>
                                                            </label>
                                                            <i class="fab fa-etsy ic-left"></i>

                                                            <input type="text" name="site_etsy" value="" class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Stripe Setting</h5>
                                </div>
                                <div class="card-body strip_it">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Payment Mode <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <div class="info">
                                                                <i class="fa fa-info"></i>
                                                                <div class="infoTip">3-digit security code usually found
                                                                    on
                                                                    the back of your card. American Express cards have a
                                                                    4-digit code located on the front.</div>
                                                            </div>
                                                            <select type="text" name="site_facebook" value=""
                                                                class="input">
                                                                <option value="1">--Select Mode--</option>
                                                                <option value="2">Testing</option>
                                                                <option value="3">Live</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Public Test Key <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fa fa-key ic-left"></i>

                                                            <input type="text" name="site_facebook" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Secret Test Key <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fa fa-key ic-left"></i>

                                                            <input type="text" name="site_twitter" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Public Live Key <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fa fa-key ic-left"></i>

                                                            <input type="text" name="site_youtube" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Secret Live Key <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fa fa-key ic-left"></i>

                                                            <input type="text" name="site_spotify" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Pay Pal</h5>
                                </div>
                                <div class="card-body strip_it">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> Payment Mode <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <div class="info">
                                                                <i class="fa fa-info"></i>
                                                                <div class="infoTip">3-digit security code usually found
                                                                    on
                                                                    the back of your card. American Express cards have a
                                                                    4-digit code located on the front.</div>
                                                            </div>
                                                            <select type="text" name="site_facebook" value=""
                                                                class="input">
                                                                <option value="1">--Select Mode--</option>
                                                                <option value="2">Testing</option>
                                                                <option value="3">Live</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> PayPal Testing Email <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fa fa-envelope ic-left"></i>
                                                            <input type="text" name="site_facebook" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="txtGrp">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label class="form-label"> PayPal live Email <abbr
                                                                    class="required" title="required">*</abbr>
                                                            </label>
                                                            <i class="fa fa-envelope ic-left"></i>

                                                            <input type="text" name="site_youtube" value=""
                                                                class="input">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Site Images</h5>
                                </div>
                                <div class="card-body strip_it">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="bg-site-margin">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    <div class="panel-title"> Logo Image </div>
                                                                    <div class="panel-options">
                                                                        <a href="javascript:void(0)">
                                                                            <i class="fa fa-chevron-down"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="fileinput fileinput-new">
                                                                        <input type="hidden">
                                                                        <div class="fileinput-new thumbnail"
                                                                            style="max-width: 310px;"
                                                                            data-trigger="fileinput">
                                                                            <img src="images/logo.png" alt="--">
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                                            style="max-width: 320px; max-height: 160px; line-height: 6px;">
                                                                        </div>
                                                                        <div>
                                                                            <span class="btn btn-white btn-file">
                                                                                <span class="fileinput-new">Select
                                                                                    image</span>
                                                                                <span
                                                                                    class="fileinput-exists">Change</span>
                                                                                <input type="file" name="logo_image"
                                                                                    accept="image/*">
                                                                            </span>
                                                                            <a href="#"
                                                                                class="btn btn-orange fileinput-exists"
                                                                                data-dismiss="fileinput">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    <div class="panel-title"> Favicon Image </div>
                                                                    <div class="panel-options">
                                                                        <a href="javascript:void(0)">
                                                                            <i class="fa fa-chevron-down"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="fileinput fileinput-new">
                                                                        <input type="hidden">
                                                                        <div class="fileinput-new thumbnail"
                                                                            style="max-width: 310px;"
                                                                            data-trigger="fileinput">
                                                                            <img src="images/logo.png" alt="--">
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                                            style="max-width: 320px; max-height: 160px; line-height: 6px;">
                                                                        </div>
                                                                        <div>
                                                                            <span class="btn btn-white btn-file">
                                                                                <span class="fileinput-new">Select
                                                                                    image</span>
                                                                                <span
                                                                                    class="fileinput-exists">Change</span>
                                                                                <input type="file" name="logo_image"
                                                                                    accept="image/*">
                                                                            </span>
                                                                            <a href="#"
                                                                                class="btn btn-orange fileinput-exists"
                                                                                data-dismiss="fileinput">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    <div class="panel-title"> Thumb Image </div>
                                                                    <div class="panel-options">
                                                                        <a href="javascript:void(0)">
                                                                            <i class="fa fa-chevron-down"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="fileinput fileinput-new">
                                                                        <input type="hidden">
                                                                        <div class="fileinput-new thumbnail"
                                                                            style="max-width: 310px;"
                                                                            data-trigger="fileinput">
                                                                            <img src="images/logo.png" alt="--">
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                                            style="max-width: 320px; max-height: 160px; line-height: 6px;">
                                                                        </div>
                                                                        <div>
                                                                            <span class="btn btn-white btn-file">
                                                                                <span class="fileinput-new">Select
                                                                                    image</span>
                                                                                <span
                                                                                    class="fileinput-exists">Change</span>
                                                                                <input type="file" name="logo_image"
                                                                                    accept="image/*">
                                                                            </span>
                                                                            <a href="#"
                                                                                class="btn btn-orange fileinput-exists"
                                                                                data-dismiss="fileinput">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group text-right">
                                                    <div class="col-md-12 text-center">
                                                        <button class="webBtn">Update Settings</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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