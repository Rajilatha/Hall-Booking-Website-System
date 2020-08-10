<?php
	  $combo="<select>";
	  $sql="SELECT decoration_id FROM `decoration`";
	  if($result=$con->query($sql)){
		  if($result->num_rows){
			  while($row=$result->fetch_object())
			  {
				  $combo.="<option>".$row->decoration_id."</option>";
			  }
			  $result->free();
		  }
	  }
	  $combo.="</select>";
	  echo $combo;
	  ?>
	  
	  
	   <?php
	  $echo "<select>";
$con = $sql = 'SELECT decoration_id FROM decoration';
$res = mysql_query($sql) or die(mysql_error);
while($row = mysql_fetch_assoc($sql)) {
    echo "<option value='$row['decoration_id']'>$row['decoration_id']</option>";
}

 $echo "</select>";
			  
?>

 <?php
	  
	  $sql="SELECT decoration_id FROM `decoration`";?>
	  
	  <select name="decid">
	  <option value="0" selected="selected"> Choose</option>
	  <?php
         while($row = mysql_fetch_assoc($sql)){
            // $id=$row["id_expense"];  
            $decid = $row["decoration_id"];
        ?>
      <option value=" <?php $decid ?> > <?php echo  $decid ?>" </option>
        <?php
          }?>
          </select>
	  ?>