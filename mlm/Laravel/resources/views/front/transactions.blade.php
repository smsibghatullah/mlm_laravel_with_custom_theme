@extends('front.layout')
@section('content')

<main>
   <div class="slider-area slider-bg ">
     <!-- Single Slider -->
     <div class="single-slider d-flex align-items-center slider-height3">
       <div class="container">
         <div class="row align-items-center justify-content-center">
           <div class="col-xl-8 col-lg-9 col-md-12 ">
             <div class="hero__caption hero__caption3 text-center">
               <h1 style="margin-top:50px !important;" data-animation="fadeInLeft" data-delay=".6s ">Transactions</h1>
             </div>
           </div>
         </div>
       </div>
     </div>
</div>
@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@php
    if(count($transactions) > 0){
@endphp
<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="custom">Date</div>
						<div class="custom">Transaction</div>
						<div class="custom">Title</div>
						<div class="custom">Description</div>
						<div class="custom">Amount</div>
						<div class="custom">Type</div>
						<!-- <div class="custom">Withdraw</div> -->
					</div>

					 @foreach ($transactions as $transaction)
					<div class="table-row">
						<div class="custom"> {{ date_format($transaction['created_at'],"Y/m/d");}}</div>
						<div class="custom">{{$transaction['transaction_id']}}</div>
						<div class="custom">{{$transaction['title']}}</div>
						<div class="custom">{{$transaction['description']}}</div>
						<div class="custom">{{$transaction['amount']}}</div>
						<div class="custom">@if($transaction['deposit']==1)
								Deposited @else
								Withdraw @endif
						</div>
						<!-- <div class="custom">{{$transaction['withdraw']}}</div> -->
					</div>
					 @endforeach
                     <div style="float: right">
                        {!!  $transactions->links('vendor.pagination.bootstrap-4') !!}
                     </div>

                     </div>
                     </div>


@php
        }else {
            echo "<h1>No Transaction</h1>";
        }
@endphp

    </main><!--//app-content-->

	   @endsection
