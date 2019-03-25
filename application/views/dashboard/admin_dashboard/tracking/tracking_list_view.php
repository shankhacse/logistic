<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

<style>
#contralist td{
vertical-align: inherit;
}
.table-bordered {
  border: 1px solid #aeaeae;
}
.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
  border: 1px solid #aeaeae;
}

</style>

<div class="datatalberes" style="overflow-x:auto;">


<table id="trackinglist" class="table table-bordered table-striped dataTables" style="border-collapse: collapse !important;">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Project</th>
                  <th>Date</th>
                  <th>Shift</th>
                  <th>Driver Name</th>
                  <th>Vehicle No.</th> 
                  <th>Excv. No.</th> 
                  <th>Excv. Op.</th> 
                  <th>Counter</th> 
                  <th>Start Time</th> 
                  <th>End Time</th> 
                  <th>Carrying</th> 
                 
                </tr>
                </thead>
                <tbody>
               
                  <?php 
					// echo "<pre>";
					// print_r($trackingList);
					// echo "</pre>";
					
              		$i = 1;
              		foreach ($trackingList as $value) { 
                      
                      $dateTime=explode(' ',$value['trackingDetailRows']->session_satrt_time);
                      $date=date('d-m-Y',strtotime($dateTime[0]));  

                      if($value['trackingDetailRows']->shift_date!=''){
                        $shift_date=date('d-m-Y',strtotime($value['trackingDetailRows']->shift_date)); 
                      }else{
                        $shift_date='';
                      }
                      
                      if($value['excavatorassigncheck']==0){
                        $applyClass='excavatorerror';
                      }else{
                        $applyClass='';
                      }

                      
              		?>

					<tr>
						<td><?php echo $i; ?></td>
                        <td><?php echo $value['trackingDetailRows']->project_nickname; ?></td>
                        <td><?php echo $shift_date; ?></td>
                        <td style="text-align:center;background: #e0e0e0;font-weight: 700;"><?php echo $value['siftData']->shift_code; ?></td>
                        <td><?php echo $value['trackingDetailRows']->driver_name; ?></td>
                        <td><?php echo $value['trackingDetailRows']->equipment_name; ?></td>
                        <td style="background: #e0e0e0;font-weight: 700;" class="<?php echo $applyClass;?>"><?php echo $value['excavatorData']->excavatorname; ?></td>
                        <td>
                        <?php 
                                  if($value['excavatorOperator']){
                                    $countOper=0;
                                      foreach ($value['excavatorOperator'] as  $excavatorOperator) {
                                        if($countOper==0){
                                          echo "".$excavatorOperator->driver_name;
                                        }else{
                                          echo ",".$excavatorOperator->driver_name;
                                        }

                                        $countOper++;
                                     
                                      }
                                  }
                        ?>
                        
                        </td>
                        <td style="text-align:center;"><?php echo "1"; ?></td>
                        <td style="background: #e0e0e0;font-weight: 700;"><?php echo $dateTime[1]; ?></td>
                        <td style="background: #e0e0e0;font-weight: 700;"><?php 
                        if($value['trackingDetailRows']->session_end_time != NULL){
                      
                          echo date ('H:i:s',strtotime($value['trackingDetailRows']->session_end_time));
                        }

                        ?></td>
                        <td><?php echo $value['trackingDetailRows']->material_type;?></td>
				    </tr>              			
              	<?php
                    $i++;
              		}

              	?>
                </tbody>
               
              </table>


</div>