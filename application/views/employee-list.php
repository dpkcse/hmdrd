<?php include('partials/head.php'); ?>
<?php include('partials/uppernav.php'); ?>
<?php include('partials/sidebar.php'); ?>
<style>
    .form-group {
        margin-top: 1rem;
    }

    .center-block {
        float:none;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">প্রতিনিধি লিষ্ট</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
            <div class="row">
                 <!-- right column -->
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title">প্রতিনিধি লিষ্ট</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>প্রথম নাম</th>
                                        <th>শেষ নাম</th>
                                        <th>লিঙ্গ</th>
                                        <th>ফোন নাম্বার</th>
                                        <th>ইমেইল</th>
                                        <th>বর্তমান ঠিকানা</th>
                                        <th>স্থায়ী ঠিকানা</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $_people   = $this->db->get('hmdrd_people')->result_array(); ?>
                                    <?php $inc = 1; foreach ($_people as $v) { ?>
                                        <tr>
                                            <td><?php echo $inc++ ?></td>
                                            <td><?php echo $v['first_name']; ?></td>
                                            <td><?php echo $v['last_name']; ?></td>
                                            <td><?php if($v['gender'] == 1){echo 'পুরুষ';}else{echo 'স্ত্রী';} ?></td>
                                            <td><?php echo $v['phone_number']; ?></td>
                                            <td><?php echo $v['email']; ?></td>
                                            <td><?php echo $v['address_1']; ?></td>
                                            <td><?php echo $v['address_2']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <!-- /.box -->
                </div>
            </div>
            <!-- /.row (main row) -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      searching: true,
      responsive: true
    });
  });
</script>