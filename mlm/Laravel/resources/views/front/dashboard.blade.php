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
               {{-- <h1 style="margin-top:50px !important;" data-animation="fadeInLeft" data-delay=".6s ">Transactions</h1> --}}
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

<div class="container">
    <br><br>
    <div class="row">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
            <h5 class="card-title" style="margin-top:10px">Account id</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{Auth::user()->code}}</h6>
            </div>
        </div>
            <div class="card" style="width: 20em;">
                <div class="card-body">
                <h5 class="card-title" style="margin-top:10px">Email</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{Auth::user()->email}}</h6>
                </div>
            </div>



            <div class="card" style="width: 20rem;">
                <div class="card-body">
                <h5 class="card-title" style="margin-top:10px">Referral link</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{URL::to('/register')}}/{{Auth::user()->code}}</h6>
                </div>
            </div>

            <div class="card" style="width: 20rem;">
                <div class="card-body">
                <h5 class="card-title" style="margin-top:10px">Current level </h5>
                <h6 class="card-subtitle mb-2 text-muted">{!! Helper::userlevel(Auth::user()->code) !!}
                </h6>
                </div>
            </div>
    </div>

      <br><br>
      <div class="">
        {{-- <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p> --}}
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Today Earning Complete Bonus</th>
              <th>Direct Ref Bouns Total</th>
              <th>Matching Bonus</th>
              <th>Team Commission</th>
              <th>Level</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ Helper::todayEarning(Auth::user()->id) }}</td>
              <td>{{ Helper::dirctRefBouns(Auth::user()->id) }}</td>
              <td>{{ Helper::matchingBouns(Auth::user()->id) }}</td>
              <td>{{ Helper::teamCommission(Auth::user()->id) }}</td>
              <td>{!! Helper::userlevel(Auth::user()->code) !!}</td>
            </tr>

          </tbody>
        </table>
      </div>

            <br><br><br>


                  <h2  style="margin-top:10px">Total Earning: {{ Helper::totalRearning(Auth::user()->id) }}</h2>

                  <h2  style="margin-top:10px">Total Widtdraw: {{ Helper::totalWidtdraw(Auth::user()->id) }}</h2>


            <br><br><br><br><br>


</div>

</main><!--//app-content-->

	   @endsection
