
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br/>
            <br/>
            <br/>
<br/>
<br/>
<br/>
<br/>
            <table class="table table-striped">
<?php
            foreach ($query as $row){
               ?>
               <tr>
                <td><?php echo $row->nick; ?></td>
                <td><a href="<?php echo base_url(); ?>Contact_me/"><?php echo $row->mail."<br/>";?></a></td>
                <td><?php echo $row->phone;?></td><td><?php echo $row->superpower; ?></td></tr> 
                 

          <?php  } 
            ?>
        </div>
</table>
           
        
        
    </div>
</div>

