@extends('admin.layout') 
@section('content')    

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Settings</h1>
			   
                <div class="row gy-4">
	                <div class="col-12 col-lg-6">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
						                
							        </div><!--//col-->

						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4 w-100">
							    <form method="post" action="/administrator/settingedit/{{$setting['id']}}">
							    	 {{ csrf_field() }}
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Key</strong></div>
									        <div class="item-data">{{$setting['key']}}
									        </div>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><strong>Value</strong></div>
									        <div class="item-data"><textarea name="value" >{{$setting['value']}}</textarea></div>
									    </div><!--//col-->

								    </div><!--//row-->
							    </div><!--//item-->
							    <div class="item border-bottom py-3">
								    <div class="row justify-content-between align-items-center">
									    <div class="col-auto">
										    <div class="item-label"><input type="submit" name="submit" class="btn app-btn-primary" value="Submit"></div>
									    </div><!--//col-->
								    </div><!--//row-->
							    </div><!--//item-->
							</form>

						   
						</div><!--//app-card-->
	                </div><!--//col-->
                </div><!--//row-->
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	   @endsection