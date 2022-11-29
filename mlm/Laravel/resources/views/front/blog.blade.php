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
               <h1 data-animation="fadeInLeft" data-delay=".6s ">Blog</h1>
             </div>
           </div>
         </div>
       </div>
     </div> 
</div>

<section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                             @foreach ($blogs as $blog)

                            <article class="blog_item">
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                    <span class="blog-head" style="font-size: 30px;color: #2d2d2d;font-weight: 700;font-family: Pop,sans-serif;line-height: 1.3;">
                                        {{$blog['title']}}</span>
                                    </a>
                                    <p>{{$blog['description']}}<br/>{{ date_format($blog['created_at'],"Y/m/d");}}</p>

                                </div>
                            </article>
                            @endforeach

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Blog Area End -->



</main>
@endsection
