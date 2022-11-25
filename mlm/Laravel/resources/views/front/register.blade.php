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
               <h1 data-animation="fadeInLeft" data-delay=".6s ">Registration Form</h1>
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
      <form class="well form-horizontal" action="/store" method="post"  id="contact_form">
        <fieldset>
          {{ csrf_field() }}


        <div class="form-group">
            

          <div class="container">
            <div class="row">
              <div class="col-md-6">
                
              </div>

                <div class="col-md-6">
                
              </div>
              
            </div>
          </div>


          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  style= "font-size: 17px;font-family:unset; display:flex; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="full_name" placeholder="Full Name" class="form-control"  type="text">
          </div>
          @if($errors->has('full_name'))
            <small class="text-danger">{{ $errors->first('full_name') }}</small>
        @endif   
        
          </div>
        </div>

        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  style= "font-size: 17px;font-family:unset; display:flex; padding: 0.5rem 0.5rem; height: 50px !important ; border: 2px solid #ced4da; justify-content-center"; name="user_name" placeholder="User Name" class="form-control"  type="text">
          </div>
          @if($errors->has('user_name'))
            <small class="text-danger">{{ $errors->first('user_name') }}</small>
          @endif       
        
          </div>
        </div>

        <div class="form-group">
            
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  style= "font-size: 17px;font-family:unset;display:flex; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="email" placeholder="Email" class="form-control"  type="text">
          </div>
          @if($errors->has('email'))
            <small class="text-danger">{{ $errors->first('email') }}</small>
        @endif        
       
          </div>
        </div>
        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input style= "font-size: 17px;font-family:unset;display:flex; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="fund_password" placeholder="Fund Password" class="form-control"  type="Password">
          </div>
          @if($errors->has('fund_password'))
            <small class="text-danger">{{ $errors->first('fund_password') }}</small>
          @endif        
       
          </div>
        </div>
        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input style= "font-size: 17px;font-family:unset; display:flex; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="confirm_fund_password" placeholder="Fund Password (Retype)" class="form-control"  type="Password">
          </div>
          @if($errors->has('confirm_fund_password'))
            <small class="text-danger">{{ $errors->first('confirm_fund_password') }}</small>
          @endif       
          
          </div>
        </div>


        <div class="form-group">
            
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  style= "font-size: 17px;font-family:unset;display:flex; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="phone" placeholder="Phone" class="form-control"  type="text">
             
        </div>
          </div>
        </div>
        
        <div class="form-group">           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input style= "font-size: 17px;font-family:unset;display:flex; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="parent_code" placeholder="Refereance Code" class="form-control"  type="text">
          @if($errors->has('parent_code'))
            <small class="text-danger">{{ $errors->first('parent_code') }}</small>
          @endif       
        </div>
          </div>
        </div>



        <div class="form-group">            
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input style= "font-size: 17px;font-family:unset;display:flex; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="password" placeholder="Password" class="form-control"  type="Password">
          </div>
          @if($errors->has('password'))
            <small class="text-danger">{{ $errors->first('password') }}</small>
          @endif        
       
          </div>
        </div>
        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input style= "font-size: 17px;font-family:unset;display:flex; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="confirm_password" placeholder="Re-Password" class="form-control"  type="Password">
          </div>
          @if($errors->has('confirm_password'))
            <small class="text-danger">{{ $errors->first('confirm_password') }}</small>
          @endif       
        
          </div>
        </div>



        <!-- Select Basic -->

        <!-- Success message -->
        <!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div> -->

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