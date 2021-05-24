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
          
          <!-- Start Styles. Move the 'style' tags and everything between them to between the 'head' tags -->
          <style type="text/css">
          .myTable { width:400px;background-color:#eee;border-collapse:collapse; }
          .myTable th { background-color:#000;color:white;width:50%; }
          .myTable td, .myTable th { padding:5px;border:1px solid #000; }
          </style>
          <!-- End Styles -->
          <table class="myTable">
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


        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. fancybox layout 1 -->
@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection
