@extends('admin.layout') 
@section('content')    

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Transaction for 	</h1>
			   
                <div class="row gy-4">
	                <div class="col-12 col-lg-6">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
						                
							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">Profile</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4 w-100">
							    
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Name</strong></div>
									        <div class="item-data">{{ $profile['full_name']}}</div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Email</strong></div>
									        <div class="item-data">{{ $profile['email']}}</div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->
						  
							

								<form method="POST" action="/administrator/transaction">
								@csrf
									<div style="display:none">
										<input name="user_id" value="{{ $profile['id']}}">
									</div>
									<div class="item border-bottom py-3">
										<div class="row justify-content-between align-items-center">
											<div class="col-auto">
												<div class="item-label"><strong>Title</strong></div>
												<input name="title">
											</div><!--//col-->

										</div><!--//row-->
									</div><!--//item-->

									<div class="item border-bottom py-3">
										<div class="row justify-content-between align-items-center">
											<div class="col-auto">
												<div class="item-label"><strong>Description</strong></div>
												<input name="description">
											</div><!--//col-->

										</div><!--//row-->
									</div><!--//item-->

									<div class="item border-bottom py-3">
										<div class="row justify-content-between align-items-center">
											<div class="col-auto">
												<div class="item-label"><strong>Amount</strong></div>
												<input name="amount" type="number">
											</div><!--//col-->

										</div><!--//row-->
									</div><!--//item-->

									<div class="item border-bottom py-3">
										<div class="row justify-content-between align-items-center">
											<div class="col-auto">
												<div class="item-label"><strong>Amount</strong></div>
												<select name="deposit_withdraw" id="">
													<option value="deposit">Deposit</option>
													<option value="withdraw">Withdraw</option>
												</select>
											</div><!--//col-->

										</div><!--//row-->
									</div><!--//item-->

									<div class="item border-bottom py-3">
										<div class="row justify-content-between align-items-center">
											<div class="col-auto">
												<td class="cell"><button type="submit" class="btn-lg app-btn-secondary" >Submit</button></td>

											</div><!--//col-->

										</div><!--//row-->
									</div><!--//item-->

								</form>

						    </div><!--//app-card-body-->


						   
						</div><!--//app-card-->
	                </div><!--//col-->

					

                </div><!--//row-->
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	   @endsection