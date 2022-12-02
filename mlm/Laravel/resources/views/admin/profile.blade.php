@extends('admin.layout')
@section('content')

    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

			    <h1 class="app-page-title">User Detail</h1>
			    @if($profile['status']!='Approved')
			    <div class="row">
			    	<div>
                @php
                    if($deposits[0]['status'] != 'Approved'){
                @endphp
			   	<a href="/administrator/mark_approved/{{ $profile['id']}}"><button class="btn app-btn-primary" name="Approved">Approve</button></a>
			   @php
                    }
               @endphp
                </div>
			   </div>
			   	@endif
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

							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Phone</strong></div>
									        <div class="item-data">
										        {{ $profile['phone']}}
									        </div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Status</strong></div>
									        <div class="item-data">
										        {{ $profile['status']}}
									        </div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Level</strong></div>
									        <div class="item-data">
										        {{ $profile['level']}}-Level
									        </div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->
						    </div><!--//app-card-body-->

<!-- 						    <div class="app-card-footer p-4 mt-auto">
							   <a class="btn app-btn-secondary" href="#">Manage Profile</a>
						    </div><!--//app-card-footer-->

						</div><!--//app-card-->
	                </div><!--//col-->

					@php
	                if(count($deposits)>0)
	                {
	                @endphp
	                <div class="col-12 col-lg-6">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">

							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">Payment</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4 w-100">

							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Amount</strong></div>
									        <div class="item-data">{{ $deposits[0]['amount']}}</div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Status</strong></div>
									        <div class="item-data">{{ $deposits[0]['status']}}</div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->

							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Date </strong></div>
									        <div class="item-data">{{ date_format($deposits[0]['created_at'],"Y/m/d");}}</div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->

							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Image</strong></div>
									        <div class="item-data">
										       <a target="new" href="/images/deposit/{{ $deposits[0]['image'] }}"> <img src="/images/deposit/{{ $deposits[0]['image'] }}" width="200px"/></a>
									        </div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->

						    </div><!--//app-card-body-->

						</div><!--//app-card-->
	                </div><!--//col-->


					@php
	                }
	                @endphp



                </div><!--//row-->

		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	   @endsection
