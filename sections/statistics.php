<?php

if(is_plugin_active("vpmlm/vpmlm.php")  && vp_option_array($option_array,'mlm') == "yes"){
				global $wpdb;
$table_name = $wpdb->prefix."vp_levels";
				
						
						echo'
					
					<!-- REFERAL -->
					
					
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-gray-200 dark-white">
                                        <h3 class="card-title p-2">Statistics</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
									
                                    <div class="card-body">
                                        <h5 class="card-title" id="refstats">Refer Stats</h5>
                                        <table class="table table-light">
                                            <thead class="bg-gray-100">
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Value</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            <td>Refered By</td>
                                            <td>'.$ref_by.'</td>
                                        </tr>
                                             <tr>
                                        <td>Total PVs</td>
                                        <td>'.get_userdata($id)->vp_user_pv.'</td>
                                             </tr>
												';
											if(isset($level) && isset($level[0]->total_level)){
											$total_level = $level[0]->total_level;
											
											for($lev = 1; $lev <= $total_level; $lev++){
												if($lev == 1){
													echo'
                                                <tr>
                                                    <td>No. Direct Referees</td>
                                                    <td>'.$total_refered.'</td>
                                                </tr>
												';
												}
											    elseif($lev == 2){
													echo'
												
                                                <tr>
                                                    <td>No. Second Level Referees</td>
                                                    <td>'.$total_inrefered.'</td>
                                                </tr>
												';
												}
												elseif($lev == 3){
													echo'
												<tr>
                                                    <td>No. Third level Referees And Above</td>
                                                    <td>'.$total_inrefered3.'</td>
                                                </tr>
												';
												}
                                                else{}
											}
											}
											if(isset($level) && isset($level[0]->total_level)){
											$total_level = $level[0]->total_level;
											
											for($lev = 1; $lev <= $total_level; $lev++){
												if($lev == 1){
													echo'
												<tr>
                                                    <td>Total Earned From Direct Referee Upgrades</td>
                                                    <td>₦'.$total_dir_earn.'</td>
                                                </tr>
												';
												}
												
												elseif($lev == 2){
													echo'
												<tr>
                                                    <td>Total Earned From Second Level Referee Upgrades</td>
                                                    <td>₦'.$total_indir_earn.'</td>
                                                </tr>
												';
												}
												elseif($lev == 3){
													echo'
												<tr>
                                                    <td>Total Earned From Third Level Referee Upgrades Downward</td>
                                                    <td>₦'.$total_indir_earn3.'</td>
                                                </tr>
												';
												}else{}
											}
											
}
												echo'
                                           </tbody>
                                        </table>
                                    </div>
									
									
									
									
									<div class="card-body">
                                        <h5 class="card-title" id="bonusstats">Transaction & Bonus Stats</h5>
                                        <table class="table table-light">
                                            <thead class="bg-gray-100">
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Value</th>
                                            </tr>
                                            </thead>
                                            <tbody>
												<tr>
                                                    <td>No. Of Transactions Attempted</td>
                                                    <td>'.$total_trans_attempt.'</td>
                                                </tr>
												<tr>
                                                    <td>No. Of Successful Transactions Made</td>
                                                    <td>'.$total_suc_trans.'</td>
                                                </tr>
												';
											if(strtolower(vp_getoption("totcons")) == "yes"){
												echo'
												<tr>
                                                    <td>Total Amount Of Transactions Consumed</td>
                                                    <td>₦'.$cur_suc_trans_amt.'</td>
                                                </tr>
												';
											}
												echo'
												<tr>
                                                    <td>Total Amount Of Transaction Bonus Earned</td>
                                                    <td>₦'.$total_trans_bonus.'</td>
                                                </tr>
												';
										if(isset($level) && isset($level[0]->total_level)){
											$total_level = $level[0]->total_level;
											
											for($lev = 1; $lev <= $total_level; $lev++){
												if($lev == 1){
													echo'
												<tr>
                                                    <td>Total Amount Of Transaction Bonus Earned From Direct Referee</td>
                                                    <td>₦'.$total_dirtrans_bonus.'</td>
                                                </tr>
												';
												}
												elseif($lev == 2){
													echo'
												<tr>
                                                    <td>Total Amount Of Transaction Bonus Earned From Second Level Referee</td>
                                                    <td>₦'.$total_indirtrans_bonus.'</td>
                                                </tr>
												';
													}
												elseif($lev == 3){
													echo'
												<tr>
                                                    <td>Total Amount Of Transaction Bonus Earned From Third Level Referee Downwards</td>
                                                    <td>₦'.$total_indirtrans_bonus3.'</td>
                                                </tr>
												';
														}else{}
											}
										}
										echo'
                                           </tbody>
                                        </table>
                                    </div>
									
									
									
									
									<!-- WITHDRAWALS -->
									
				';
									
					if(strtolower(vp_option_array($option_array,"allow_withdrawal")) == "yes" ){
						echo'
									
									<div class="card-body">
                                        <h5 class="card-title">Withdrawals</h5>
                                        <table class="table table-light">
                                            <thead class="bg-gray-100">
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Value</th>
                                            </tr>
                                            </thead>
                                            <tbody>
												<tr>
                                                    <td>No. Of Withdrawals Made</td>
                                                    <td>'.$total_withdraws.'</td>
                                                </tr>
												<tr>
                                                    <td>Total Balance</td>
                                                    <td>₦'.$total_bal_with.'</td>
                                                </tr>
												<tr>
                                                    <td>Minimum Amount Withdrawable</td>
                                                    <td>₦'.$minwithle.'</td>
                                                </tr>
												<tr>
                                                    <td>Action</td>
                                                    <td>';
                                                    if(strtolower($myplan) != strtolower("customer")){
                                                      echo'
													<a href="?vend=withdraw">
                                                    <button class="shadow rounded btn-success px-3 py-1" >Withdraw</button>
													</a>
                                                    ';
													
                                                    }
                                                    else{
                                                      echo'
                                                     <a href="?vend=upgrade"> <button  class="shadow rounded btn-info px-3 py-1 " "> Upgrade </button></a>
                                                      ';
                                                    }
                                                    
                                                    echo'</td>
                                                </tr>
                                           </tbody>
                                        </table>
                                    </div>
									
									';
					}
									
											
							echo'		
									
									
                                </div>
                            </div>
';

					}
					
					?>