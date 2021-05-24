@extends('public.layout.app', ['title' => 'Data Pegawai'])

@section('meta')
  <meta name="description" content="Data Pegawai" />
  <meta name="keywords" content="Data Pegawai" />
  <meta property="og:title" content="Data Pegawai"/>
  <meta property="og:type" content="Data Pegawai"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/04.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Data Pegawai</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ===== Bidang Section ===== -->
    <section id="fancyboxLayout1" class="fancybox-layout1 text-center pt-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="mytable">
              <table class="table table-bordered">
                <tr>
                  <th>Nama Pegawai</th><th>Jabatan</th>
                </tr>
                <tr>
                  <td>Table cell 1</td><td>Table cell 2</td>
                </tr>
                <tr>
                  <td>Table cell 3</td><td>Table cell 4</td>
                </tr>
              </table>
            </div>
          </div>


        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. fancybox layout 1 -->
@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection
