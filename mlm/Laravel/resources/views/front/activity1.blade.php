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
               <h1 data-animation="fadeInLeft" data-delay=".6s ">Activity</h1>
             </div>
           </div>
         </div>
       </div>
     </div> 
</div>
  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
   <section class="blog_area single-post-area section-padding">
     <div class="container">
      <div class="">

<center style="border: 1px solid #ced4da!important;border-radius: 10px;padding: 40px;margin: 0px;">



<div class="activity_box"><div>
  <span id="text_1">Start Activity 1 </span></div><br/><br/>
    <button id='1' class="btn activity_popup"> Start Activity </button>
</div>
<br/>

<div class="activity_box"><div>
  <span id="text_2">Start Activity 2 </span></div><br/><br/>
    <button id='2' class="btn activity_popup"> Start Activity </button>
</div>

      </center>

  </div>
</div>
</section>
</main>


@endsection