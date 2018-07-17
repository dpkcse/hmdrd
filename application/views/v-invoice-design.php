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
                <h1 class="m-0 text-dark">ইনভয়েস</h1>
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
    <section class="content invoiceDesin">
        <div class="container">
            <div class="invoice">
                <div class="invoice-container">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-company">
                                        <img src="http://boooya.aqvatarius.com/img/boooya.png" alt="Boooya - Revolution Admin Template">
                                        <h2>Boooya Team</h2>
                                        <p>UI&amp;UX Professionals</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-number text-right">
                                        <h3>Invoice #932-ht-43</h3>
                                        <p>September 03, 2017</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-container invoice-container-highlight">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-address">
                                        <h5>Billing From</h5>
                                        <p>John Doe<br>45 StreetName St.<br>City, Country, 00000<br>Phone: +98(765) 432-10-98</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-address text-right">
                                        <h5>Billing To</h5>
                                        <p>Dmitry Ivaniuk<br>15 Nameofstreet St.<br>City, Country, 00000<br>Phone: +01(234) 567-89-01</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-container invoiceBody">
                    <div class="row">
                        <div class="col-lg-11 col-lg-offset-2">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Work We've Done For You</th>
                                            <th>Hours</th>
                                            <th width="150">Rate</th>
                                            <th width="150">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-thin">
                                        <tr>
                                            <td width="40" class="text-center">1</td>
                                            <td class="text-bold">WebSite Design and Sketches</td>
                                            <td>12:00</td>
                                            <td>$25</td>
                                            <td class="text-bold">$300.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-bold">WebSite Coding</td>
                                            <td>08:30</td>
                                            <td>$15</td>
                                            <td class="text-bold">$127.50</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-bold">Logo Design</td>
                                            <td>06:00</td>
                                            <td>$30</td>
                                            <td class="text-bold">$180.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-bold">Newsletter Template Design</td>
                                            <td>05:00</td>
                                            <td>$25</td>
                                            <td class="text-bold">$125.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-bold">iOS Application Design</td>
                                            <td>25:00</td>
                                            <td>$25</td>
                                            <td class="text-bold">$625.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <table class="table table-bordered invoice-table-total">
                                        <tbody>
                                            <tr>
                                                <td class="text-muted text-thin">Subtotal:</td>
                                                <td width="150" class="text-muted">$1,357.50</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted text-thin">Taxes (20%):</td>
                                                <td width="150" class="text-muted">$271.50</td>
                                            </tr>
                                            <tr class="invoice-table-highlight">
                                                <td class="text-bold">Total Amout:</td>
                                                <td width="150" class="text-bold">$1,629.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-thanks">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title">Thank you for your choise</div>
                                        <p>Boooya Team</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <div class="title">John Doe</div>
                                        <p class="text-italic">BigMan In Company</p>
                                        <p><img src="http://boooya.aqvatarius.com/assets/images/signature.png" alt="signature"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    

<?php include('partials/foot.php'); ?>