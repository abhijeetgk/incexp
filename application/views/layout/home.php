<style>
.bg-aqua{ background-color: #00c0ef !important;padding:5px;}
.bg-green{ background-color: #00a65a !important;padding:5px;}
.bg-yellow{  background-color: #f39c12 !important;padding:5px;}
.bg-red{    background-color: #dd4b39 !important;padding:5px;}
.small-box {
    border-radius: 2px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    display: block;
    margin-bottom: 20px;
    margin-top:20px;
    position: relative; color: #fff !important;
}
.small-box h3, .small-box p {
}
.small-box p {
    font-size: 15px;
}
.small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 10px;
    padding: 0;
    white-space: nowrap;
}
.small-box > .small-box-footer {
    background: rgba(0, 0, 0, 0.1) none repeat scroll 0 0;
    color: rgba(255, 255, 255, 0.8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
}
.small-box p {
    font-size: 15px;
}

</style>

<section class="content">
<div class="row container">
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $category_data['count'];?></h3> Categories Added.
                  <p> <strong><?php echo $category_data['data'];?></strong> in last 24 hours.</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a class="small-box-footer" href="<?php echo site_url('/masters/category');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $company_data['count'];?></h3> Companies Added.
                  <p><strong><?php echo $company_data['data'];?></strong> &nbsp; in last 24 hours.</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a class="small-box-footer" href="<?php echo site_url('masters/company');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $transaction_data['count'];?></h3> Tranactions Entered.
                  <p><strong><?php echo $transaction_data['data'];?></strong> in last 24 hours.</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a class="small-box-footer" href="<?php echo site_url('/transactions/add');?>">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <!-- <div class="col-lg-3 col-xs-6">
              <!-- small box 
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a class="small-box-footer" href="#">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> --><!-- ./col -->
          </div></section>