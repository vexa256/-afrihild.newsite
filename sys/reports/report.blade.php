 <!-- start of breadcumb-section -->
 <div class="wpo-breadcumb-area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="wpo-breadcumb-wrap">
                     <h2>{{ $Title }}</h2>
                     <ul>
                         <li><a href="{{ url('/') }}">Home</a></li>
                         <li><span>Reports</span></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end of wpo-breadcumb-section-->
 <!-- <div style="padding: 2em"></div> -->
 <!-- start of wpo-blog-section -->

 <section class="wpo-blog-section section-padding">
     <div class="container">
         <div class="wpo-blog-items">
             <div class="row">
                 @isset($GlobalData)

                 @foreach ($GlobalData as $data)
                 <div class="col col-lg-4 col-md-8 col-12 mb-4">
                     <a target="_blank" href="{{ asset($data->URL) }}">
                         <div class="wpo-blog-item shadow-lg card-body p-3">
                             <div class="wpo-blog-img">
                                 <img src="{{ asset($data->Thumbnail) }}" style="width: 100%; height: 60vh;">
                             </div>

                         </div>
                     </a>
                 </div>
                 @endforeach

                 @endisset

             </div>

         </div>
     </div>
 </section>
 <!-- end of wpo-blog-section -->
