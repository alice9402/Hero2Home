
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <?php
            foreach ($query as $row){
                echo $row->nick."<br/>";
                ?> <a href=""><?php echo $row->mail."<br/>";?></a>
                <?php echo $row->phone."<br/>";
                echo $row->superpower."<br/>";
            } 
            ?>
        </div>
        
        
    </div>
</div>

