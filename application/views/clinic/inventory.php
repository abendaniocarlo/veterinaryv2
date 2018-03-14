<!DOCTYPE html>
<html lang="en">

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    (Logo)
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Deloso Vet Clinic
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?php echo base_url('vetclinic'); ?>">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('vetclinic/records'); ?>">
                            <i class="now-ui-icons business_badge"></i>
                            <p>Records</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('vetclinic/schedule'); ?>">
                            <i class="now-ui-icons ui-1_calendar-60"></i>
                            <p>Schedule</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('vetclinic/sales'); ?>">
                            <i class="now-ui-icons business_chart-bar-32"></i>
                            <p>Sales</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#subPages" data-toggle="collapse" class="collapsed">
                            <i class="now-ui-icons shopping_basket"></i>
                            <p>Inventory</p>
                        </a>
                            <li>
                            <div id="subPages" class="collapsed">
                                <ul class="nav">
                                    <li class="active"><a href="<?php echo base_url('vetclinic/inventory'); ?>" class=""><i class="now-ui-icons shopping_box"></i>Stocks</a></li>
                                    <li><a href="<?php echo base_url('vetclinic/history'); ?>" class=""><i class="now-ui-icons arrows-1_refresh-69"></i>History</a></li>
                                </ul>
                            </div>
                        </li>
                    </li>
                    <li>
                        <a href="<?php echo base_url('vetclinic/services'); ?>">
                            <i class="now-ui-icons education_glasses"></i>
                            <p>Services</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" class="form-control" id="search" onkeyup="search()" name="q" placeholder="Search for" required>
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?=($record_dat['notif']!=0?'<span class="badge1" data-badge="'.$record_dat['notif'].'" style="background-color: red;"></span>':'')?>
                                    <i class="now-ui-icons location_world"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <?php
                                if($record_dat['notif']!=0){
                                    if(isset($record_dat['events'])){
                                        $i=1;
                                        foreach($record_dat['events'] as $e){
                                            echo '  
                                                    <a class="dropdown-item" href="/veterinaryv2/vetclinic/schedule">
                                                    Event no.'.$i.': '.$e['title'].', Desc:'.$e['description'].'
                                                    </a>
                                                ';
                                            $i++;
                                        }
                                    }

                                    if(isset($record_dat['items'])){
                                        foreach($record_dat['items'] as $item){
                                            echo '  
                                                    <a class="dropdown-item" href="/veterinaryv2/vetclinic/inventory" >
                                                    Item #'.$item['itemid'].': '.$item['item_desc'].' has 0 quantity left!
                                                    </a>
                                                ';

                                        }
                                    }
                                }


                                    else {





                                            echo    '<a class="dropdown-item">No new notification</a>


                                            ';
                                    }

                                ?>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Available Stocks</h2>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-list-search" id="mytable">
                                        <thead>
                                        <tr class="th1">
                                            <th >
                                                <div id="addbutn">
                                                    <button type="button" class="btn btn-md"  data-toggle="modal" data-target="#myModalNorm">
                                                        <span class="glyphicon glyphicon-plus">
                                                        Add an Item
                                                    </button>

                                                </div> 
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="text-primary" style="text-align:center;">Item ID</th>
                                            <th class="text-primary">Description</th>
                                            <th class="text-primary">Price</th>
                                            <th class="text-primary" >Stocks Left</th>
                                            <th class="text-right" style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
        
                                            <?php
                                                $i=1;
                                                            foreach($data['stock'] as $s){
                                                          
                                                                echo '<tr  style="height:20px;padding:-10px;" class="'.($s['qty_left']==0?'redrow':'').'">  
                                                                        <td style="text-align:center;">'.$i.'</td>
                                                                        <td style="text-align:center;"  >'.$s['item_desc'].'</td>
                                                                        <td style="text-align:center;">'.$s['item_cost'].'</td>
                                                                        <td style="text-align:center; ">'.$s['qty_left'].'</td>
                                                                    <td style="width:200px;">
                                                                    <form method="POST" action="">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <input type="number" class="form-control minqty" id="add_stock" name="add_stock" min="1"/>
                                                                                <input type="hidden" class="form-control" id="itemid" name="itemid" value="'.$s['itemid'].'"/>
                                                                            </div>
                                                                            <div class="class="col-sm-6">
                                                                                <button name="addstock" type="submit" class="btn btn-info" style="font-weight:300;font-size:15px;"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </td>
                                                                    
                                                                    <td style="width:100px;">
																	<form>
                                                                  <div class="row">
																	
                                                                     <div class="class="col-sm-6">
                                                                         <button type="button" data-toggle="modal" id="'.$s['itemid'].'" data-target="#editStock" onclick="populate(this.id)" class="btn btn-success" style="font-weight:300;font-size:15px;"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</button>
                                                                      </div>
																	  
                                                                  </div>
																  </form>
                                                                </td>
                                                                
                                                                <td style="width:100px;">
                                                                        <form method="GET" action="">
                                                                            <div class="row">
                                                                            
                                                                                <div>
                                                                                    <a href="'.base_url('vetclinic/delete').'?itemid='.$s['itemid'].'" name="addstock" type="submit" class="btn btn-danger" style="font-weight:300;font-size:15px;"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </td>
                                                            </tr>
                                                            ';
                                                 $i++;
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
        </div>
    </div>
</body>
<?php
    include "addstockmodal.php";

    
?>
<script type="text/javascript">
    function stock(addstock){
        $(document).ready(function() {
            var val=$('#add_stock').val();
             alert(val);
            alert(addstock);
        
        });
    }
</script>
</html>