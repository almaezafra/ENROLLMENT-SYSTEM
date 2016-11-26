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
                            <a href="student.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="student.php?action=addNew" class="active"><i class="fa fa-user fa-fw"></i> Add new student</a>
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
                    <div class="col-lg-12">
                        <h1 class="page-header">NEW STUDENT FORM</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
           <div class ="row">
                    <div class = "col-xs-12">

<form class="form-horizontal" method = "POST" action = "student.php?action=insert">

      <h3>Student's Details</h3>
  <div class="form-group">
    <div class="col-sm-4">
        <label>Last Name</label>
      <input type="text" class="form-control" id="inputtext3" placeholder="Last Name" name = "slname" required>
    </div>
     <div class="col-sm-4">
        <label>First Name</label>
      <input type="text" class="form-control" id="inputtext3" placeholder="First Name" name = "sfname" required>
    </div>
     <div class="col-sm-4">
        <label>Middle Name</label>
      <input type="text" class="form-control" id="inputtext3" placeholder="Middle Name" name = "smname" required>
    </div>
  </div>
 <div class="form-group">
    
     <div class="col-sm-12">
        <label>Address</label>
      <input type="text" class="form-control" id="inputtext3" placeholder="Address" name = "saddress" required>
    </div>
     
  </div>
  <div class="form-group">
     
     <div class="col-sm-4 col-sm-offset-2">
    <label >Gender</label>
  <BR>
    <div class="radio-inline">
    <label><input type="radio" name="sgender" value = "Male">Male</label>
    </div>
    <div class="radio-inline">
    <label><input type="radio" name="sgender" value = "Female">Female</label>
  </div>
  </div>
    <div class="col-sm-4 ">
        <label>Birthday</label>
        <input type="date"  class = "form-control" name = "sbday" required>
    </div>
  </div>
   
 <hr> 
  <h3>Mother's Details </h3><h4>(Mother's Maiden Name)</h4>

 <div class="form-group">
  
    <div class="col-sm-4">
        <label>Last Name</label>
      <input type="text" class="form-control" id="ml" placeholder="Last Name" name = "mlname" required>
    </div>
     <div class="col-sm-4">
        <label>First Name</label>
      <input type="text" class="form-control" id="mf" placeholder="First Name" name = "mfname" required>
    </div>
     <div class="col-sm-4">
        <label>Middle Name</label>
      <input type="text" class="form-control" id="mm" placeholder="Middle Name" name = "mmname" required>
    </div>


  </div>

  <div class="form-group">
  
    <div class="col-sm-4 col-sm-offset-2">
        <label>Occupation</label>
      <input type="text" class="form-control" id="mo" placeholder="Occupation" name = "mjob" required>
    </div>
     <div class="col-sm-4">
        <label>Contact Number</label>
      <input type="text" class="form-control" id="mc" placeholder="Contact Number" name = "mnum" required>
    </div>
   
    
  </div>
<hr> 
  <h3>Father's Details</h3>
 <div class="form-group">
  
    <div class="col-sm-4">
        <label>Last Name</label>
      <input type="text" class="form-control" id="fl" placeholder="Last Name" name = "flname" required>
    </div>
     <div class="col-sm-4">
        <label>First Name</label>
      <input type="text" class="form-control" id="ff" placeholder="First Name" name = "ffname" required>
    </div>
     <div class="col-sm-4">
        <label>Middle Name</label>
      <input type="text" class="form-control" id="fm" placeholder="Middle Name" name = "fmname" required>
    </div>


  </div>

  <div class="form-group">
  
    <div class="col-sm-4 col-sm-offset-2">
        <label>Occupation</label>
      <input type="text" class="form-control" id="fo" placeholder="Occupation" name = "fjob" required>
    </div>
     <div class="col-sm-4">
        <label>Contact Number</label>
      <input type="text" class="form-control" id="fc" placeholder="Contact Number" name = "fnum" required>
    </div>
   
    
  </div><hr> 
  <h3>Guardian's Details</h3>
  <button type="button" class="btn btn-primary" onclick="motherA()">Set Mother as Guardian</button>

  <button type="button" class="btn btn-primary" onclick="fatherA()">Set Father as Guardian</button>
 <div class="form-group">
  
    <div class="col-sm-4">
        <label>Last Name</label>
      <input type="text" class="form-control" id="gl" placeholder="Last Name" name = "glname" required>
    </div>
     <div class="col-sm-4">
        <label>First Name</label>
      <input type="text" class="form-control" id="gf" placeholder="First Name" name = "gfname" required>
    </div>
     <div class="col-sm-4">
        <label>Middle Name</label>
      <input type="text" class="form-control" id="gm" placeholder="Middle Name" name = "gmname" required>
    </div>


  </div>

  <div class="form-group">
  
    <div class="col-sm-4 col-sm-offset-2">
        <label>Occupation</label>
      <input type="text" class="form-control" id="go" placeholder="Occupation" name = "gjob" required>
    </div>
     <div class="col-sm-4">
        <label>Contact Number</label>
      <input type="text" class="form-control" id="gc" placeholder="Contact Number" name = "gnum" required>
    </div>
   
    
  </div>
  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-3">
      <button type="submit" class="btn btn-success btn-block">Submit</button>
    </div>
     <div class="col-sm-3">
      <button type="reset" class="btn btn-warning btn-block">Reset</button>
    </div>
    <div class="col-sm-3">
      <button type="cancel" class="btn btn-danger btn-block">Cancel</button>
    </div>
  </div>
</form>
    

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
     