<?php include 'views/admin/layout/master.php' ?>

<?php startblock('title') ?>
Fowler - Quản lý bài viết
<?php endblock() ?>

<?php startblock('content') ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Quản lý bài viết</h3>
                </div>
                <div class="col-auto text-right">
                    <a class="btn btn-white ml-3" href="javascript:void(0);" id="filter_search">
                        <i class="fas fa-search"></i> Tìm kiếm
                    </a>
                    <a href="/create_products"
                       class="btn btn-primary ml-3">
                        <i class="fas fa-plus"></i> Thêm bài viết
                    </a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Start alert -->
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div style="display: none" id="deletee" class="alert alert-danger text-center" role="alert"></div>
            </div>
            <div class="col-4"></div>
        </div>
        <!-- End alert -->

<!-- DATATABLE -->
    <!-- Search Filter -->
        <div class="card filter-card" id="filter_inputs">
            <div class="card-body pb-0">
                <form action="" method="post">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" type="text" name="SearchString" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">
                                    Lọc
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <!-- /Search Filter -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 datatable" id="list-posts">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tiêu đề</th>
                                        <th>Nội dung</th>
                                        <th>Tác giả</th>
                                        <th>Link</th>
                                        <th>Ngày đăng bài</th>
                                        <th class="text-center">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($posts as $post){
                                    ?>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>
                                                <?php echo $post->title;?>
                                            </td>
                                            <td>
                                                <?php echo $post->content;?>
                                            </td>
                                            <td>
<!--                                                --><?php //echo $user->getFullName(); ?>
                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                <?php echo $post->created_at;?>
                                            </td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#detail-post">
                                                    <i class="far fa-eye mr-1"></i> Chi tiết
                                                </button>
                                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit-post">
                                                    <i class="far fa-edit mr-1"></i> Sửa
                                                </button>
                                                <button type="button" type="button" class="btn btn-outline-danger" data-toggle="modal">
                                                    <i class="far fa-trash-alt mr-1"></i> Xoá
                                                </button>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div>
    </div>
<?php endblock() ?>

<?php startblock('script') ?>
    <?php include('views/admin/layout/admin_script.php')?>
    <?php include('views/admin/manage_posts/post_script.php') ?>
    <script>
        $(document).ready(function(){
            initDatatablePost($('#list-posts'),
            );
        });

    </script>
<?php endblock() ?>
