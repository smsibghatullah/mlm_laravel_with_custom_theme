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
               <h1 data-animation="fadeInLeft" data-delay=".6s ">Login</h1>
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
      <form action="/loginpost" method="POST" >
        <fieldset>
          {{ csrf_field() }}


        <div class="form-group">
            
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 10px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; placeholder="Email" class="form-control"  type="text" name="email" />
            </div>
          </div>
        </div>

        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 10px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; placeholder="Password" class="form-control" name="password"  type="Password" />
            </div>
          </div>
        </div>

        <!-- Button -->
       <!--  <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-2">
            <input style="float:left;" type="submit"  value="submit" class="btn btn-warning"></input>
            <span>  
              <button type="submit" class="btn btn-primary">
                                    Reset Password
           </button>
            </span>
          </div>
        </div>
 -->
         <!-- Button -->
        <div class="row mb-0 justify-content-center">
          <div class="col-md-12">
                        <input  type="submit"  value="submit" class="btn btn-warning"></input>
          </div>

          <div class="col-md-12">              
            <a href="{{url('/forget-password')}}" class="btn btn-primary btn-sm"> Reset Password </a>           
          </div>

                        </div>
                    </form>

        </fieldset>
    </form>
    </center>

  </div>
</div>
</section>
</main>


@endsection