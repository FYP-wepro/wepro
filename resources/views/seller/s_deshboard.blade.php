<!DOCTYPE html>
<html>
<head>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


  <title></title>
  <style>
  .requests:hover{
    background-color: #ccc;
  }
</style>
</head>
<body>
  @if(Session::has('sellerId'))
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Wepro</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      
      
    </ul>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="{{url('/buyerRequests')}}">Purposal</a></li>
      <li><a href="#">Active Jobs</a></li>
      <li><a href="#">Message</a></li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seller Name<b class="caret"></b></a>
        <ul class="dropdown-menu">
  
          <li><a href='/wepro/public/sellerProfile/<?php echo Session('sellerId');?>'>Profile</a></li>
          <li class="divider"></li>
          <li><a href="{{url('/sellerLogout')}}">logout</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div class="container">
  @foreach($requests as $request)
  <div class="requests" >
  <a href="#">
<div class="col-md-12"  style="margin-top: 0px; padding: 0px;">
  <div class="pull-right"><button class="btn-default">Sent Offer</button></div>
    <h3>{{$request->jobTitle}}</h3>
    <p>{{$request->discription}}</p>
    <p>Budget : ${{$request->budget}}</p>
    <div class="pull-right"><span class="label label-default">{{$request->skill}}</span> </div>
    <div>
  <span class="badge">Posted By {{$request->created_at}}</span>
  <p>Name: {{$request->fullName}}</p>
  <p>Country :{{$request->country}}</p>
  <img class="thumbnail img-responsive" src="http://localhost/wepro/public/buyer/{{$request->profileImg}}" style="width:100px;height:100px; border-radius:100px;">
   
    </div>
    <hr>
</div>  
   </a>
   </div>
   @endforeach

</div>
@else
<script>
 top.location.href="{{url('/')}}"
</script>
@endif
</body>
</html>