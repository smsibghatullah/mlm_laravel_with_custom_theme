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
               <h1 style="margin-top:50px !important;" data-animation="fadeInLeft" data-delay=".6s ">Members</h1>
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
    if(count($members) > 0){
@endphp
<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="custom">Date</div>
						<div class="custom">Name</div>
						<div class="custom">Level</div>
						<div class="custom">Status</div>
					</div>

					 @foreach ($members as $member)
					<div class="table-row">
						<div class="custom"> {{ date_format($member['created_at'],"Y/m/d");}}</div>
						<div class="custom">{{$member['full_name']}}</div>
						<div class="custom">{{$member['level']}}-Level</div>
						<div class="custom">{{$member['status']}}</div>

					</div>
					 @endforeach

												</div>
											</div>
@php
        }else {
            echo "<h1>No Member</h1>";
        }
@endphp

    </main><!--//app-content-->

	   @endsection
