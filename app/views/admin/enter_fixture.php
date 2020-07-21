 
<?php include 'header_nav.php' ;?>
<?php include 'datatable.php' ;?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Fixture
        </h3>
      </div>


<?php include 'week_details.php' ?>

  </div>

  <div class="clearfix"></div>

  <style>
    hr{
      margin-top: 60px;
      background-color: grey;
      height: 3px;
    }
  </style>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Add fixture
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






       <form id="fixture_form" id="demo-form2" method="post" action="<?=$this->domain."/admin_save/save_fixture";?>"
         class="form-horizontal form-label-left">

         <input type="hidden"  id="fixture_week" name="fixture_week" placeholder="week" required="required">
         <input type="hidden" id="fixture_year" name="fixture_year" placeholder="yer" required="required">


<span id="fixture">

<!-- for fixture input -->
</span>









 <datalist id="teams">

              <?php foreach ($data['teams'] as $key): ?>
                <option value="<?=$key->teams;?>">
                <?php endforeach ?>
              </datalist>



 <datalist id="divisions">

              <?php foreach ($data['divisions'] as $key): ?>
                <option value="<?=$key->division_name;?>">
                <?php endforeach ?>
              </datalist>



          <div class="ln_solid"></div>

          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12 ">
              <button type="button" onclick="submit_fixture_form();" class="btn btn-primary"> Save </button>
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

// adding and removing bar and division
function add_bar(element , serial_no){
  if(element.parentNode.parentNode.lastChild.nodeName == 'SPAN'){

    element.parentNode.parentNode.lastChild.remove();

  }else{


    var span_element = document.createElement("span");
    element.parentNode.parentNode.appendChild(span_element);

    var hr_element = document.createElement("hr");
    span_element.appendChild(hr_element);

    var input_element = document.createElement("input");
    input_element.setAttribute('class' , 'form-control divisions_id');
    input_element.setAttribute('name' , 'division['+serial_no+']');
    input_element.setAttribute('placeholder' , 'Enter Division');
    input_element.setAttribute('required' , 'required');
    input_element.setAttribute('list' , 'divisions');

span_element.appendChild(input_element);



}

}

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
  // alert('setweek_and_year');
  year = document.getElementById('fixture_year');
  week = document.getElementById('fixture_week');

 if( (week.value != '') && (year.value != '') && (year.value.length == 4)){
  // alert("year length "+year.value.length);



  $.ajax({
      type: "POST",
      url: "<?=$this->domain;?>/admin_enter_fixture/load_fixture/"+week.value+"/"+year.value,

      // data: dataString,
      cache: false,
      success: function(data) {
bars = data["bars"];
fixture = data["fixture"];

fixtures = '';
var i = 1 ;

if (Object.keys(data).length !== 0) {

for (var i = 1; i <= 49 ; i++) {

if(fixture[i] != undefined){
home_team = fixture[i]["home_team"];
away_team = fixture[i]["away_team"];
serial_no = fixture[i]["serial_no"];
}else{

home_team = '';
away_team = '';
serial_no = i;

}

fixtures +=  '  <div class="form-group" style="  background-color: #ededed; padding-top: 5px;">'+              
           '<div class="col-xs-1">'+
          '<button type="button" class="btn btn-default"> <span class="badge"> '+serial_no+' </span></button>'+
          '  </div>'+
            '<div class="col-md-5 col-sm-5 col-xs-12">'+
        '<input list="teams" value="'+home_team+'" id="first-name" name="fixture['+serial_no+'][home_team]"  placeholder="Home team" class="form-control col-md-7 col-xs-12" required="required">'+
           ' </div>'+
            '<div class="col-md-5 col-sm-5 col-xs-12">'+
             ' <input list="teams" value="'+away_team+'" id="first-name"  name="fixture['+serial_no+'][away_team]" placeholder="Away team"  class="form-control col-md-7 col-xs-12" required="required">'+
             '         </div>'+
             ' <div class="col-xs-1">'+
              '  <button type="button" id="button_'+i+'" class="btn btn-default" onclick="add_bar(this, '+serial_no+')"> <span class="badge"> bar </span></button>'+
              '</div>'+
            '</div>';

/*
if(bars[i] != undefined){

  bar_at = bars[i]["after_serial_no"];
  division = bars[i]["division"];
  add_bar(getElementById("button_"+i) , bar_at);
}else{


  bar_at = '';
  division = '';

}
*/
}


}else{

for (var i = 1; i <= 49 ; i++) {
fixtures +=  '  <div class="form-group" style="  background-color: #ededed; padding-top: 5px;">'+              
           '<div class="col-xs-1">'+
          '<button type="button" class="btn btn-default"> <span class="badge"> '+i+' </span></button>'+
          '  </div>'+
            '<div class="col-md-5 col-sm-5 col-xs-12">'+
        '<input list="teams" id="first-name" name="fixture['+i+'][home_team]"  placeholder="Home team" class="form-control col-md-7 col-xs-12" required="required">'+
           ' </div>'+
            '<div class="col-md-5 col-sm-5 col-xs-12">'+
             ' <input list="teams" id="first-name"  name="fixture['+i+'][away_team]" placeholder="Away team"  class="form-control col-md-7 col-xs-12" required="required">'+
             '         </div>'+
             ' <div class="col-xs-1">'+
              '  <button type="button" class="btn btn-default" onclick="add_bar(this, '+i+')"> <span class="badge"> bar </span></button>'+
              '</div>'+
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

dataString = $("#fixture_form").serialize() ;

  $.ajax({
      type: "POST",
      url: "<?=$this->domain;?>/admin_save/save_fixture",

      data: dataString,
      cache: false,
      success: function(data) {

alert(data);
      },
       error: function(data) {
// alert("fail"+data);

      }
    });


// document.getElementById('fixture_form').submit() ;

  }else{

    alert('Please select week and year.');
  }

}

</script>

<?php include 'footer.php' ;?> 































