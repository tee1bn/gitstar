
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

                <?php for ($i=0; $i <= 3 ; $i++):
                      $week_deduction = 28 - $i ;
                      $week = date("W" ,strtotime("-$week_deduction week") );
                      ?> 
                     <li><a href="#" onclick="set_week(this.text , this);"> <?=$week;?> </a></li>
                <?php endfor;?>

              </ul>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Year <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">

                <?php for ($i=0; $i <=1 ; $i++):?> 

                  <li><a href="#" onclick="set_year(this.text, this);"><?=(date("Y")+$i);?></a></li>
                    <?php endfor;?>

                </ul>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div> 
