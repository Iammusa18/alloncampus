<?php
/**
*  Admin area main view.only one admin sir
//controllers\admin handles the validation and checks the type of user then show screenwithout button BUT if it is admin show this
 */
?>
 
<div class="container-fluid" xmlns="http://www.w3.org/1999/html">
    <nav class="row">
        <nav class="navbar navbar-default" style="padding-top: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">Admin Panel</span>
            </div>
            <div class="collapse navbar-collapse navbar-inverse" id="navbar-main">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="#front">
                            <i class="glyphicon glyphicon-link"></i>
                            Front Page
                        </a>
                    </li>
                    
                    <li>
                        <a href="#logout">
                            <i class="glyphicon glyphicon-log-out"></i>
                            Logout
                        </a>
                    </li>
                    <li>
                        <a class="" href="#addform" data-toggle="modal">
                            <i class="glyphicon glyphicon-plus"></i>
                            Add article
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="section-modal modal fade" id="addform" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Add/edit article</h3>
                </div>
            </div>
            <div class="row">

                <form>
                    <div id="errors" class="alert alert-danger hidden">
                        <strong>Error: check all required fields!</strong>
                    </div>
                    <input type="hidden" id="formId">
                    <div class="form-group">
                        <label for="formCategory">Category *</label>
                        <select class="form-control" id="formCategory">
                            <option value="" disabled selected>Select category</option>
                            <option value="1">Sports</option>
                            <option value="2">Night Life</option>
                            <option value="3">Societies</option>
                            <option value="4">Squares</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formTitle">Title *</label>
                        <input class="form-control" id="formTitle">
                    </div>
                    <div class="form-group">
                        <label for="formSubtitle">Subtitle</label>
                        <input class="form-control" id="formSubtitle">
                    </div>
                    <div class="form-group">
                        <label for="formOnDate">Event Date</label>
                        <input type="date" class="form-control" id="formOnDate">
                    </div>
                    <div class="form-group">
                        <label for="formImage">Image</label>
                        <input class="form-control" id="formImage">
                    </div>
                    <div class="form-group">
                        <label for="formContent">Content *</label>
                        <textarea class="form-control" id="formContent" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <a href="#" id="addButton" class="btn btn-default btn-lg pull-right"><i
                            class="glyphicon glyphicon-save"></i> Save</a>
                        </div>
                    </form>

                </div><!-- /.row -->
            </div>
        </div>
    </div>

    <div class="container" id="tabGroup">
        <div class="row panel">
            <div class="panel-heading">
                <h3><a data-toggle="collapse" data-parent="#tabGroup" href="#sportsTab">Sports <span
                    class="caret"></span></a></h3>
                </div>
                <div id="sportsTab" class="col-xs-12 collapse in">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <?php  

                            if(isset( $_SESSION["type"])){
                                if( $_SESSION["type"]=="admin"){
                                    ?>
                                    <th>Actions</th>
                                  <?php 
                              }
                          }
                                    ?>
                                </thead>
                                <tbody id="sportsTbl">
                                    <?php
                $list = Article::getList(1); //Show first tab articles

                include "tabs.php";
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="row panel">
    <div class="panel-heading">
        <h3><a data-toggle="collapse" data-parent="#tabGroup" href="#nightLifeTab">Night Life <span
            class="caret"></span></a></h3>
        </div>
        <div id="nightLifeTab" class="col-xs-12 collapse">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                      <?php 
                if(isset( $_SESSION["type"])){
                                if( $_SESSION["type"]=="admin"){
                                    ?>
                                    <th>Actions</th>
                                  <?php 
                              }
                          }
                                    ?>
                </thead>
                <tbody id="nightTbl">
                    <?php
                $list = Article::getList(2); //Show second tab articles

                include "tabs.php";
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="row panel">
    <div class="panel-heading">
        <h3><a data-toggle="collapse" data-parent="#tabGroup" href="#societiesTab">Societies <span
            class="caret"></span></a></h3>
        </div>
        <div id="societiesTab" class="col-xs-12 collapse">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                     <?php 
                if(isset( $_SESSION["type"])){
                                if( $_SESSION["type"]=="admin"){
                                    ?>
                                    <th>Actions</th>
                                  <?php 
                              }
                          }
                                    ?>
                </thead>
                <tbody>
                    <tbody id="socieitiesTbl">
                        <?php
                $list = Article::getList(3); //Show third tab articles

                include "tabs.php";
                ?>
            </tbody>
        </table>
    </div>
</div>

<div class="row panel">
    <div class="panel-heading">
        <h3><a data-toggle="collapse" data-parent="#tabGroup" href="#squaresTab">Squares <span class="caret"></span></a>
        </h3>
    </div>
    <div id="squaresTab" class="col-xs-12 collapse">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                <?php 
                if(isset( $_SESSION["type"])){
                                if( $_SESSION["type"]=="admin"){
                                    ?>
                                    <th>Actions</th>
                                  <?php 
                              }
                          }
                                    ?>
            </thead>
            <tbody id="squaresTbl">
                <?php
                $list = Article::getList(4); //Show fourth tab articles

                include "tabs.php";
                ?>
            </tbody>
        </table>
    </div>
</div>


