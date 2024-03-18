@extends('layouts.user.master')

@section('content')
    <!-- ======================Navbar section ends here============ -->
<!-- =========================================================== -->
<!-- ======================Hero section start from here============ -->

  <section class="hero-section">
    <div class="container">
      <div class="hero-wrapper">
        <div class="hero-header">
          <h1>e-Tender Portal</h1>
        </div>
        <div class="hero-content">
          <div class="row align-items-center">
            <div class="col-md-5">
              <ul>
                <li>
                  <a href="{{route('user.tender-participation')}}" class="hero-custom-btn">
                 <div class="live-logo-img">
                   <img src="{{asset('assets-frontend/home-image/live-tender.png')}}" alt="LIVE TENDER"> 
                 </div>
                  <span> LIVE TENDER</span>
                 </a>
                </li>
                <li>
                  <a href="#" class="hero-custom-btn">
                    <div class="live-logo-img">
                      <img src="{{asset('assets-frontend/home-image/closing-today.png')}}" alt="CLOSING TODAY"> 
                 </div>
                  
                <span> CLOSING TODAY</span> 
                </a>
                </li>
                <li>
                  <a href="#" class="hero-custom-btn">
                    <div class="live-logo-img">
                <img src=" {{asset('assets-frontend/home-image/tender-notice.png')}}" alt="TENDER NOTICE"> 
                 </div>
                  
                <span> TENDER NOTICE</span> 
                </a>
                </li>
                <li>
                  <a href="#" class="hero-custom-btn">
                    <div class="live-logo-img">
              <img src="{{asset('assets-frontend/home-image/award-tender.png')}}" alt="AWARD TENDER"> 
                 </div>
                  
                <span> AWARD TENDER</span> 
                </a>
                </li>
              </ul>
            </div>
            <div class="col-md-7">
              <div class="hero-text">
                <p>জনাব/ জনাবা,</p>
                <p>আপনাকে রামগঞ্জ পৌরসভার পক্ষ থেকে শুভেচ্ছা আপনি জেনে আনন্দিত হবেন, যে রামগঞ্জ পৌরসভার  প্রকিউরমেন্টের বিভিন্ন চাহিদার বিপরীতে টেন্ডারে অংশগ্রহণ প্রক্রিয়া আগামীতে (০১ মার্চ ২০২৪ থেকে) শুধু মাত্র অনলাইনে কোটেশন জমা দেয়া যাবে</p>  
                <p>এমতাবস্থায়, অনলাইনে টেন্ডার প্রক্রিয়ায় অংশগ্রহণ করার ধাপ গুলো ও করণীয় সম্পর্কে জানতে সংযুক্ত প্রেজেন্টেশনটি দেখুন এবং ই-টেন্ডারে রেজিস্ট্রেশন করার জন্য নিচের লিঙ্কে ভিজিট করুন। <br>ই- টেন্ডার লিঙ্কঃ   <a href="index.html">tender.ramgonjpouroshova.com</a></p>  
                <p><a href="/">tender.ramgonjpouroshova.com</a> ভিজিট করলে Featured Tenders থেকে শুধুমাত্র টেন্ডার গুলো দেখা যাবে ই-টেন্ডারে ভেন্ডর/ সাপ্লায়ার রেজিস্ট্রেশন সম্পন্ন হওয়া ব্যাতিত টেন্ডার প্রক্রিয়ায় অংশগ্রহণ করা যাবে না</p>  
                <p>যদি আপনার প্রতিষ্ঠানের নাম ইতিমধ্যে রেজিস্ট্রেশন করা থাকে তাহলে আপনার User ID ও প্রাথমিক password জানার জন্য দ্রুত প্রকিউরমেন্টে যোগাযোগ করুন এবং প্রাথমিক password পরিবর্তন করে নিজেই অনলাইনে দরপত্র জমাদান প্রক্রিয়া সম্পন্ন করুন প্রয়োজনে আমাদের সহযোগিতা নিন।</p>
                <p>মনে রাখবেন, আগামীতে ই-মেইলে কিংবা বক্সে কোটেশন জমা দেয়া যাবে না</p>
                <p>বিষয়টি আপনার অবগতি ও প্রয়োজনীয় করণীয় এর জন্য জানানো হল</p>
                <p>সহযোগীতার জন্য যোগাযোগ করুনঃ <br> Cell: <a href="tel:1234567890">123-456-7890</a></p> 
                <p><a href="mailto:support@ramgonjpouroshova.com">support@ramgonjpouroshova.com</a> <br> অথবা প্রকিউরমেন্টের সংশ্লিষ্ট ব্যাক্তির সাথে যোগাযোগ করুন।</p>
  
                </p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

  </section>
  <!-- ======================Hero section ends here============ -->
