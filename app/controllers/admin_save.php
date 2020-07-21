<?php

/**



*/
class admin_save extends controller
{

	public function __construct(){
	$this->middleware('admin')->mustbe_loggedin();

	}
	
	public function index()
	{
				

	}
	public function add_journal()
	{
				

$writing_script = str_replace(" ", "_", $this->strip($_POST['journal_name']));
$no_of_pages =1 ;

try {
	

if((($_POST['page_2'][0] != '') || ($_POST['page_3'][0] != '') || ($_POST['page_4'][0] != '')) && (($_POST['page_1'][0] == ''))){

		throw new Exception("Journal must have page 1 before other pages");
}


if(( ($_POST['page_2'][0] == '') || ($_POST['page_3'][0] == '')) && (($_POST['page_4'][0] != ''))){

		throw new Exception("Journal must have page 2 and 3 before page 4");
}

if(( ($_POST['page_2'][0] == '')) && (($_POST['page_3'][0] != ''))){

		throw new Exception("Journal must have page 2 before page 3");
}

if($_POST['page_1'][0] == ''){throw new Exception("Journal must have atleast page 1 ");}
if($_POST['page_2'][0] != ''){ $no_of_pages++ ;}
if($_POST['page_3'][0] != ''){ $no_of_pages++ ;}
if($_POST['page_4'][0] != ''){ $no_of_pages++ ;}

$journals = $this->model('journal');
$journal_id = $journals->insertGetId([
				'name'			=> $_POST['journal_name'],
				'writing_script'=> $writing_script,
				'editor_id'		=> $_POST['editor_id'],
				'no_of_pages'	=> $no_of_pages,
								]);



$journal_column = $this->model('journal_column');

foreach ($_POST['page_1'] as $column_name) {
	$journal_column->create([
				'name'			=> $column_name,
				'on_page'		=> 1,
				'journal_id'	=> $journal_id,
		]);
}


foreach ($_POST['page_2'] as $column_name) {
	$journal_column->create([
				'name'			=> $column_name,
				'on_page'		=> 2,
				'journal_id'	=> $journal_id,
		]);
}

foreach ($_POST['page_3'] as $column_name) {
	$journal_column->create([
				'name'			=> $column_name,
				'on_page'		=> 3,
				'journal_id'	=> $journal_id,
		]);
}

foreach ($_POST['page_4'] as $column_name) {
	$journal_column->create([
				'name'			=> $column_name,
				'on_page'		=> 4,
				'journal_id'	=> $journal_id,
		]);
}


echo "<pre> $writing_script hu  $no_of_pages";
print_r($_POST);
echo "</pre>";
	



} catch (Exception $e) {
echo $e->getMessage();	
}

	}

	
public function register_user()
	{
		$users = $this->model('user');
	try {
			
		if(	($_POST['password'] != $_POST['confirm_password']) && ($_POST['password'] != '')) {
			
		throw new Exception("Passwords do not match");
					
		}
	if(	($_POST['username'] == '')
	 || ($_POST['surname'] == '') 
	 || ($_POST['name'] == '') 
	 || ($_POST['username'] == '')
	 || ($_POST['phone'] == '')) {
			
		throw new Exception("Fields marked asterisks must be filled");
					
		}

if(
		$users->create([
			'name' 		=> $_POST['name'],
			'surname' 	=> $_POST['surname'],
			'username' 	=> $_POST['username'],
			'email' 	=> $_POST['email'],
			'phone' 	=> $_POST['phone'],
			'password'	=> $_POST['password'],
			'type_id' 	=> 2

			])
){}else{
		throw new Exception("username, email already exist. please enter different input");

}
		echo "saved successfully";


	} catch (Exception $e) {
			echo $e->getMessage();
		}	
			/*	echo "<pre>";
				print_r($_POST);
echo "</pre>";*/
	}

public function save_fixture()
	{
try{
				$posted_fixture	 	= $_POST['fixture'];


//sort posted fixture by home and away
$teams_at_home = array_column($posted_fixture, "home_team");
$teams_at_away = array_column($posted_fixture, "away_team");




foreach ($posted_fixture as $serial_no => $team) {


//ensure a team appears once in fixture
if(in_array($team['home_team'], $teams_at_away) && ($team['home_team'] != '')){
throw new Exception("Note: check number $serial_no, ". $team["home_team"]." in more than one match ");
}
if(in_array($team['away_team'], $teams_at_home) && ($team['away_team'] != '')){
throw new Exception("Note: check number $serial_no, ". $team["away_team"]." in more than one match ");
}



if( ($team['home_team'] == '') || ($team['away_team'] == '') || ( $team['home_team'] == $team['away_team'])){
	throw new Exception("Note: no empty field, no same team on a match, check number $serial_no ");
	
}
}
				$week			= $_POST['fixture_week'];
				$year			= $_POST['fixture_year'];


					$weeks = $this->model('weeks');
					$years = $this->model('years');
		
		$week_id = $weeks->where('week', $week)->first()->id;		
		$week_id = ($week_id == null) ? $weeks->insertGetId(['week' => $week ]) : $week_id;


		$year_id = $years->where('year', $year)->first()->id;		
		$year_id = ($year_id == null) ? $years->insertGetId(['year' => $year ]) : $year_id;





				$posted_divisions   = $_POST['division'];
				

				$fixtures 		= $this->model('fixtures');
				$fixtures_bars 	= $this->model('fixtures_bars');
				$fixtures_id 	= $this->model('fixture_id');

				$fixture_id = $fixtures_id->where('week_id', $week_id)->where('year_id',$year_id )->first()->id;		
	$fixture_id = ($fixture_id == null) ? $fixtures_id->insertGetId([
												'week_id' => $week_id,
												'year_id' => $year_id
												]) : $fixture_id;

//delete any existing fixture

				$fixtures->where('fixture_id', $fixture_id)->delete();
				$fixtures_bars->where('fixture_id', $fixture_id)->delete();

try {
	
foreach ($posted_fixture as $serial_no => $team) {


		$teams   = $this->model('teams_dictionary');
		$home_team_id = $teams->where('teams', $team['home_team'])->first()->id;		
		$home_team_id = ($home_team_id == null) ? $teams->insertGetId(['teams' => $team['home_team'] ]) : $home_team_id;


		$away_team_id = $teams->where('teams', $team['away_team'])->first()->id;		
		$away_team_id = ($away_team_id == null) ? $teams->insertGetId(['teams' => $team['away_team'] ]) : $away_team_id;



		$fixtures->create([
				'home_team_id' 	=>	$home_team_id ,
				'away_team_id' 	=>	$away_team_id,
				'serial_no' 	=>	$serial_no ,  
				'fixture_id' 	=>	$fixture_id 

			]);
	

}

} catch (Exception $e) {
echo "fixture not completed check number $serial_no";
}
	$divisions   = $this->model('divisions');
		
			foreach ($posted_divisions as $after_serial_no => $division) {

		$division_id = $divisions->where('division_name', $division)->first()->id;		
		$division_id = ($division_id == null) ? $divisions->insertGetId(['division_name' => $division ]) : $division_id;

		

	$fixtures_bars->create([
				'after_serial_no' 	=>	$after_serial_no ,
				'division_id'		=>	$division_id,
				'fixture_id'		=>	$fixture_id

			]);


			}

			echo "Fixture saved successfully";

/*
				echo "<pre>";
print_r($_POST);
				echo "</pre>";


*/
	
} catch (Exception $e) {
print_r($e->getMessage());}
	}


public function save_fixture_result(){

	// print_r($_POST);
				$week			= $_POST['fixture_week'];
				$year			= $_POST['fixture_year'];
				$fixture			= $_POST['fixture'];


					$weeks = $this->model('weeks');
					$years = $this->model('years');
		
		$week_id = $weeks->where('week', $week)->first()->id;		
		$year_id = $years->where('year', $year)->first()->id;		
			
				$fixtures_id 	= $this->model('fixture_id');
				$fixture_id 	= $fixtures_id->where('week_id', $week_id)->where('year_id',$year_id )->first()->id;		

				$fixtures 		= $this->model('fixtures');

// echo "fxture id  is $fixture_id";
foreach ($fixture as $serial_no => $score) {

$fixtures->where('fixture_id', $fixture_id)
		 ->where('serial_no', $serial_no)
		 ->update([
	              'away_score' => $score["away_score"],
	              'home_score' => $score["home_score"]																			
	              ]);
}

}


}























?>