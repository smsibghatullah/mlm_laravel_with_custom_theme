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
               <h1 style="margin-top:50px !important;" data-animation="fadeInLeft" data-delay=".6s ">Profile</h1>
             </div>
           </div>
         </div>
       </div>
     </div> 
</div>
  
   <section class="blog_area single-post-area section-padding">
     <div class="container">
      <div class="">

      <center style="border: 1px solid #ced4da!important;border-radius: 10px;padding: 2px;margin: 0px;a">
      <form class="well form-horizontal" action="/store" method="post"  id="contact_form">
        <fieldset>
          {{ csrf_field() }}

        <!-- Form Name -->
        <legend><center><h2><b></b></h2></center></legend><br>

        <!-- Text input-->

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
          <input value="{{ $profile->name }}" style="font-size: 17px;font-family:unset; display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center" name="name" placeholder="Full Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input value="{{ $profile->user_name}}"  style= "font-size: 17px;font-family:unset; display:flex;margin-bottom: 20px; padding: 0.5rem 0.5rem; height: 50px !important ; border: 2px solid #ced4da; justify-content-center"; name="user_name" placeholder="User Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
            
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input value="{{ $profile->email}}"  style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="email" placeholder="Email" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px lid #ced4da; justify-content-center"; name="fund_password" value="{{ $profile->fund_password}}" so placeholder="Fund Password" class="form-control"  type="Password">
            </div>
          </div>
        </div>
        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  value="{{ $profile->fund_password}}" style= "font-size: 17px;font-family:unset; display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; placeholder="Fund Password (Retype)" class="form-control"  type="Password">
            </div>
          </div>
        </div>


        <div class="form-group">
            
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input   value="{{ $profile->phone}}" 
   style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="Phone" placeholder="Phone" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input value="{{ $profile->code}}" style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="code" placeholder="Refereance Code" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  value="{{ $profile->password}}" style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="parent_code" placeholder="Refereance Link" class="form-control"  type="text">
            </div>
          </div>
        </div>



        <div class="form-group">
            
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  value="{{ $profile->password}}" style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; name="password" placeholder="Password" class="form-control"  type="Password">
            </div>
          </div>
        </div>
        <div class="form-group">
           
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input value="{{ $profile->password}}"  style= "font-size: 17px;font-family:unset;display:flex;margin-bottom: 30px; padding: 0.5rem 0.5rem; height: 50px !important; border: 2px solid #ced4da; justify-content-center"; placeholder="Re-Password" class="form-control"  type="Password">
            </div>
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