<!-- =========================================================== -->
<!-- ======================Slider section starts here============ -->

<section class="featured-tenders-section">
  <div class="container">
    <div class="featured-tenders-section-wrapper">
      <div class="featured-tenders-section-content">
        <div class="featured-tenders-header d-flex align-items-center justify-content-between">
          <h3>Featured Tenders</h3>
         <div class="d-flex align-items-center gap-2">
          <p class="view-more">View More</p>
          <div class="d-flex align-items-center gap-2">
            <div class="button-prev">
              <img src="{{asset('assets-frontend/home-image/left-arrow.svg')}}" alt="">
            </div>
            <div class="button-next">
              <img src="{{asset('assets-frontend/home-image/right-arrow.svg')}}" alt="">
            </div>
          </div>
         </div>
        </div>
        <div class="featured-tenders-swiper">
          <div class="swiper-container swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="swiper-content-featured-tenders">
                  <p class="swipper-head-text">RFQ for Printer (Specifications Attached)</p>
                  <div class="counting-part">
                    <span>5Days: 23Hrs: 2Mins</span>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                      <span>Ref No:</span>
                      <p>BPD/2024/RFQ-528</p>
                    </div>
                    <div class="col-6">
                      <span>Opening Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Last Submission:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Closing Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>

                  </div>
                  <a href="">read more</a>
                </div>
             
               
              </div>
              <div class="swiper-slide">
                <div class="swiper-content-featured-tenders">
                  <p class="swipper-head-text">RFQ for Printer (Specifications Attached)</p>
                  <div class="counting-part">
                    <span>5Days: 23Hrs: 2Mins</span>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                      <span>Ref No:</span>
                      <p>BPD/2024/RFQ-528</p>
                    </div>
                    <div class="col-6">
                      <span>Opening Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Last Submission:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Closing Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>

                  </div>
                  <a href="">read more</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-content-featured-tenders">
                  <p class="swipper-head-text">RFQ for Printer (Specifications Attached)</p>
                  <div class="counting-part">
                    <span>5Days: 23Hrs: 2Mins</span>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                      <span>Ref No:</span>
                      <p>BPD/2024/RFQ-528</p>
                    </div>
                    <div class="col-6">
                      <span>Opening Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Last Submission:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Closing Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>

                  </div>
                  <a href="">read more</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-content-featured-tenders">
                  <p class="swipper-head-text">RFQ for Printer (Specifications Attached)</p>
                  <div class="counting-part">
                    <span>5Days: 23Hrs: 2Mins</span>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                      <span>Ref No:</span>
                      <p>BPD/2024/RFQ-528</p>
                    </div>
                    <div class="col-6">
                      <span>Opening Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Last Submission:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Closing Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>

                  </div>
                  <a href="">read more</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-content-featured-tenders">
                  <p class="swipper-head-text">RFQ for Printer (Specifications Attached)</p>
                  <div class="counting-part">
                    <span>5Days: 23Hrs: 2Mins</span>
                  </div>
                  
                  <div class="row">
                    <div class="col-6">
                      <span>Ref No:</span>
                      <p>BPD/2024/RFQ-528</p>
                    </div>
                    <div class="col-6">
                      <span>Opening Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Last Submission:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>
                    <div class="col-6">
                      <span>Closing Date:</span>
                      <p>07/03/2024 03:00 PM</p>
                    </div>

                  </div>
                  <a href="">read more</a>
                </div>
              </div>
              <!-- Add more slides as needed -->
            </div>
            <!-- Add navigation buttons -->
      
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

