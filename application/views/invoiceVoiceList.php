<?php 

    
function bn2en($number) {
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($bn, $en, $number);
}

function en2bn($number) {
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($en, $bn, $number);
}
?>
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
                <h1 class="m-0 text-dark">ইনভয়েস লিষ্ট</h1>
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
        <div class="row">
                <!-- right column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Data Table With Full Features</h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>সিরিয়াল নং</th>
                                    <th>ইনভয়েস নং</th>
                                    <th>ফার্মেসী নাম</th>
                                    <th>তারিখ </th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; foreach ($invoices as $row){  ?>
                                <tr>
                                    <td><?php echo en2bn($i); ?></td>
                                    <td><?php echo $row['invoice_number']; ?></td>
                                    <td><?php echo $this->admin_model->get_type_name_by_id('customers',$row['customer_id'],'cus_name') ;?></td>
                                    <td><?php echo $row['sale_time']; ?></td>
                                    <td> 
                                        <a href="<?php echo base_url();?>public/Action/print/invoice/<?php echo $row['sale_id'];?>">
                                                        <i class="entypo-trash"></i>
                                                            <?php echo "Print";?>
                                                    </a>
                                                </td>
                                </tr>
                            <?php $i++; } ?>
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