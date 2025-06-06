<?php

switch($_GET["sub"]){
            case"wallet":

                        $id = $thisResult->id;
                        $type = $thisResult->type;
                        $bamt = $thisResult->before_amount;
                        $namt = $thisResult->now_amount;
                        $status = ucfirst($thisResult->status);
                        $amount = $thisResult->fund_amount;
                        $time = $thisResult->the_time;


                        if(($status == "Approved" || $status == "Approve") && ($namt > $bamt) ){
                            $status = "credit";
                            $sign = "+";
                        }
                        elseif($status == "Pending"){
                            $status = "processing";
                            $sign = "~";

                        }
                        else{
                            $status = "debit";
                            $sign = "-";

                        }

                        $icon = '<i class="fas fa-wallet"></i>';
                        // strtolower($type) == "transfer" ? $thisResult->bank_details : $thisResult->sender;
                        $sender = strtolower($type) == "transfer" ? $thisResult->name : $thisResult->sender;
                        $recipient = strtolower($type) == "transfer" ? $thisResult->bank :  $thisResult->name ;
                        $button = '<i class="fas fa-wallet" link="?vend=wallet"></i> Fund Wallet';
            break;
            case"airtime":
                    
                $id = $thisResult->id;
                $type = "Airtime";
                $bamt = $thisResult->bal_bf;
                $namt = $thisResult->bal_nw;
                $status = ucfirst($thisResult->status);
                $amount = $thisResult->amount;
                $time = $thisResult->the_time;

                if($status == "Successful"){
                    $status = "success";
                    $sign = "-";
                }
                elseif($status == "Pending" || $status == "Processing"){
                    $status = "processing";
                    $sign = "~";
                }else{
                    $status = "failed";
                    $sign = "+";
                }

                $icon = '<i class="fas fa-square-phone-flip"></i>';
                $sender = $username;
                $recipient = $thisResult->phone;
                $button = '<i class="fas fa-mobile-retro" link="?vend=airtime"></i> Buy Airtime';


            break;
            case"data":
                            
                $id = $thisResult->id;
                $plan = preg_replace("/₦[a-zA-Z0-9\s\-]+/","",$thisResult->plan);
                $type = "Data/$plan";
                $bamt = $thisResult->bal_bf;
                $namt = $thisResult->bal_nw;
                $status = ucfirst($thisResult->status);
                $amount = $thisResult->amount;
                $time = $thisResult->the_time;

                if($status == "Successful"){
                    $status = "success";
                    $sign = "-";
                }
                elseif($status == "Pending" || $status == "Processing"){
                    $status = "processing";
                    $sign = "~";
                }else{
                    $status = "failed";
                    $sign = "+";
                }

                $icon = '<i class="fas fa-wifi"></i>';
                $sender = $username;
                $recipient = $thisResult->phone;
                $button = '<i class="fas fa-wifi" link="?vend=data"></i> Buy Data';


            break;
            case"cable":
                            
                $id = $thisResult->id;
                $iuc = $thisResult->iucno;
                $type = "Cable";
                $bamt = $thisResult->bal_bf;
                $namt = $thisResult->bal_nw;
                $status = ucfirst($thisResult->status);
                $amount = $thisResult->amount;
                $time = $thisResult->time;

                if($status == "Successful"){
                    $status = "success";
                    $sign = "-";
                }
                elseif($status == "Pending" || $status == "Processing"){
                    $status = "processing";
                    $sign = "~";
                }else{
                    $status = "failed";
                    $sign = "+";
                }

                $icon = '<i class="fas fa-tv"></i>';
                $sender = $thisResult->name;
                $recipient = $thisResult->iucno;
                $button = '<i class="fas fa-tv" link="?vend=cable"></i> Tv Subscription';

            break;
            case"bill":
                            
                $id = $thisResult->id;
                $iuc = $thisResult->meterno;
                $type = "Utility";
                $bamt = $thisResult->bal_bf;
                $namt = $thisResult->bal_nw;
                $status = ucfirst($thisResult->status);
                $amount = $thisResult->amount;
                $time = $thisResult->time;

                if($status == "Successful"){
                    $status = "success";
                    $sign = "-";
                }
                elseif($status == "Pending" || $status == "Processing"){
                    $status = "processing";
                    $sign = "~";
                }else{
                    $status = "failed";
                    $sign = "+";
                }

                $icon = '<i class="fa-regular fa-lightbulb"></i>';
                $sender = $thisResult->name;
                $recipient = $thisResult->meterno;
                $button = '<i class="fa-regular fa-lightbulb" link="?vend=bill"></i> Electricity Bill';
                $meter_token = $thisResult->meter_token;

            break;
            case"bet":
                            
                $id = $thisResult->id;
                $iuc = $thisResult->customerid;
                $type = "Bet Funding";
                $bamt = $thisResult->bal_bf;
                $namt = $thisResult->bal_nw;
                $status = ucfirst($thisResult->status);
                $amount = $thisResult->amount;
                $time = $thisResult->the_time;

                if($status == "Successful"){
                    $status = "success";
                    $sign = "-";
                }
                elseif($status == "Pending" || $status == "Processing"){
                    $status = "processing";
                    $sign = "~";
                }else{
                    $status = "failed";
                    $sign = "+";
                }

                $icon = '<i class="fa-regular fa-futbol"></i>';
                $sender = $thisResult->name;
                $recipient = $thisResult->customerid;
                $button = '<i class="fa-regular fa-futbol" link="?vend=bet"></i> Bet Funding';

            break;
            case"verification":
                            
                $id = $thisResult->id;
                $iuc = $thisResult->value;
                $type = "ID Verification";
                $bamt = $thisResult->before_amount;
                $namt = $thisResult->now_amount;
                $status = ucfirst($thisResult->status);
                $amount = $thisResult->fund_amount;
                $time = $thisResult->the_time;

                if($status == "Approved"){
                    $status = "success";
                    $sign = "-";
                }
                elseif($status == "Pending" || $status == "Processing"){
                    $status = "processing";
                    $sign = "~";
                }else{
                    $status = "failed";
                    $sign = "+";
                }

                $icon = '<i class="fas fa-id-badge"></i>';
                $sender = $thisResult->name;
                $recipient = $thisResult->value;
                $button = '<i class="fas fa-id-badge" link="?vend=bvn"></i> ID Verification';

            break;

}

?>