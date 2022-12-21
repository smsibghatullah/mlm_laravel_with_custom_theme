@extends('admin.layout')
@section('content')

    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Users</h1>
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
												<th class="cell">Email</th>
												<th class="cell">Name</th>
												<th class="cell">Amount</th>
												<th class="cell">Date</th>
												<th class="cell">Level</th>
												<th class="cell">Code</th>
												<th class="cell">Status</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
					                @foreach ($users as $user)
											<tr>
												<td class="cell">{{$user['email']}}</td>
												<td class="cell"><span class="truncate">{{$user['full_name']}}</span></td>
												<td class="cell"><span></span><span class="note"></span></td>
												<td class="cell"><span class="badge bg-success">{{$user['created_at']}}</span></td>
												<td>{{$user['level']}}</td>
												<td class="cell">{{$user['code']}}</td>
												<td>{{$user['status']}}</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="/administrator/userdetails/{{$user['id']}}">View</a></td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="/administrator/transaction/{{$user['id']}}">Transaction</a></td>

											</tr>
											 @endforeach

										</tbody>
									</table>
                                    <div style="float: right">
                                        {!!  $users->links('vendor.pagination.bootstrap-4') !!}
                                     </div>
						        </div><!--//table-responsive-->

						    </div><!--//app-card-body-->
						</div><!--//app-card-->


			        </div><!--//tab-pane-->

				</div><!--//tab-content-->



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
 @endsection
