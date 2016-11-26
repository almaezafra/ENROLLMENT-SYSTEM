<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ENROLLMENT SYSTEM</title>

    <!-- Bootstrap Core CSS -->
    <link href="VIEWS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="VIEWS/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="VIEWS/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="VIEWS/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header pull-left">
                <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ENROLLMENT SYSTEM 1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
             <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse ">
                    <ul class="nav" id="side-menu">
                        <li >
                            <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="student.php?action=addNew"><i class="fa fa-user fa-fw"></i> Add new student</a>
                        </li>
                        <li>
                            <a href="student.php?action=list"><i class="fa fa-list-alt fa-fw"></i> View Student List</a>
                        </li>
                        </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <div class="row">
                <h1 class = "page-header text-center" >Search Student</h1>
                    <div class="col-lg-6 col-xs-12 col-lg-offset-3">
                         <div class = "row">
                         <div class = "col-xs-4">
                            <select class="form-control">
  <option>By Student ID</option>
  <option>By Name</option>
</select>                
                       </div>

                         <div class = "col-xs-8">
                            <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button">Search!</button>
      </span>
    </div>
                         </div>
                         </div>

                         
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
           <div class ="row">
                    <div class = "col-xs-12">

    

                    </div>

                    </div>
                    
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="VIEWS/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="VIEWS/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="VIEWS/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="VIEWS/dist/js/sb-admin-2.js"></script>

</body>

<SCRIPT TYPE="text/javascript">

  function motherA() {
    var fname = ""+document.getElementById("mf").value;
    var mname = ""+document.getElementById("mm").value;
    var lname = ""+document.getElementById("ml").value;
    var oc = ""+document.getElementById("mo").value;
    var co = ""+document.getElementById("mc").value;

        document.getElementById("gf").value = fname;
        document.getElementById("gm").value = mname;
        document.getElementById("gl").value = lname;
        
        document.getElementById("go").value = oc;
        document.getElementById("gc").value = co;      

}

  function fatherA() {
    var fname = ""+document.getElementById("ff").value;
    var mname = ""+document.getElementById("fm").value;
    var lname = ""+document.getElementById("fl").value;
    var oc = ""+document.getElementById("fo").value;
    var co = ""+document.getElementById("fc").value;

        document.getElementById("gf").value = fname;
        document.getElementById("gm").value = mname;
        document.getElementById("gl").value = lname;
        
        document.getElementById("go").value = oc;
        document.getElementById("gc").value = co;      

}
</SCRIPT>

</html>
     