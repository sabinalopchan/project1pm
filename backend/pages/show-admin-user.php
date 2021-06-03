<?php
$query="SELECT * FROM admins ORDER BY aid DESC ";

$adminData=mysqli_query($connection,$query);
?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1><i class="fa fa-eye"></i> Show Admin Users</h1>
                <hr>
                <?= messages(); ?>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>S.n</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>User Types</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($adminData as $key => $admin) : ?>
                    <tr>
                        <td><?=++$key?></td>
                        <td><?=$admin['full_name']?></td>
                       <td><?=$admin['username']?></td>
                        <td><?=$admin['email']?></td>
                        <td><?=$admin['gender']?></td>
                        <td><?=$admin['user_type']?></td>
                        <td>
                            <?php if ($admin['status']==1): ?>
                            <button class="btn-xs btn-success">
                                <i class="fa fa-check"></i>
                            </button>
                            <?php else: ?>
                                <button class="btn-xs btn-danger">
                                    <i class="fa fa-times"></i>
                                </button>

                            <?php endif; ?>

                        </td>
                        <td>
                            <img src="<?=base_url('public/uploads/admin/'.$admin['image']);?>" width="40px" alt="">
                        </td>
                        <td>
                            <a href="" class="btn-xs btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="" class="btn-xs btn-danger">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
