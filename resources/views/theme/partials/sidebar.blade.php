   <!-- Start Code show Seeders -->
   @php
       use App\Models\Category;

       $sidebarCategoris = Category::get();
   @endphp
   <!-- End Code show Seeders -->




   <div class="col-lg-4 sidebar-widgets">
       <div class="widget-wrap">



           <!-- ============= Start FORM SUBSCRIBE SIDEBAR =============-->
           <div class="single-sidebar-widget newsletter-widget">
               <h4 class="single-sidebar-widget__title">Newsletter</h4>
               <div class="form-group mt-30">
                   <div class="col-autos">




                       <!-- == Start Status Success == -->
                       @if (session('status'))
                           <div class="alert alert-success">
                               {{ session('status') }}
                           </div>
                       @endif
                       <!-- == End  Status Success == -->

                       <form method="POST" action ="{{ route('subscriber.store') }}">
                           @csrf




                           <input name ="email" type="text" value ="{{ old('email') }}" class="form-control"
                               id="inlineFormInputGroup" placeholder="Enter email eee" onfocus="this.placeholder = ''"
                               onblur="this.placeholder = 'Enter email'">

                           @error('email')
                               <span class="text-danger sm">{{ $message }}</span>
                           @enderror
                           <button type="submit" class="bbtns d-block  w-100 mt-2">Subcribe</button>


                   </div>

                   </form>

               </div>
           </div>
           <!-- ============= End FORM SUBSCRIBE SIDEBAR =============-->


           <!-- Start Code show Seeders -->
           @if (count($sidebarCategoris) > 0)
               <div class="single-sidebar-widget post-category-widget">
                   <h4 class="single-sidebar-widget__title">Category</h4>
                   <ul class="cat-list mt-20">


                       @foreach ($sidebarCategoris as $category)
                           <li>
                               <a href="#" class="d-flex justify-content-between">
                                   <p>{{ $category->name }}</p>
                                   <p>(03)</p>
                               </a>
                           </li>
                       @endforeach


                   </ul>
               </div>
           @endif
           <!-- End Code show Seeders -->


           <div class="single-sidebar-widget popular-post-widget">
               <h4 class="single-sidebar-widget__title">Recent Post</h4>
               <div class="popular-post-list">
                   <div class="single-post-list">
                       <div class="thumb">
                           <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/thumb/thumb1.png"
                               alt="">
                           <ul class="thumb-info">
                               <li><a href="#">Adam Colinge</a></li>
                               <li><a href="#">Dec 15</a></li>
                           </ul>
                       </div>
                       <div class="details mt-20">
                           <a href="blog-single.html">
                               <h6>Accused of assaulting flight attendant miktake alaways</h6>
                           </a>
                       </div>
                   </div>
                   <div class="single-post-list">
                       <div class="thumb">
                           <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/thumb/thumb2.png"
                               alt="">
                           <ul class="thumb-info">
                               <li><a href="#">Adam Colinge</a></li>
                               <li><a href="#">Dec 15</a></li>
                           </ul>
                       </div>
                       <div class="details mt-20">
                           <a href="blog-single.html">
                               <h6>Tennessee outback steakhouse the
                                   worker diagnosed</h6>
                           </a>
                       </div>
                   </div>
                   <div class="single-post-list">
                       <div class="thumb">
                           <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/thumb/thumb3.png"
                               alt="">
                           <ul class="thumb-info">
                               <li><a href="#">Adam Colinge</a></li>
                               <li><a href="#">Dec 15</a></li>
                           </ul>
                       </div>
                       <div class="details mt-20">
                           <a href="blog-single.html">
                               <h6>Tennessee outback steakhouse the
                                   worker diagnosed</h6>
                           </a>
                       </div>
                   </div>
               </div>
           </div>


       </div>
   </div>
