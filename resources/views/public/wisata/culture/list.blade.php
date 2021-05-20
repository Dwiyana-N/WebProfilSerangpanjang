@extends('public.layout.app', ['title' => 'Budaya dan Kesenian'])
@section('meta')
  <meta name="description" content="Budaya dan Kesenian" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Budaya dan Kesenian"/>
  <meta property="og:type" content="Budaya"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection
@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Budaya dan Kesenian</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

    <!-- === Postingan === -->
    <section id="blogGridRightSidebar" class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="list-group">
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/genjring_bonyok.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Genjring Bonyok</h5>
                  </div>
                  <p class="mb-1">
                      Genjring bonyok adalah jenis kesenian yang tumbuh dan berkembang di Kabupaten 
                      Subang yang mem punyai alat musik utama bedug dan genjring. kesenian tersebut 
                      mulai lahir dan berkembang di Kampung Bonyok merupakan kesenian yang trispirasi 
                      dari kesenian Genjring Rudat.
                    </p>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/sisingaan.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Sisingaan</h5>
                  </div>
                  <p class="mb-1">
                    Kesenian Sisingaan adalah sebuah bentuk kreatifitas budaya masyarakat 
                    kabupaten Subang, yang mendukung dalam keaktipan masyarakatnya.
                   </p> 
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/doger_subang.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Doger Subang</h5>
                  </div>
                  <p class="mb-1">
                    Doger dalam pengertiannya berasal dari kata Dog dan Ger, Dog artinya dog-dog, 
                    yaitu waditra pengiring pada Kesenian Reog yang terbuat dari bahan kayu pohon 
                    kelapa dan membrannya dari kulit kambing, dan Ger bentuk kata akronim  Beger, 
                    artinya orang yang sedang kasmaran.
                   </p> 
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/ruwatan_bumi.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Ruwatan Bumi</h5>
                  </div>
                  <p class="mb-1">
                    Ruwatan Bumi ini dengan tujuan memohon kepada sang pencipta, untuk di selamatkan 
                    dalam diri, usaha, pertanian dan lain sebagainya dari serangan orang yang jahat, 
                    dari berbagai penyakit dan hama untuk segala usaha pertaniannya. Dan rasa syukur 
                    atas hasil pertanian yang didapat.
                  </p> 
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/gembyung.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Gembyung</h5>
                  </div>
                  <p class="mb-1">
                    Gembyung berasal dari dua suku kata yaitu Gem dan Yung. Gem berasal dari kata Ageman yang artinya ajaran
                    , pedoman, atau paham yang diikuti oleh manusia, dan suku kata Byung berasal dari kata Kabiruyungan yang 
                    artinya kepastian untuk dilaksanakan. Gembyung memiliki nilai-nilai keteladanan untuk dijadikan pedoman 
                    hidup.
                  </p> 
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/mapag_dewi_sri.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Mapag Dewi Sri</h5>
                  </div>
                  <p class="mb-1">
                    Mapag Sri adalah ritus yang terhubung dengan mitos Dewi Sri atau Nyi Pohaci Sanghyang Sri yang dianggap
                    sebagai Dewa Padi.
                    Mapag Sri dilaksanakan dengan maksud sebagai ungkapan rasa syukur para petani kepada Tuhan Yang Mahaesa 
                    karena panen yang diharapkan telah tiba dengan hasil yang memuaskan. Mapag Sri dilaksanakan menjelang musim panen. 
                  </p>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/nadran.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Nadran</h5>
                  </div>
                  <p class="mb-1">
                    Nadran merupakan suatu tradisi dari perpaduan budaya Hindu dan Islam, kata nadran menurut masyarakat setempat, 
                    berasal dari kata nazar, yang dalam gramatikal bahasa arab (Islam) bermakna “pemenuhan janji”. Dalam prosesi 
                    ritual Nadran ada bentuk pemenuhan Sesajen atau “sajian”, yaitu sesajen sebagaimana dalam simbol-simbol ritual agama Hindu.
                  </p>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/toleat.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Toleat</h5>
                  </div>
                  <p class="mb-1">
                    Toleat adalah jenis alat musik tiup (Aerophone reed tunggal) dan sebagai alat musik tradisional yang digali dari tradisi 
                    masyarakat Pamanukan, Kabupaten Subang.Keberadaan toleat belum banyak dikenal publik.
                  </p>
                </div>
              </li>            
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar sidebar-wide">
              <div class="widget widget-posts">
                <h5 class="widget__title">Artikel Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($article) > 0)
                    @foreach ($article as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/article/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Agenda Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($agenda) > 0)
                    @foreach ($agenda as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/agenda/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Pengumuman Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($announcement) > 0)
                    @foreach ($announcement as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/announcement/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->

		    </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- /.End Post -->

@endsection
@section('top-resource')
@endsection
@section('bottom-resource')
@endsection
