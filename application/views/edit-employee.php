<?php include('partials/head.php'); ?>
<?php include('partials/uppernav.php'); ?>
<?php include('partials/sidebar.php'); ?>
<?php $data = json_decode($result); ?>
<?php $data2 = json_decode($result2); ?>
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
                <h1 class="m-0 text-dark">প্রতিনিধি এন্ট্রি ফর্ম</h1>
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
                        <form class="form-horizontal" id="stuff_form" action="<?php echo base_url('public/up-emp');?>"  method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-lg-12 col-md-12 col-sm-12 control-label">প্রথম নামঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="person_id" value="<?php echo $data->person_id; ?>" hidden>
                                        <input type="text" name="first_name" value="<?php echo $data->first_name; ?>" class="form-control" id="" placeholder="প্রতিনিধির প্রথম নাম এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-lg-12 col-md-12 col-sm-12 control-label">শেষ নামঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="last_name" value="<?php echo $data->last_name; ?>" class="form-control" id="" placeholder="প্রতিনিধির শেষ নাম এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-lg-12 col-md-12 col-sm-12 control-label">ইউজার নামঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="username" value="<?php echo $data2->username; ?>" class="form-control" id="" placeholder="ইউজার নাম এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-lg-12 col-md-12 col-sm-12 control-label">পাসওয়ার্ডঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="password" name="password" value="<?php echo $data2->password; ?>" class="form-control" id="" placeholder="পাসওয়ার্ড এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">লিঙ্গ ঃ  </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <select name="gender" class="form-control" id="">
                                            <option value="" disabled selected></option>
                                            <option value="1" <?php if($data->gender == '1'){ ?> selected <?php } ?> >পুরুষ</option>
                                            <option value="0" <?php if($data->gender == '0'){ ?> selected <?php } ?> >স্ত্রী</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">ফোন নাম্বারঃ  </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="phone_number" value="<?php echo $data->phone_number; ?>" class="form-control" id="" placeholder="ফোন নাম্বার এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label"> ইমেইলঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="email" value="<?php echo $data->email; ?>" class="form-control" id="" placeholder="ইমেইল এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">বর্তমান ঠিকানাঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="address_1" value="<?php echo $data->address_1; ?>" class="form-control" id="" placeholder="প্রতিনিধির ফোন নাম্বার এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label"> স্থায়ী ঠিকানাঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="address_2" value="<?php echo $data->address_2; ?>" class="form-control" id="" placeholder="প্রতিনিধির ফোন নাম্বার এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">শহরঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="city" value="<?php echo $data->city; ?>" class="form-control" id="" placeholder="শহরের নাম এইখানে লিখুন">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">ভাষা কোডঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="state" class="form-control" id="" placeholder="প্রতিনিধির ফোন নাম্বার এইখানে লিখুন">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">ভাষা কোডঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="zip" class="form-control" id="" placeholder="প্রতিনিধির ফোন নাম্বার এইখানে লিখুন">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label for="" class="col-lg-12 col-md-12 col-sm-12 control-label">দেশঃ </label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <select name="country" class="form-control" id="">
                                            <option value="" disabled>সিলেক্ট করুন</option>
                                            <option value="বাংলাদেশ" <?php if($data->country == 'বাংলাদেশ'){ ?> selected <?php } ?> >বাংলাদেশ</option>
                                        </select>
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
    $('#stuff_form').validate({
    rules: {
        first_name: {
            required: true,
        },
        last_name: {
            required: true,
        },
        username: {
            required: true,
        },
        password: {
            required: true,
        },
        gender: {
            required: true,
        },
        phone_number: {
            required: true,
            number: true
        },
        email: {
            required: true,
            email: true
        },
        address_1: {
            required: true,
        },
        city: {
            required: true,
        },
        country: {
            required: true,
        },
    }
});

</script>