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
               <h1 data-animation="fadeInLeft" data-delay=".6s "></h1>
             </div>
           </div>
         </div>
       </div>
     </div> 
</div>
  
   <section class="blog_area single-post-area section-padding">
     <div class="container">
      <div class="row">


      <form class="well form-horizontal" action="/store" method="post"  id="contact_form">
        <fieldset>
          {{ csrf_field() }}

        <!-- Form Name -->
        <legend><center><h2><b>Profile</b></h2></center></legend><br>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Full Name</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="name" placeholder="Full Name" class="form-control" value="{{ $profile->name }}" type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">User Name</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="user_name" placeholder="User Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Email</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="email" placeholder="Email" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Fund Password</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="fund_password" placeholder="Password" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Fund Password (Retype)</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  placeholder="Password" class="form-control"  type="text">
            </div>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label">Phone</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="phone" placeholder="Phone" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Refereance Link</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="code" placeholder="Code" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Refereance Link</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="parent_code" placeholder="Code" class="form-control"  type="text">
            </div>
          </div>
        </div>



        <div class="form-group">
          <label class="col-md-4 control-label">Password</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="password" placeholder="Password" class="form-control"  type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Password (Retype)</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input placeholder="Password" class="form-control"  type="text">
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

  </div>
</div>
</section>
</main>


@endsection