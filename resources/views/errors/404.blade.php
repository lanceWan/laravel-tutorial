<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404</title>

    <!-- Bootstrap -->
    <link href="{{asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('backend/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <h1 class="error-number">404</h1>
              <h2>页面找不到</h2>
              <div class="mid_center">
                <p>{{$exception->getMessage()}}</p>
                <span class="notice-text">不要慌！<strong id="overTime" style="font-size:18px;color:red;">5</strong> 秒后将自动返回上一页，请稍候...</span>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>
    <script>
      function jump()
      {
          window.location.href = "{{url()->previous()}}";
      }
       var ot = 5;
       var sto;
        
       function doverTime()
       {
        ot--;
        sto = setTimeout('doverTime()', 1000);
        if(ot!=0)
          document.all['overTime'].innerHTML = ot;
        if(ot==0)
        {
         clearTimeout(sto);
         jump();
        } 
      }
      setTimeout("doverTime()", 1000);
    </script>
  </body>
</html>
