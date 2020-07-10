 
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ajax.js"></script>
<?php include("db.php"); ?>
<div class="">
<label><b>State id:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="state1" id="state">
<option value=''>----Select state id-----</option>

<?php
        $sql="SELECT * FROM `states`";
            $res=mysqli_query($con,$sql);

            if (mysqli_num_rows($res)>0) 
            {
                while ($row=mysqli_fetch_object($res)) 
                    {
                        echo "<option value='".$row->state_id."'>".$row->state_name."</option>";
                    }   
            }
        ?>
    </select><br>





<label><b>Location name:</b></label>
<select name="location1" id="location">
<option>----Select location name-----</option>
</select>
</div>