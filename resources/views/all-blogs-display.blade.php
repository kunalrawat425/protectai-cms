<!-- <!doctype html>
<html>
<head>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>ID</td>
<td>First Name</td>
<td>Lasts Name</td>
<td>City Name</td>
<td>Email</td>
<td>Edit</td>
</tr>
@foreach ($blogs as $blog)
<tr>
<td>{{ $blog->id }}</td>
<td>{{ $blog->title }}</td>
<td>{{ $blog->body }}</td>
<td>{{ $blog->author }}</td>
<td>{{ $blog->slug }}</td>
<td><a href = 'edit/{{ $blog->id }}'>Edit</a></td>
</tr>
@endforeach
</table>
</body>
</html> -->

<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<md-content class="Page-container">
    <!-- Breadcrumb -->
<div class="breadcrumb-area bg-image section-ptb" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),{{URL::asset('img/header-1.jpg')}}; background-position: top; background-size: cover;">
    <div class="container">
        <div class="row breadcrumb">
            <div class="col">
                <h2>Blog Page</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->

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
                            <div class="post-btn">
                                <a class="readmore-btn btn btn-circle" >READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Single Post -->

        </div>
    </div>
    <!-- End Post Carousel  Style-->

</main>
<!--// Page Conttent -->

</md-content>
