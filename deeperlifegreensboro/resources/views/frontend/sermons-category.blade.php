@extends('layouts.template')

@section('title')
Sermons - {{$categoryName->name}}
@endsection

@section('content')
    <section id="sermon-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">{{$categoryName->name}}</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">
                                <span class="sub">Enrich yourself with the words</span>
                                <span  class="wow fadeInUp float-right navs" data-wow-delay="2s" data-wow-duration="3s">
                                <a  href="{{route('homepage')}}">Home</a> > <a  href="{{route('all.sermons')}}">Sermons</a> >
                                    {{$categoryName->name}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section ><!-- /.about -->
 
    <!-- ======================== latest sermons ======================================= -->
    <section class="latest-sermons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-sermons-content">
                        <h2 class="section-heading">{{$categoryName->name}} Sermons</h2>
                        <p class="paragraph">Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
             @foreach($sermon_category as $sermon)
                  <div class="col-12 col-md-6 col-lg-4 mb-5">
                        <div class="latest-sermons-card">
                            <a href="{{route('sermon.single',[$sermon->slug,$sermon->category->id])}}" style="color: #777;text-decoration: none;">
                                  <div class="card" >
                                <div class="latest-sermons-img-date">
                                    {{-- <img class="card-img-top" src="img/home/3.jpg" alt="Card image" style="width:100%"> --}}
                                    <img class="w-100 h-100 rounded" src="{{asset('uploads/sermons/'.$sermon->coverImage)}}" alt="{{$sermon->coverImage}} here ">
                                    <div class="latest-sermons-date">
                                        <h6>
                                              <span> {{$sermon->sermonDate->format('d')}}</span> 
                                              {{$sermon->sermonDate->format('M')}}
                                              {{$sermon->sermonDate->format('Y')}}
                                       
                                        </h6>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h4 class="card-title">{{ucfirst($sermon->title)}}</h4>
                                   
                                    <div class="entry-action">

                                        <a href="#" title="video"><i class="licon-camera-play"></i></a>
                                        <a href="#" title="audio"><i class="licon-headphones"></i></a>
                                        <a href="#" title="save"><i class="licon-enter-down2"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                @endforeach

              <div class="paginate w-100">
                    <ul class="pagination justify-content-center">
                        {{$sermon_category->links()}}
                    </ul>
              </div>
            </div>
        </div>
    </section>

    <!-- ======================== subscription ======================================= -->
    <section class="subscription">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="subscription-text">
                        <h3>Subscribe To Our Newsletter</h3>
                        <h6>Subcribe Us And Tell Us About Your Story</h6>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="subscription-form">
                        <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                        <button type="submit" class="btn crose-btn">subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('style')
<style>
    .paginate .pagination .page-item .page-link {
    padding: 15px;
    margin-left: 7px;
    background: white;
    color: #2b7a78;
    font-weight: bold;
}
.page-item.active .page-link{border-color: #2b7a78;}
.paginate .pagination .page-item .page-link:hover {
    background: #2b7a78;
    color: white;
    border-color: #2b7a78;
}
</style>
@endsection