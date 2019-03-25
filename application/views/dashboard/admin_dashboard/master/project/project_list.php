<style>
#contralist td{
vertical-align: inherit;
}
</style>
   <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Project List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Project List</h3>&nbsp;
             <!-- <a href="<?php echo base_url();?>shift/addShift" class="link_tab"><span class="glyphicon glyphicon-plus"></span> ADD</a> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="datatalberes" style="overflow-x:hidden;">
              <table id="example" class="table table-bordered table-striped dataTables" style="border-collapse: collapse !important;">
                <thead>
                <tr>
                  <th style="width:5%;">Sl</th>
                  <!--<th style="width:10%;">Action</th>-->
                  <th>Name</th>
                  <th>Code</th>
                  <th>Location</th>
                <!--  <th>Status</th> -->
                </tr>
                </thead>
                <tbody>
               
              	<?php 
				          
                      $i = 1;
                      foreach ($bodycontent['projectList'] as $value) {   
                        
                       
              	?>

					          <tr>
						            <td><?php echo $i; ?></td>
                       <!-- <td>
                          <a href="<?php echo base_url(); ?>shift/addShift/<?php echo $value->shift_id; ?>" class="btn btn-primary btn-xs" data-title="Edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                          </a>
                        </td> -->
                        <td><?php echo $value->project_name; ?></td>                                              
                        <td><?php echo $value->project_nickname; ?></td>                                              
                        <td><?php echo $value->location; ?></td>                                              
                       
                    </tr>              			
              	<?php
                    $i++;
              		}

              	?>
                </tbody>
               
              </table>

              </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->