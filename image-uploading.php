<!DOCTYPE html>
<html lang="en">

<head>
    <title>uploade Component - Hero Solutions</title>
    <?php require_once('includes/site-master.php'); ?>
</head>


<body>

    <div id="main-wrapper">
        <!-- sidebar -->
        <?php require_once('includes/sidebar.php'); ?>
        <div class="page-wrapper">
            <!-- header -->
            <?php require_once('includes/header.php'); ?>
            <!-- main -->
            <main>
                <section id="dashbaord">
                    <div class="contain-fluid">
                        <div class="heading">
                            <div class="text">
                                <h3>Upload Component</h3>
                                <ul>
                                    <li><a href="">Home</a> </li>
                                    <li class="active"><a href="">Upload Component</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- image -->
                        <div class="image-uploading">
                            <div class="card">
                                <div class="upload-container">
                                    <div id="drop-area">
                                        <h3>Drag & drop images, videos, or any file, or browse files on your computer
                                        </h3>
                                        <input type="file" id="fileElem" multiple accept="image/*">
                                        <label for="fileElem" class="webBtn">Select Image</label>
                                    </div>
                                    <progress id="progress-bar" value="0" max="100"></progress>
                                </div>
                                <!-- <div class="image-preview">
                                    <h3>Uploaded Image Preview</h3>
                                    <div class="image" id="image-preview">
                                        <img src="images/team-1.jpeg" alt="Uploaded Image">
                                    </div>
                                </div> -->

                            </div>
                        </div>
                        <!-- video -->
                        <div class="image-uploading">
                            <div class="card">
                                <div class="upload-container">
                                    <div id="drop-area">
                                        <h3>Drag & Drop or Select a Video File</h3>
                                        <input type="file" id="fileElem" accept="video/*">
                                        <label for="fileElem" class="webBtn">Select Video</label>
                                    </div>
                                    <progress id="progress-bar" value="0" max="100"></progress>
                                </div>
                                <!-- <div class="video-preview">
                                    <h3>Uploaded Video Preview</h3>
                                    <div class="video-prev" id="video-preview">
                                        <video></video>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</body>

<script>
// script.js
document.getElementById('drop-area').addEventListener('dragover', handleDragOver, false);
document.getElementById('drop-area').addEventListener('drop', handleFileSelect, false);
document.getElementById('fileElem').addEventListener('change', handleFileSelect, false);

function handleDragOver(evt) {
    evt.stopPropagation();
    evt.preventDefault();
    evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
}

function handleFileSelect(evt) {
    evt.stopPropagation();
    evt.preventDefault();

    const files = evt.dataTransfer ? evt.dataTransfer.files : evt.target.files;
    const formData = new FormData();

    for (let i = 0; i < files.length; i++) {
        formData.append('file', files[i]);
    }

    uploadFiles(formData);
}

function uploadFiles(formData) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload.php', true);

    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable) {
            const percentage = (e.loaded / e.total) * 100;
            document.getElementById('progress-bar').value = percentage;
        }
    };

    xhr.onload = function() {
        if (xhr.status === 200) {
            const imageUrl = xhr.responseText;
            document.getElementById('image-preview').src = imageUrl;
            document.getElementById('progress-bar').value = 0;
        } else {
            alert('Upload failed.');
        }
    };

    xhr.send(formData);
}
</script>

</html>