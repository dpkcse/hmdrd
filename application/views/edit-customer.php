<?php include('partials/head.php'); ?>
<?php include('partials/uppernav.php'); ?>
<?php include('partials/sidebar.php'); ?>
<?php $data = json_decode($result); ?>
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
                <h1 class="m-0 text-dark">এডিট কাষ্টমার</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
                </ol> -->
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                 <!-- right column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border"> </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" id="customer_form" action="<?php echo base_url('public/up-customer');?>"  method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রতিষ্ঠানের কোডঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="id" value="<?php echo $data->id; ?>" hidden>
                                        <input type="text" name="cus_code" value="<?php echo $data->cus_code; ?>" class="form-control" id="" placeholder="প্রতিষ্ঠানের কোড এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রতিষ্ঠানের নামঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="cus_name" value="<?php echo $data->cus_name; ?>" class="form-control" id="" placeholder="প্রতিষ্ঠানের নাম এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">দোকানের ফোন নাম্বারঃ  </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="cus_mobile" value="<?php echo $data->cus_mobile; ?>" class="form-control" id="" placeholder="দোকানের ফোন নাম্বার এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">ঠিকানাঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="cus_address" value="<?php echo $data->cus_address; ?>" class="form-control" id="" placeholder="দোকানের ঠিকানা এইখানে লিখুন">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="<?php echo base_url('public/customer-l'); ?>" class="btn btn-defaul" style="margin-right: 1%;">বাতিল</a>
                                <button type="submit" class="btn btn-info">আপডেট করুন</button>
                            </div>
                        <!-- /.box-footer -->
                        </form>
                    </div>
                <!-- /.box -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>

<script type="text/javascript">
    $('#customer_form').validate({
    rules: {
        cus_code: {
            required: true,
        },
        cus_name: {
            required: true,
        },
        cus_mobile: {
            required: true,
        },
        cus_address: {
            required: true,
        },
    }
});

</script>