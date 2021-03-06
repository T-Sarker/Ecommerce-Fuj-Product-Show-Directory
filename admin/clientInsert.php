<?php include "inc/header.php" ?>
<?php include '../classes/clientClass.php' ?>
<?php

    $cc = new ClientClass();

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {
        
        $insertBanner = $cc->clientInsertIntoDB($_POST,$_FILES);
    }


?>

<?php include "inc/sidebar.php" ?>
<div id="right-panel" class="right-panel">
    <?php include "inc/secHeader.php" ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <h2>Add Client <small><a href="clientList.php" class="btn btn-primary">Client List</a></small></h2>
        <?php
            if (isset($insertBanner)) {
                
        ?>
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> <?php echo $insertBanner; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
                }
            ?>
        <?php
            if (isset($$deleteItem)) {
                
        ?>
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-Danger">Error</span> <?php echo $$deleteItem; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
                }
            ?>
        <form class="mt-3" action="" method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <div class="form-group">
                        <label for="image">Banner Image</label>
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="image" placeholder="Enter Company Name" required accept="image/*">
                        <small>Size: 166px X 110px</small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" name="company" class="form-control" id="company" aria-describedby="company" placeholder="Enter Company Name" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="altText">Alt Text</label>
                        <input type="text" name="altText" class="form-control" id="altText" aria-describedby="altText" placeholder="Enter Alt text" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</div>
<?php include "inc/footer.php" ?>