<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forms - Hero Solutions</title>
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
                                <h3>Form Inputs</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href=""> Form Inputs</a></li>
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
                        <div class="form_fields">
                            <div class="flex">
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Default Input</h5>
                                                <p>Usage <code> type="text" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text́" class="input" placeholder="Enter Text">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Email</h5>
                                                <p>Usage <code> type="email" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="email" class="input" placeholder="herosol@email.com">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Password</h5>
                                                <p>Usage <code> type="password" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="password" class="input" placeholder="Password">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Number</h5>
                                                <p>Usage <code>type="number"</code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="number" class="input" value="1">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Search</h5>
                                                <p>Usage <code> type="search" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="Search" class="input" placeholder="Type to Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>URL</h5>
                                                <p>Usage <code> type="url" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="url" class="input"
                                                    placeholder="http://herosolutions.com.pk/">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Tel</h5>
                                                <p>Usage <code> type="tel" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="tel" class="input" placeholder="+1 9876543210">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>File</h5>
                                                <p>Usage <code> type="file" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input class="input" type="file" id="formFile">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Date & Time</h5>
                                                <p>Usage <code> type="datetime-local"</code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="datetime-local" class="input">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Date</h5>
                                                <p>Usage <code> type="date" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="date" class="input">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Time</h5>
                                                <p>Usage <code> type="time" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="time" class="input">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Week</h5>
                                                <p>Usage <code> type="week" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="week" class="input">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Month</h5>
                                                <p>Usage <code> type="month"s </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="month" class="input">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Range</h5>
                                                <p>Usage <code> type="range" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="range" class="input" min="0" max="100">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Color</h5>
                                                <p>Usage <code> type="color" </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="color" class="input" value="#4c7cf3">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mini-headings">
                                <h4>Input Type Properties</h4>
                            </div>
                            <div class="flex">
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Placeholder text</h5>
                                                <p>Usage <code> placeholder="....." </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text" class="input" placeholder="Placeholder Text">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Readonly
                                                </h5>
                                                <p>Usage <code> readonly </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text" class="input" placeholder="Readonly text"
                                                    readonly="">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Disabled</h5>
                                                <p>Usage <code> disabled </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text" class="input" name="inputDisabled"
                                                    placeholder="Disabled text" disabled="">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Static Value</h5>
                                                <p>Usage <code> .form-control-plaintext </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text" class="input-plaintext"
                                                    value="hersolutions@email.com" readonly="">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Default Value</h5>
                                                <p>Usage <code> value="....." </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text" class="input" value="Default Value">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Min Value</h5>
                                                <p>Usage <code>  minLength="....."</code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text" class="input" minlength="5" placeholder="Min Value">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Max Value</h5>
                                                <p>Usage <code> maxLength="....." </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text" class="input" maxlength="5" placeholder="Max Value">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Helper text
                                                </h5>
                                                <p>Usage <code> .form-text </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text" class="input" placeholder="Helper text">
                                                <small class="form-text">
                                                    Helper Text
                                                </small>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mini-headings">
                                <h4>General Textarea</h4>
                            </div>
                            <div class="flex">
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Textarea</h5>
                                                <p>Usage <code> textarea </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <textarea class="input" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Textarea With Placeholder</h5>
                                                <p>Usage <code> textarea </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <textarea class="input" rows="3" placeholder="Text Here..."></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Textarea With Helper Text
                                                </h5>
                                                <p>Usage <code> textarea </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <textarea class="input" rows="3"></textarea>
                                                <small class="form-text">Helper Text</small>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mini-headings">
                                <h4>Inline Checkboxes & Radios</h4>
                            </div>
                            <div class="flex two">
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Inline Custom Checkbox</h5>
                                                <p>Usage <code> form-check  </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <div class="form-check">
                                                    <input class="" type="checkbox" id="inlineCheckbox1"
                                                        value="option1">
                                                    <label for="inlineCheckbox1">1</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="" type="checkbox" id="inlineCheckbox2"
                                                        value="option2">
                                                    <label for="inlineCheckbox2">2</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="" type="checkbox" id="inlineCheckbox3" value="option3"
                                                        disabled="">
                                                    <label for="inlineCheckbox3">3
                                                        (disabled)</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Inline Custom Radios</h5>
                                                <p>Usage <code> form-check  </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <div class="form-check">
                                                    <input type="radio" class="custom-control-input"
                                                        id="customControlValidation2" name="radio-stacked">
                                                    <label for="customControlValidation2">1</label>
                                                </div>
                                                <div class="form-check ">
                                                    <input type="radio" class="custom-control-input"
                                                        id="customControlValidation3" name="radio-stacked">
                                                    <label for="customControlValidation3">2</label>
                                                </div>
                                                <div class="form-check ">
                                                    <input type="radio" class="custom-control-input"
                                                        id="customControlValidation4" name="radio-stacked" disabled="">
                                                    <label for="customControlValidation4">3</label>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Inline Custom Checkbox</h5>
                                                <p>Usage <code> form-check  </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <div class="form-check-block">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label for="inlineCheckbox1">1</label>
                                                </div>
                                                <div class="form-check-block">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label for="inlineCheckbox2">2</label>
                                                </div>
                                                <div class="form-check-block">
                                                    <input c type="checkbox" id="inlineCheckbox3" value="option3"
                                                        disabled="">
                                                    <label for="inlineCheckbox3">3
                                                        (disabled)</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Inline Custom Radios</h5>
                                                <p>Usage <code> form-check  </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <div class="form-check-block">
                                                    <input type="radio" class="custom-control-input"
                                                        id="customControlValidation2" name="radio-stacked">
                                                    <label for="customControlValidation2">1</label>
                                                </div>
                                                <div class="form-check-block">
                                                    <input type="radio" class="custom-control-input"
                                                        id="customControlValidation3" name="radio-stacked">
                                                    <label for="customControlValidation3">2</label>
                                                </div>
                                                <div class="form-check-block">
                                                    <input type="radio" class="custom-control-input"
                                                        id="customControlValidation4" name="radio-stacked" disabled="">
                                                    <label for="customControlValidation4">3</label>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>

                            </div>
                            <div class="mini-headings">
                                <h4>General Select</h4>
                            </div>
                            <div class="flex two">
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Select
                                                </h5>
                                                <p>Usage <code> Select </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <label for="">Select Number</label>
                                                <select class="input">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Multiple Select
                                                </h5>
                                                <p>Usage <code> multiple </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <label for="">Select Multiple Numbers</label>
                                                <select multiple="" class="input">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Select With Addons
                                                </h5>
                                                <p>Usage <code> multiple </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp-Grp txtGrp">
                                                <label class="input-group" for="Select01">Options</label>
                                                <select class="input grp-select" id="Select01">
                                                    <option selected="">Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Select With Buttons
                                                </h5>
                                                <p>Usage <code> multiple </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp-Grp txtGrp">
                                                <select class="input grp-select-btn" id="Select01">
                                                    <option selected="">Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <button class="webBtn mdBtn">Button</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mini-headings">
                                <h4>Input With Validaton</h4>
                            </div>
                            <div class="flex two">
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Input With Success</h5>
                                                <p>Usage <code> is-valid </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text́" class="input is-valid">
                                                <div class="valid-feedback">Success! You've done it.</div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="inner">
                                            <div class="text">
                                                <h5>Input With Danger</h5>
                                                <p>Usage <code> is-invalid </code></p>
                                            </div>
                                            <div class="text">
                                                <div class="code">
                                                    <i class="fa-light fa-code"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="txtGrp">
                                                <input type="text́" class="input is-invalid">
                                                <div class="invalid-feedback">
                                                    Sorry, that username's taken. Try another?
                                                </div>
                                            </div>
                                        </form>
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