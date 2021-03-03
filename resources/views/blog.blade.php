
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- Page Conttent -->
<main class="page-content">
    <!-- Start Post Carousel Style-->
    <div class="section-post-carousel section-pt section-pb-90">
        <div class="container">
            <!-- Start Single Post -->
            @foreach ($blogs as $blog)
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="post-carousel mb-30 row">
                        <div class="thumb col-md-4">
                            <a routerLink="/enhancing-mobile-app-security-through-rasp">
                            <img src="{{URL::asset('img/blog/thum-01.png')}}" alt="profile Pic">
                            </a>
                        </div>
                        <div style="padding-top: 0;" class="col-md-8 ptc-content">
                            <h4><a routerLink="/enhancing-mobile-app-security-through-rasp">{{$blog->title}}</a></h4>
                            <ul class="meta d-flex">
                                <li><a href="#"><i class="zmdi zmdi-calendar-check"></i>{{$blog->created_at}}</a></li>
                                <li><i class="zmdi zmdi-account-calendar"></i> By : <a href="#">{{$blog->author}}</a></li>
                            </ul>
                            <p>{{strip_tags($blog->body)}}</p>
                            <!-- <div class="post-btn">
                                <a class="readmore-btn btn btn-circle" >READ MORE</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Single Post -->

        </div>
    </div>
    <!-- End Post Carousel  Style-->

<!--// Breadcrumb -->

</main>
