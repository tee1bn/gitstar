   
<?php include 'header_nav.php' ;?>
<?php include 'datatable.php' ;?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>View Fixture
        </h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <form>
            <div class="input-group">

              <div class="btn-group  btn-group-justified">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Week <span class="caret">
                  </span>
                </button>
                <ul class="dropdown-menu" role="menu">

                <?php foreach($data['available_weeks'] as $key ): ?> 
                     <li><a href="#" onclick="set_week(this.text , this);"> <?=$key;?> </a></li>
                <?php endforeach;?>

              </ul>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Year <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">

             
                <?php foreach($data['available_years'] as $key ): ?> 
                     <li><a href="#" onclick="set_year(this.text , this);"><?=$key;?></a></li>
                <?php endforeach;?>

                </ul>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div> 


    </div>

    <div class="clearfix"></div>


    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>View Fixture
          <small> This fixture is for week 
             <span id="sfixture_week"> nil</span>, 
             <span id="sfixture_year"> nil</span> 
           </small>
            </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">






            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
              <input type="hidden"  id="fixture_week" name="fixture_week" placeholder="week" required="required">
         <input type="hidden" id="fixture_year" name="fixture_year" placeholder="yer" required="required">

<span id="fixture">
<!-- forr fixtures -->
 </span>

    <div class="ln_solid"></div>

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
               

</div>
</div>
</form>






</div>
</div>
</div>
</div>

</div>
</div>
<!-- /page content -->


<script>
  


function set_week(week , referrer_element){
  document.getElementById('fixture_week').value  = week ;

  document.getElementById('sfixture_week').innerHTML  = week ;
  referrer_element.parentNode.parentNode.parentNode.setAttribute('class', 'btn btn-default dropdown-toggle active' );


setweek_and_year();
}


function set_year(year, referrer_element){

  document.getElementById('fixture_year').value = year ;
  document.getElementById('sfixture_year').innerHTML = year ;
  referrer_element.parentNode.parentNode.parentNode.setAttribute('class', 'btn btn-default dropdown-toggle active' );

setweek_and_year();

}


function setweek_and_year(){

  year = document.getElementById('fixture_year');
  week = document.getElementById('fixture_week');

 if( (week.value != '') && (year.value != '') && (year.value.length == 4)){

  $.ajax({
      type: "POST",
      url: "<?=$this->domain;?>/admin_enter_fixture/load_fixture/"+week.value+"/"+year.value,
      cache: false,
      success: function(fixture) {
        // alert('success');
bars = fixture["bars"];
fixture = fixture["fixture"];

fixtures = '';
var i = 1 ;

if (Object.keys(fixture).length == 49) {

for ( i = 1; i <= 49 ; i++) {
if(fixture[i] != undefined){


home_team = fixture[i]["home_team"];
away_team = fixture[i]["away_team"];
home_score = fixture[i]["home_score"];
away_score = fixture[i]["away_score"];
serial_no = fixture[i]["serial_no"];


if(home_score == null){
  home_score = "?";
}

if(away_score == null){
  away_score = "?";
}


if(home_score > away_score){
  result = '11';
}else if(away_score > home_score){
   result = '22';
 
}else if((away_score == home_score) && (away_score != '?') && (home_score != '?')){
    result = 'xx';

}else{

  result = '??';
}

}

fixtures +=     '   <div class="form-group">     '+           
                
    '<div class="col-md-12 col-sm-12 col-xs-12"> '+  
     '             <div class="input-group"> '+  
            '            <div class="input-group-addon"><span class="badge"> '+i+' </span></div> '+  
      '         <input type="text" class="form-control input-group-addon" id="exampleInputAmount" value="'+home_team+'" readonly="readonly"> '+  
       '            <div class="input-group-addon"><span class="badge"> '+home_score+' </span></div> '+  
        '            <div class="input-group-addon"><span class="badge"> '+away_score+' </span></div>'+  
         '           <input type="text" class="form-control input-group-addon" id="exampleInputAmount" value="'+away_team+'" readonly="readonly">'+ 
                '            <div class="input-group-addon"><span class="badge"> '+result+' </span></div> '+  
 
          '        </div>'+  
           '     </div>'+  
           
              '</div>';


}
}



        $("#fixture").html(fixtures);


      },
      error: function (data) {
        alert("fail");
      }

      

    });


}

}


function submit_fixture_form(){
  if(     (document.getElementById('fixture_week').value != '')
       && (document.getElementById('fixture_year').value != '' ) 

    ) {


fixture_form = document.getElementById('fixture_form') ;
fixture_form.elements.length;

document.getElementById('fixture_form').submit() ;

  }else{

    alert('Please select week and year.');
  }

}

</script>
<?php include 'footer.php' ;?> 































