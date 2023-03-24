<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog~Post</title>
    <link rel="stylesheet" href="./plugins/bootstrap.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="./plugins/summernote/summernote-bs4.min.css">
</head>
<body style="display: grid;">
    

    <article>
        <div class="card card-outline">
            <div class="card-header">
                <h3 class="card-title">Create New Post</h3>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form id="post-form">
                        <input type="hidden" name="id" value=''>
                        <input type="hidden" name="btn" value='postBtn'>
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input type="text" class="form-control col-sm-6" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input type="file" class="form-control col-sm-6" name="img" id="img" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Post</label>
                            <textarea type="text" class="form-control summernote" name="post" id="sNote" required></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex w-100">
                    <button form="post-form" class="btn btn-primary mr-2">Save</button>
                    <a href="#!" id="cancel" class="btn btn-warning">Cancel</a>
                </div>
            </div>
        </div>
    </article>

    <br>
    <hr>

    <main>
        <div class="card card-outline">
            <div class="card-header">
                <h3 class="card-title">Posts</h3>
                <div class="card-tools">
                    <a href="#title" class="btn btn-flat btn-success"><span class="fas fa-plus"></span>  Create New</a>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <!-- <table class="table table-bordered table-stripped" id="indi-list">
                      
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Date Posted</th>
                                <th>Action</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 1;
                                require './connection.php';
                                $qry = $link->query("SELECT * from `blog` order by unix_timestamp(date_created) desc ");
                                while($row = $qry->fetch_assoc()):
                                    $post = strip_tags(stripslashes(html_entity_decode($row['post'])))
                            ?>
                            
                                <tr>
                                    <td class="text-center"><?php echo $i++; ?></td>
                                    
                                    <td><?php echo $row['title'] ?></td>
                                    <td><p class="m-o truncate"><?php echo $post ?></p></td>
                                    <td><?php echo $row['date_created'] ?></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                            Action
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item edit_data" href="./?edit.php&id=<?php echo $row['id'] ?>" data-id="<?php echo $row['id'] ?>"> Edit</a>
                                            <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table> -->

                    <div>
                        <?php 
                            $i = 1;
                                require './connection.php';
                                $qry = $link->query("SELECT * from `blog` order by unix_timestamp(date_created) desc ");
                                while($row = $qry->fetch_assoc()):
                                    // $row['post'] = strip_tags(stripslashes(html_entity_decode($row['post'])))
                                    $post = stripslashes(html_entity_decode($row['post']))
                        ?>
                        <div style="background-color: whitesmoke; border-radius:1rem; padding:1.4rem;">
                            <h4><?php echo $row['title'] ?></h4>
                            <?php 
                                echo isset($row['file']) ?
                                '<div>
                                    <img src="./images/'.$row["file"].'" alt="" width="100%" style="width: 50vh;">
                                </div>' : '';
                            ?>
                            <p><?php echo $post ?></p>
                            <small><?php echo $row['date_created'] ?></small>
                            <hr>
                            <div>
                                <a class="btn btn-primary" href="./?edit.php&id=<?php echo $row['id'] ?>" data-id="<?php echo $row['id'] ?>"> Edit</a>
                                <a class="btn btn-danger" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"> Delete</a>
                            </div>
                        </div>
                        <br>
                        <?php endwhile; ?>
                    </div>
                </div>


            </div>
        </div>
    </main>



    <script src="./plugins/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Summernote -->
    <script src="./plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        // $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script>
        $('.summernote').summernote({
            height: 200,
            toolbar: [
                [ 'style', [ 'style' ] ],
                [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                [ 'fontname', [ 'fontname' ] ],
                [ 'fontsize', [ 'fontsize' ] ],
                [ 'color', [ 'color' ] ],
                [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                [ 'table', [ 'table' ] ],
                [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
            ]
        });

        $('#cancel').click(() => {
            $('#title').val('');
            $('#img').val('');
            $('.note-editable').html('');
            // console.log($('.note-editable'))

        });
    

        $('#post-form').submit(function (e) {
            e.preventDefault()
        
            $.ajax({
                url: 'server/auth.php',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (resp) {
                    // console.log(resp);
                    if (resp == 200) {
                        alert('Success');
                        $('#title').val('');
                        $('#img').val('');
                        $('.note-editable').html('');
                        $('.err_msg').remove();
                    
                    }else if(resp == 501){
                        alert('server error');
                    }else {  
                        var msg = $('<div class="err_msg"><div class="alert alert-danger">' + resp + '</div></div>')
                        $('#post-form').prepend(msg)
                        // msg.show('slow')
                        // alert('An error occured', "error")
                    }
                }
            })
        })
    </script>
</body>
</html>