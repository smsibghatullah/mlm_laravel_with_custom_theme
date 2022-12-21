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
               <h1 data-animation="fadeInLeft" data-delay=".6s ">Reset Your Password</h1>
             </div>
           </div>
         </div>
       </div>
     </div> 
</div>
  
   <section class="blog_area single-post-area section-padding">
     <div class="container">
      <div class="">

<center>
        <form method="POST" action="/forget-password">
                        @csrf
                          <div class="form-group row">
                            <label style="font-size: 17px";for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-3">
                                <input style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 10px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   <div class="form-group row mb-0">
                         <div class="col-md-2 offset-md-4">
                                <button type="submit" class="btn btn-sm ">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
    </center>

  </div>
</div>
</section>
</main>


@endsection