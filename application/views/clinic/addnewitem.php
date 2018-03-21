<!-- Modal -->

<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->

            <div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">

                <h4 class="modal-title text-center" id="myModalLabel" style="font-size:25px; font-weight:bold; margin-left:33%;">
                    ADD NEW ITEMs </h4>
				<button type="button" class="close" 
                   data-dismiss="modal">

                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
            </div>
            
            <!-- Modal Body -->

            <div class="modal-body " style="padding:50px; ">

        <?php
         echo form_open('vetclinic/savenewitem', ['class'=>'form-horizontal','id'=>'additemI']); ?>

				  <div class="form-group" >
           <div id="descerror">
					<label for="item_desc">Description:</label>
					<input type="text" class="form-control" id="item_desc" name="item_desc" />
          <span class="valerror" id="descerror1"></span>
				  </div>
          <div>
					<label for="item_cost">Price:</label>
					<input type="number" step=0.01 class="form-control globalDisable" id="item_cost" name="item_cost" />
           <span class="valerror" id="costerror1"></span>
				  </div>
				    <div>
					<label for="qty_left">Quantity:</label>
					<input type="number" class="form-control globalDisable" id="qty_left" class="globalDisable" name="qty_left" />
           <span class="valerror" id="qtyerror1"></span>
            </div>
            <div>
              <label for="qty_left">Distribution unit:</label>

          
              <select style="font-size:15px; font-weight:bold;" name="dis" class="form-control" id="Unit">

              </select></div>
            </div>
            <div class="row" style="margin:30px auto;">
              <label for="qty_left" class="col-md-3" style="text-align:left;">Item type:</label>
                <div class="col-md-9">
              <select style="font-size:15px; font-weight:bold;" name="type" class="form-control" id="Types">

              </select></div>
            </div>
            <div class="row" style="margin:30px auto;">
              <label for="qty_left" class="col-md-3" style="text-align:left;">Supplier:</label>
                <div class="col-md-9"></div>
              <select style="font-size:15px; font-weight:bold;" name="sup" class="form-control" id="Supplier">

              </select>
            </div>

            <div>
              <label for="qty_left">Expiration Date:</label>
              <input type="date" class="form-control" id="exp_date" name="exp_date"/>
                 <span class="valerror" id="dateerror1"></span>

            </div>

		  
               </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="submitmyitem"  class="btn btn-primary">Add</button>
            </div>
            <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
		</div>
		
		<div class="modal fade" id="AddStock" tabindex="-1" role="dialog" 
     aria-labelledby="myAddStock" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-sm">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Stock
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
				
                <form role="form">
                  <div class="form-group">
                    <label for="qty">Quantity</label>
                      <input type="number" class="form-control" id="qty" name="qty" placeholder= "" />
					  <input type="hidden" name="id" value= "" /> 
                  </div>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">
						Update
					</button>
				
				<button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cancel
                </button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->

<div class="modal fade" id="editStock" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->

            <div class="modal-header" style="background-color:rgba(128, 191, 255,0.9);">
				<h4 class="modal-title text-center" id="myModalLabel" style="font-size:25px; font-weight:bold; margin-left:33%;">
                    Update Item
                </h4>
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body" style="padding:50px;">
            <?php echo form_open("vetclinic/updateItem/",['id'=>'editItem']) ?>
            <form action="" method="POST">
          <div class="form-group" >
                    <div id="descerror">
          <label for="item_desc">Description:</label>
          <input type="text" class="form-control" id="update_desc" name="update_desc" />
                    <p id="descerror1" class="valerror"></p>
            </div>
                    <div id="costerror">
          <label for="">Price:</label>
          <input type="number" step=0.01 class="form-control globalDisable" id="update_cost" name="update_cost" />
                      <p id="costerror1" class="valerror"></p>
            </div>
          
               <input type="hidden" name="updateid" id="updateid" value= "" /> 
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button name="additem" id="sbmtItem" value="" type="submit" class="btn btn-primary">Add Product</button>
      
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

    </div>
    </div>
    
    <div class="modal fade" id="AddStock" tabindex="-1" role="dialog" 
     aria-labelledby="myAddStock" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-sm">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Add Stock
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
        
                <form role="form">
                  <div class="form-group">
                    <label for="qty">Quantity</label>
                      <input type="number" class="form-control" id="qty" name="qty" placeholder= "" />
            <input type="hidden" name="id" value= "" /> 
                  </div>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary">
            Update
          </button>
        
        <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Cancel
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

$(document).ready(function(){
            $.ajax({
                    url: 'ajax_list',
                        success: function(data) {
                            var obj = JSON.parse(data);
                            var serv = "";
                            var serv2 = "";
                            var serv3 = "";

                            for(var i=0; i<parseInt(obj.suppliers.length); i++){
                                    serv += '<option value='+obj.suppliers[i].id+'>'+obj.suppliers[i].supplier_name+'</option>';
                                }
                                $("#Supplier").html(serv);

                            for(var i=0; i<parseInt(obj.units.length); i++){
                                    serv2 += '<option value='+obj.units[i].id+'>'+obj.units[i].dist_unit+'</option>';
                                }
                                $("#Unit").html(serv2);
                          
                            for(var i=0; i<parseInt(obj.types.length); i++){
                                    serv3 += '<option value='+obj.types[i].id+'>'+obj.types[i].itemtype+'</option>';
                                }
                                $("#Types").html(serv3);



                          }
                    });
        });
</script>