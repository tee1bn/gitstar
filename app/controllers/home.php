<?php


use Illuminate\Database\Capsule\Manager as DB;
use v2\Models\Commission;
use v2\Models\HotWallet;
use v2\Models\InvestmentPackage;
use v2\Models\Wallet;
use v2\Models\Withdrawal;


// use v2\Shop\Payments\Paypal\Paypal as cPaypal;
// use v2\Shop\Payments\Paypal\Subscription;


/**
 * this class is the default controller of our application,
 *
 */
class home extends controller
{


    public function __construct()
    {

    }

    public function test2($pack_id=null)
    {
        // echo "<pre>";


        $withdrawal = Withdrawal::first();
        $receiver_subject = "Withrawal Request ID:#$withdrawal->id Completed";
        $mailer = new Mailer;

        echo $receiver_content =  $this->buildView('emails/completed_withdrawal', compact('withdrawal'), true);


        return;
        //sender email
        $mailer->sendMail(
            "{$withdrawal->user->email}",
            "$receiver_subject",
            $receiver_content,
            "{$withdrawal->user->firstname}"
        );




                return;
            
                $user = User::find(1);


                $not_changeable = [
                    'firstname', 'lastname', 'country', 'birthdate', 'username' 
                ];

                $result = array_filter($not_changeable, function($item) use ($user){
                    if ($user[$item] == null) {
                        return false;
                    }
                    return true;

                });
                    

                print_r($not_changeable);
                print_r($result);



                return;
                echo $subscription =  SubscriptionOrder::where('user_id', $user->id)->Paid()->latest('paid_at')->first();


                // $user->renew_subscription();


        return;

         $hot_wallet_wrongs = HotWallet::onUser(61)->Category('investment')/*->where('comment','like','%wrong%')*/->Credit()->Cleared()->where('cost','!=', null) /*->sum('amount');*/;



       print_r($hot_wallet_wrongs->get()->toArray());


        return;

        $pack = HotWallet::find($pack_id);

        // echo "$pack";

         InvestmentPackage::setRoi($pack_id);


        return;
      $investment_id = $pack->ExtraDetailArray['investment']['id'];



        $capital = $pack->ExtraDetailArray['capital'];

        $investment = InvestmentPackage::find($investment_id);
        
        $investment->setAmount($capital);

        echo $pack->paid_at;


        $schedule = $investment->spread('weekly', false, $pack->paid_at);
        print_r($schedule);

        $i_details = $pack->ExtraDetailArray;

        $i_details['spread'] = $schedule['spread'];
        $i_details['split_dates'] = $schedule['split_dates'];

        $pack->update([
            'extra_detail' => json_encode($i_details),
            'split_at' => $schedule['split_dates'][0]

        ]);



        InvestmentPackage::setRoi($pack->id);
        
        echo "<br>";
        echo "<br>";



    }


    public function test()
    {
        echo "<pre>";
     
        $site_settings = [
            'all_ranks' => [
                [
                    'name' => 'Associate Member',
                    'index' => '0',
                ],
                [
                    'name' => 'Golden Taurus',
                    'index' => '1',
                ],
                [
                    'name' => 'Builder Silver',
                    'index' => '2',
                ],
                [
                    'name' => 'Master Gold',
                    'index' => '3',
                ],
                [
                    'name' => 'Coordinator Platinum',
                    'index' => '4',
                ],
                [
                    'name' => 'Team Leader Sapphire',
                    'index' => '5',
                ],
                [
                    'name' => 'Supervisor Ruby',
                    'index' => '6',
                ],
                [
                    'name' => 'Executive Director',
                    'index' => '7',
                ],
                [
                    'name' => 'Diamond Emerald',
                    'index' => '8',
                ],
                [
                    'name' => 'Blue Diamond',
                    'index' => '9',
                ],
                [
                    'name' => 'Black Diamond',
                    'index' => '10',
                ],
                [
                    'name' => 'Royal Diamond',
                    'index' => '11',
                ],
                [
                    'name' => 'Crown Diamond',
                    'index' => '12',
                ],
                [
                    'name' => 'Crown Ambassador',
                    'index' => '13',
                ],
            ],

            'rank_qualifications' => [
                0 => [
                    'rank' => '',
                    'rating' => [
                        'activity' => [
                            'action' => 'buy_package'
                        ],
                        'in_team' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => 'buy_package',
                        ],
                        'points' => ''
                    ],

                    'cash_rewards' => [
                        'amount' => 0,
                        'perks' => []
                    ],

                    'binary_gains' => [
                        [
                            'level' => 1,
                            'count' => 2,
                        ]
                    ],
                ],
                1 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '1',
                                'member_rank' => '',
                                'position' => 'right',
                            ],
                            [
                                'count' => '1',
                                'member_rank' => '',
                                'position' => 'left',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 7000
                    ],

                    'cash_rewards' => [
                        'amount' => 250,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],

                2 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '1',
                            ],

