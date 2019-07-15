<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/font-awesome.min.css">

<link rel="stylesheet" href="public/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="public/css/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="public/css/dataTables.fixedheader.bootstrap4.min.css">

    <link rel="stylesheet" href="public/css/dashboard.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      td.details-control {
    background: url('public/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url('public/images/details_close.png') no-repeat center center;
    }


.table-dark {
	background-color: #212529 !important;
}
.table-hover .table-dark:hover {
	background-color: #212529;
}
    </style>
    <!-- Custom styles for this template -->

    <!--Yeni-->

    
  

    <!--asdsd-->

  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">Bookingpetz</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="includes/identify/logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="check-circle"></span>
              Approved
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="slash"></span>
              Rejected
            </a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="message-circle"></span>
              messages
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
<!--
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
-->
     
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Child rows</h2>                            
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-hover table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>id</th>
                                        <th>full name</th>
                                        <th>username</th>
                                        <th>email</th>
                                        <th>hotel</th>
                                        <th>Actions</th>
                                        <th style="display:none ">Type</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
  </div>
</div>

 
<!-- Javascript -->
<script src="public/js/libscripts.bundle.js"></script>    
<script src="public/js/vendorscripts.bundle.js"></script>

<script src="public/js/datatablescripts.bundle.js"></script>
<script src="public/js/dataTables.buttons.min.js"></script>
<script src="public/js/buttons.bootstrap4.min.js"></script>
<script src="public/js/buttons.colVis.min.js"></script>
<script src="public/js/buttons.html5.min.js"></script>
<script src="public/js/buttons.print.min.js"></script>
 


<script src="public/js/mainscripts.bundle.js"></script>
<script src="public/js/jquery-datatable.js"></script>
       <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
        <script src="public/js/feather.min.js"></script>
       
    
      <script>
      
      $('.close').on('click',function(e){
            //console.log("serkan");
             $('#hotel_name').html("");
             $('#edit').modal("hide");
        });</script>
    </body>
</html>
<script>
        $('.showModal').on('click',function(e){
             $('#edit').modal();
             console.log($(this).data("type"));
             var data = {
                type: $(this).data("type")
             }

             $.ajax({
                 url: './includes/adminResult.php',
                 method: 'POST',
                 data:data,
                 dataType:'JSON',
                 success:function(data){
                     var html ="";
                    data.forEach(function(item){
console.log(item);
  html+='<tr> <td ></td> <td>'+item.username+'</td> <td>Otto</td> <td>@mdo</td></tr>' 
  });
            
                     console.log(data);
                    $('#editTbody').html(html);
                 },
                 error:function(err){
                     console.log(err);
                 }
             })
             
        });

        </script>