@extends('admin.layout') 
@section('content')    

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">News</h1>
			            <a href="/administrator/news/create" class="btn app-btn-primary" >Create</a>
				    </div>

			    </div><!--//row-->				

				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Title</th>
												<th class="cell">Date</th>
											</tr>
										</thead>
										<tbody>
						                @foreach($blogs as $blog)
											<tr>
												<td class="cell">{{$blog['title']}}</td>
												<td>{{$blog['created_at']}}</span></td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="/administrator/userdetails/{{$blog['id']}}">View</a></td>
											</tr>
											 @endforeach
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->

						
			        </div><!--//tab-pane-->
			        
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	   @endsection