                            [
                                'count' => '2',
                                'member_rank' => '0',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 20000
                    ],

                    'cash_rewards' => [
                        'amount' => 500,
                        'perks' => [
                            'Travel to dubai',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],

                3 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '1',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '2',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 42000
                    ],

                    'cash_rewards' => [
                        'amount' => 1000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],


                4 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '2',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '3',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 84000
                    ],

                    'cash_rewards' => [
                        'amount' => 1750,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],

                5 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '3',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '4',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 168000
                    ],

                    'cash_rewards' => [
                        'amount' => 3000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],

                6 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '4',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '5',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 504000
                    ],

                    'cash_rewards' => [
                        'amount' => 4500,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],

                7 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '5',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '6',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 1814400
                    ],

                    'cash_rewards' => [
                        'amount' => 7000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],

                8 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '6',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '7',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 4536000
                    ],

                    'cash_rewards' => [
                        'amount' => 14000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],

                9 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '7',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '8',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 7500000
                    ],

                    'cash_rewards' => [
                        'amount' => 30000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],
                10 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '8',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '9',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 14000000
                    ],

                    'cash_rewards' => [
                        'amount' => 75000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],
                11 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '9',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '10',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 35000000
                    ],

                    'cash_rewards' => [
                        'amount' => 100000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],
                12 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '10',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '11',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 70000000
                    ],

                    'cash_rewards' => [
                        'amount' => 300000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],

                13 => [
                    'rank' => '',

                    'rating' => [
                        'activity' => [
                            'action' => ''
                        ],
                        'in_team' => [
                            [
                                'count' => '1',
                                'member_rank' => '11',
                            ],

                            [
                                'count' => '1',
                                'member_rank' => '12',
                            ],

                        ],
                        'direct_line' => [
                            [
                                'count' => '',
                                'member_rank' => '',
                                'position' => '',
                            ],
                        ],
                    ],

                    'points_volume' => [
                        'activity' => [
                            'action' => '',
                        ],
                        'points' => 140000000
                    ],

                    'cash_rewards' => [
                        'amount' => 500000,
                        'perks' => [
                            '',
                        ]
                    ],

                    'binary_gains' => [
                        [
                            'level' => '',
                            'count' => '',
                        ]
                    ],
                ],


            ]
        ];


        print_r(json_encode($site_settings));

    }


    public function contact_us()
    {


        // verify_google_captcha();

        echo "<pre>";

        print_r($_REQUEST);
        extract($_REQUEST);

        $project_name = Config::project_name();
        $domain = Config::domain();

        $settings = SiteSettings::site_settings();
        $noreply_email = $settings['noreply_email'];
        $support_email = $settings['support_email'];

        $email_message = "
			       <p>Dear Admin, Please respond to this support ticket on the $project_name admin </p>


			       <p>Details:</p>
			       <p>
			       Name: " . $full_name . "<br>
			       Phone Number: " . $phone . "<br>
			       Email: " . $email . "<br>
			       Comment: " . $comment . "<br>
			       </p>

			       ";


        $client = User::where('email', $_POST['email'])->first();
        $support_ticket = SupportTicket::create([
            'subject_of_ticket' => $_POST['comment'],
            'user_id' => $client->id,
            'customer_name' => $_POST['full_name'],
            'customer_phone' => $_POST['phone'],
            'customer_email' => $_POST['email'],
        ]);

        $code = $support_ticket->id . MIS::random_string(7);
        $support_ticket->update(['code' => $code]);
        //log in the DB

        $client_email_message = "
			       Hello {$support_ticket->customer_name},

			       <p>We have received your inquiry and a support ticket with the ID: <b>{$support_ticket->code}</b>
			        has been generated for you. We would respond shortly.</p>

			      <p>You can click the link below to update your inquiry.</p>

			       <p><a href='{$support_ticket->link}'>{$support_ticket->link}</a></p>

	               <br />
	               <br />
	               <br />
	               <a href='$domain'> $project_name </a>


	               ";


        $support_email_address = $noreply_email;

        $client_email_message = MIS::compile_email($client_email_message);
        $email_message = MIS::compile_email($email_message);


        $mailer = new Mailer();

        $mailer->sendMail(
            $email_message,
            "$project_name Support - Ticket ID: $support_ticket->code",
            $client_email_message,
            "Support");


        $response = $mailer->sendMail(
            "$support_ticket->customer_email",
            "$project_name Support - Ticket ID: $support_ticket->code",
            $client_email_message,
            $support_ticket->customer_name
        );

        Session::putFlash('success', "Message sent successfully.");

        Redirect::back();

        die();


    }


    /**
     * [flash_notification for application notifications]
     * @return [type] [description]
     */
    public function flash_notification()
    {
        header("Content-type: application/json");

        if (isset($_SESSION['flash'])) {
            echo json_encode($_SESSION['flash']);
        } else {
            echo "[]";
        }


        unset($_SESSION['flash']);

    }


    public function close_ticket()
    {
        $ticket = SupportTicket::where('code', $_REQUEST['ticket_code'])->first();
        $ticket->mark_as_closed();
        Redirect::back();
    }


    public function support_message()
    {

        $project_name = Config::project_name();
        $domain = Config::domain();

        $settings = SiteSettings::site_settings();
        $noreply_email = $settings['noreply_email'];
        $support_email = $settings['support_email'];


        $files = MIS::refine_multiple_files($_FILES['documents']);

        $ticket = SupportTicket::where('code', $_POST['ticket_code'])->first();
        $ticket->update(['status' => '0']);

        $message = SupportMessage::create([
            'ticket_id' => $ticket->id,
            'message' => $_POST['message'],
        ]);


        $message->upload_documents($files);

        $support_email_address = "$support_email";
        $_headers = "From: {$ticket->customer_email}";

        $client_email_message = "Dear Admin, Please respond to this support ticket on the admin <br>
	                            From:<br>
	                            $ticket->customer_name,<br>
	                            $ticket->customer_email,<br>
	                            $ticket->customer_phone,<br>
	                            Ticket ID: $ticket->code<br>
	                            <br>
	                             ";
        $client_email_message .= $message->message;

        $client_email_message = $ticket->compile_email($client_email_message);

        $mailer = new Mailer();

        $mailer->sendMail(
            "$support_email_address",
            "$project_name Support - Ticket ID: $ticket->code",
            $client_email_message,
            "Support"
        );

        Redirect::back();
    }


    public function index($page = null)
    {

        switch ($page) {
            case 'supportmessages':

                $this->view('guest/support-messages');

                break;

            case 'about':

                $this->view('guest/about');
                break;

            case 'packages':

                $this->view('guest/packages');
                break;

            case 'services':
                $this->view('guest/services');
                break;

            case 'products':
                $this->view('guest/products');
                break;

            case 'payment-method':
                $this->view('guest/payment-method');
                break;


            case 'referral':
                $this->view('guest/referral');
                break;

            case 'leadership-program':
                $this->view('guest/leadership-program');
                break;

            case 'how-to-be-part':
                $this->view('guest/how-to-be-part');
                break;

            case 'trucash':
                $this->view('guest/trucash');
                break;

            case 'faqs':
                $this->view('guest/faqs');
                break;

            case 'contact':
                $this->view('guest/contact');
                break;

            case 'terms':
                $this->view('guest/terms');
                break;

            case 'privacy':
                $this->view('guest/privacy');
                break;

            case 'user-agreement':
                $this->view('guest/user-agreement');
                break;

            case null:

                $this->view('guest/index');
                // Redirect::to('w');
                break;

            default:

                $this->view('guest/404');
                break;
        }


    }


    public function about_us()
    {
        $this->view('guest/about_us');
    }


    public function how_it_works()
    {
        $this->view('guest/how-it-works');
    }

    public function contact()
    {
        $this->view('guest/contact');
    }

    public function faqs()
    {
        $this->view('guest/faq');
    }


}


?>