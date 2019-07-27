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
                <h1 class="m-0 text-dark">প্রোডাক্ট এন্ট্রি ফর্ম</h1>
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
                        <div class="box-header with-border">
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" id="product_form" action="<?php echo base_url('public/up-pro');?>"  method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্ট কোডঃ </label>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="id" value="<?php echo $data->id; ?>" hidden>
                                        <input type="text" name="code_no" value="<?php echo $data->code_no; ?>" class="form-control" placeholder="প্রোডাক্টের কোড এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্ট নামঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="pro_name" value="<?php echo $data->pro_name; ?>" class="form-control" placeholder="প্রোডাক্টের নাম এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের বিবরণঃ  </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="pro_details" value="<?php echo $data->pro_details; ?>" class="form-control" placeholder="প্রোডাক্টের বিবরণ এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের ধরনঃ</label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <select  name="pro_type" class="form-control select2" style="width: 100%;">
                                            <option value="" disabled>সিলেক্ট করুন</option>
                                            <option <?php if($data->pro_type == 'সিরাপ'){ ?> selected <?php } ?> >সিরাপ</option>
                                            <option <?php if($data->pro_type == 'ট্যাবলেট'){ ?> selected <?php } ?> >ট্যাবলেট</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-12 col-md-12 col-sm-12 control-label">পরিমানঃ</label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="amount" value="<?php echo $data->amount; ?>" class="form-control" placeholder="উদাঃ ৪৫০ মিঃ লিঃ/ ২ পাতা">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের ক্রয়মূল্যঃ  </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="buy_price" value="<?php echo $data->buy_price; ?>" class="form-control" placeholder="প্রোডাক্টের ক্রয়মূল্য এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের বিক্রয়মূল্যঃ  </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="sale_price" value="<?php echo $data->sale_price; ?>" class="form-control" placeholder="প্রোডাক্টের বিক্রয়মূল্য এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রোডাক্টের এম আর পি (MRP):   </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="pro_mrp" value="<?php echo $data->pro_mrp; ?>" class="form-control" placeholder="রোডাক্টের এম আর পি (MRP) এইখানে লিখুন">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <input type="reset" class="btn btn-defaul" value="বাতিল" style="margin-right: 1%;">
                                <button type="submit" class="btn btn-info">সেইভ করুন</button>
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
    $('#product_form').validate({
    rules: {
        code_no: {
            required: true,
        },
        pro_name: {
            required: true,
        },
        pro_details: {
            required: true,
        },
        pro_type: {
            required: true,
        },
        amount: {   
            required: true,
        },
        buy_price: {
            required: true,
        },
        sale_price: {
            required: true,
        },
        pro_mrp: {
            required: true,
        },
    }
});

</script>