<div class="row panel">
    <div class="panel-heading">
        <h3><a data-toggle="collapse" data-parent="#tabGroup" href="#imagesTab">Images <span
            class="caret"></span></a></h3>
        </div>
        <div id="imagesTab" class="col-xs-12 collapse">
            <h4>Upload new image</h4>
            <div id="uploadError" class="alert alert-danger hidden">
            </div>
            <div id="uploadSuccess" class="alert alert-success hidden">
                Image uploaded!
            </div>
            <form id="imageForm" class="form-inline" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <input type="file" id="imageFile" name="imageFile">
                </div>
                <div class="form-group">
                    <button type="submit" id="addFile" class="btn btn-default btn-sm"><i
                        class="glyphicon glyphicon-upload"></i> Upload image
                    </button>
                </div>
            </form>
            <hr>
            <h4>Image List</h4>
            <div id="imageList">
                <?php
                //showing images list
                $images = glob("../images/uploads/*.{jpg,png,jpeg}", GLOB_BRACE);
                array_multisort(array_map('filemtime', $images), SORT_NUMERIC, SORT_DESC, $images);
                include "../views/images.php";
                ?>
            </div>
        </div>
    </div>


</div>
<script>

    function updateImages() { //update images list when new image loaded / deleted
        $.post(
            'controllers/image.php',
            {
                action: 'list' //action for updating list ... i think this is action for uodation form ok
            },
            function (data) {
                $('#imageList').html(data);
            }
            );
    }

    function updateTab(id, cat) { //update tab when new article added/deleted
        $.post(
            'controllers/article.php',
            {
                action: 'getTabs',
                category: cat
            },
            function (data) {
                $('#' + id).html(data);
            }
            );
    }

    function updateTabs() { //update all tabs
        updateTab('sportsTbl', 1);
        updateTab('nightTbl', 2);
        updateTab('socieitiesTbl', 3);
        updateTab('squaresTbl', 4);
    }

    $(document).ready(function () {
        $('#imageForm').on('submit', function (e) { // new image upload request
            e.preventDefault();
            data = new FormData(this);
            data.append('action', 'upload');

            $.ajax({
                url: 'controllers/image.php',
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#imageFile').val("");
                    data = JSON.parse(data);
                    if (data.success) {
                        updateImages();
                        $('#uploadSuccess').removeClass('hidden');
                        $('#uploadError')
                        .addClass('hidden')
                        .html('');
                    } else {
                        $('#uploadSuccess').addClass('hidden');
                        $('#uploadError')
                        .removeClass('hidden')
                        .html('<strong>' + data.error + '</strong>');
                    }
                }
            });
        });


        $('a[href=#front]').on('click', loadFront); //Front page link action

        $('a[href=#logout]').on('click', function () { //Logout link action
            $.post(
                'controllers/admin.php',
                {
                    action: 'logout'
                },
                function () {
                    loadFront();
                });
            return false;
        });

        $(document).on('click', '[data-article]', function () { //edit article link action - shows form
            $.post(
                'controllers/article.php',
                {
                    action: 'info',
                    id: $(this).attr('data-article')
                }, //holds data that come from request and then validate this data
                function (data) {
                    if (data.id) {
                        $('#formId').val(data.id);
                        $('#formTitle').val(data.title);
                        $('#formSubtitle').val(data.subtitle);
                        $('#formCategory').val(data.category);
                        $('#formImage').val(data.image);
                        $('#formContent').val(data.content);
                        $('#formOnDate').val(data.onDate);
                        $('#addform').modal('show');
                    }
                },
                'json');//this turns it to JSON then you encode in other files
            return false;
        });

        $(document).on('click', '[data-delete]', function () { //delete arcticle link action
            $.post(
                'controllers/article.php',
                {
                    action: 'delete',
                    id: $(this).attr('data-delete')
                },
                function (data) {
                    updateTabs();
                });
            return false;
        });
        $(document).on('click', '[data-unactive]', function () { //delete arcticle link action
            $.post(
                'controllers/article.php',
                {
                    action: 'unactive',
                    id: $(this).attr('data-unactive')
                },
                function (data) {
                    updateTabs();
                });
            return false;
        });
         $(document).on('click', '[data-approve]', function () { //delete arcticle link action
            $.post(
                'controllers/article.php',
                {
                    action: 'approve',
                    id: $(this).attr('data-approve')
                },
                function (data) {
                    updateTabs();
                });
            return false;
        });

        $(document).on('click', '[data-delete-image]', function () { //delete image link action
            $.post(
                'controllers/image.php',
                {
                    action: 'delete',
                    file: $(this).attr('data-delete-image')
                },
                function (data) {
                    updateImages();
                });
            return false;
        });

        $(document).on('click', '[data-copy-image]', function () { //copy image link to new arcticle form
            $('#formImage').val('images/uploads/' + $(this).attr('data-copy-image'));
            $('#addform').modal('show');
            return false;
        });

        $('#addButton').on('click', function () { //add/edit arcticle button action
            $.post(
                'controllers/article.php',
                {
                    action: 'edit',
                    id: $('#formId').val(),
                    title: $('#formTitle').val(),
                    subtitle: $('#formSubtitle').val(),
                    category: $('#formCategory').val(),
                    image: $('#formImage').val(),
                    content: $('#formContent').val(),
                    onDate: $('#formOnDate').val()
                },
                function (data) {
                    if (data.success === true) {
                        $('#addform').modal('hide');
                        updateTabs();
                    } else {
                        $('#errors').removeClass('hidden');
                    }
                }, 'json');
            return false;
        });

        $('#addform').on('hide.bs.modal', function () { //when closing article from clear its content
            $(this).find("[id^='form']").val('');
            $('#errors').addClass('hidden');
        })
    })
</script>