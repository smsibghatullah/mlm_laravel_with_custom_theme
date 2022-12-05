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
               <h1 data-animation="fadeInLeft" data-delay=".6s ">Deposit</h1>
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

   <section class="blog_area single-post-area section-padding">
     <div class="container">
      <div class="">

<center style="border: 1px solid #ced4da!important;border-radius: 10px;padding: 2px;margin: 0px;a">
      <form class="well form-horizontal" action="/widthdraw" method="post"  id="contact_form" enctype="multipart/form-data">
        <fieldset>
          {{ csrf_field() }}

        <!-- Form Name -->


        <!-- Text input-->


        <div class="form-group">

          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input readonly="readonly" style="font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center";  placeholder="E-mail" class="form-control"  type="text" value="{{$user_detail['email']}}">
            </div>
          </div>
        </div>


        <div class="form-group">

          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="amount" placeholder="Widtdraw Amount $USD" class="form-control"  type="text">
            </div>
              @if($errors->has('amount'))
            <small class="text-danger">{{ $errors->first('amount') }}</small>
        @endif


          </div>
        </div>



        <div class="form-group">

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4"><br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
          </div>
               </div>

        </fieldset>
    </form>
    </center>



  </div>
</div>
</section>
</main>


@endsection
