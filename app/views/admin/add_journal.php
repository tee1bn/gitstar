 
<?php include 'header_nav.php' ;?>
<?php include 'datatable.php' ;?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Journal</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    
    

    
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Enter Journal Properties</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">



            <form  method="post" action="<?=$this->domain;?>/admin_save/add_journal" id="demo-form" data-parsley-validate="" novalidate="">



              <label for="fullname"> Owner * :</label>
              <select id="editors" name="editor_id" class="form-control" required="required">
              <option value="">Select the editor</option>

              <?php foreach ($data['available_editors'] as $editor):?>
                <option value="<?=$editor->id;?>"><?=$editor->surname." ".$editor->name;?></option>

                <?php endforeach; ?>
              </select> </br>



              <label for="fullname"> Name * :</label>
              <input type="text" id="fullname" class="form-control" name="journal_name" required="required"><br/>

              <div id="page_1">
                <label for="email"> Page 1 * :   
                 <span class="btn btn-primary btn-xs" onclick="add_column_field(this.parentNode.parentNode.id)">+ Column</span>
               </label>

             </div>
             <hr/>


             <div id="page_2">
              <label for="email"> Page 2  :   
               <span class="btn btn-primary btn-xs" onclick="add_column_field(this.parentNode.parentNode.id)">+ Column</span>
             </label>

           </div>
           <hr/>


           <div id="page_3">
            <label for="email"> Page 3  :   
             <span class="btn btn-primary btn-xs" onclick="add_column_field(this.parentNode.parentNode.id)">+ Column</span>
           </label>

         </div>
         <hr/>


         <div id="page_4">
          <label for="email"> Page 4  :   
           <span class="btn btn-primary btn-xs" onclick="add_column_field(this.parentNode.parentNode.id)">+ Column</span>
         </label>

       </div>
       <hr/>

       <input type="button" class="btn btn-primary" onclick="this.form.submit()" value ="Create Journal">

     </p></form>


   </div>
 </div>
</div>
</div>



</div>
</div>
<!-- /page content -->
<script>

  function add_column_field(data){

    $('#'+data).append(
      " <div class='input-group'>"
      +" <input type='text' name="+data+"[] class='form-control' required='required'> "
      +"  <span class='input-group-btn'>"
      +"  <button type='button' class='btn btn-danger' onclick='this.parentNode.parentNode.remove()' ><i class='fa fa-times'></i></button>+"
      +"</span>"
      +"</div>  "
      
      );
  } 



</script>







<?php include 'footer.php' ;?> 































