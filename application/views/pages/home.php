<h2><?= $title; ?></h2>
<?php session_destroy(); ?>
<?php // var_dump($_SESSION); ?>
<div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
                <div style="text-align :left">
                    <a href="prirvenaal" class="btn btn-primary">Clergy</a>
                </div>      
         </div>
        </div>
        <?php// var_dump($_SESSION); ?>
        <div class="col-sm-6">   
            <div class="form-group">  
               <div style="text-align :right">
                  <a href="alresults" class="btn btn-primary">Non Clergy</a>
               </div> 
             </div>
        </div>
    </div>