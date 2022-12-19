@extends('admin.layout')
@section('content')

    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">

			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">withdraw Requests</h1>
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
												<th class="cell">Total Earning</th>
												<th class="cell">Remaining Amount</th>
												<th class="cell">Amount</th>
												<th class="cell">TRC</th>
												<th class="cell">Date</th>

												<th class="cell">Status</th>
                                                <th></th>
                                                <th></th>
											</tr>
										</thead>
										<tbody>
					                @foreach ($users as $user)
											<tr>
												<td class="cell">{{$user->user['email']}}</td>
												<td class="cell"><span class="truncate">{{$user->user['full_name']}}</span></td>
												<td class="cell">{{ Helper::totalRearning($user->user['id']) }}</td>
												<td class="cell">{{ Helper::totalRearning($user->user['id']) - Helper::totalWidtdraw($user->user['id']) }}</td>
												<td class="cell">{{$user['amount']}}</td>
												<td class="cell">{{$user['trc']}}</td>
												<td class="cell"><span class="badge bg-success">{{$user['created_at']}}</span></td>

												<td>{{$user['status']}}</td>
												<td class="cell">
                                                  @if ($user['status'] != 'approve')

                                                  <a class="btn-sm app-btn-secondary" href="/administrator/withdraw/approve/{{$user['id']}}">Approve</a>
                                                  @endif
                                                </td>
												<td class="cell">
                                                    @if ($user['status'] != 'approve')
                                                    <a class="btn-sm app-btn-secondary" href="/administrator/withdraw/cancel/{{$user['id']}}">Cancel</a>
                                                    @endif
                                                </td>

											</tr>
											 @endforeach

										</tbody>
									</table>
						        </div><!--//table-responsive-->
                                <div style="float: right">
                                    {!!  $users->links('vendor.pagination.bootstrap-4') !!}
                                 </div>

						    </div><!--//app-card-body-->
						</div><!--//app-card-->


			        </div><!--//tab-pane-->

				</div><!--//tab-content-->



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
 @endsection
