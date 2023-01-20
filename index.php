<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" class="href">
    <script src="Js/basic.js"></script>
  </head>
  <body>
    <aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="images/dream_logo.png" alt="">
        <div class="info">
          <h3>
            <a href="#">DREAM BANK</a>
          </h3>
          
        </div>
      
      <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="about.html"> About us</a>
          <ul class="side-nav-dropdown">
            
          </ul>
        </li>
        <li><i class="fa fa-support fa-fw"></i><a href="newuser.php">Create User</a>
        
          <ul class="side-nav-dropdown">

          </ul>
        </li>
        <li><i class="fa fa-envelope fa-fw"></i><a href="TransferMoney.php">Net banking(E-mail)</a>
          <ul class="side-nav-dropdown">
            
          </ul>
        </li>
        <li><i class="fa fa-users fa-fw"></i><a href="TransactionHistory.php">Transaction History</a>
          <ul class="side-nav-dropdown">
              >
          </ul>
        </li>
        
        
        
        <!-- Extras -->
        
    </aside>
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>
            <a class="navbar-brand" href="#">bank<span class="main-color">Dashboard</span></a>
          </div>
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            
            
            
          </div>
        </div>
      </nav>
      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h1><center>Welcome To Dream Bank</center></h1>
              </div>
            </div>
          </div>
        </div>
      </div>


      <section class="statistics">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
            <a href="TransferMoney.php">
              <div class="box">
                <i class="fa fa-envelope fa-fw bg-primary"></i>
                <div class="info">
                  <h3 a href="TransferDetails.php">Net banking</h3>
                  <p>Pay bills online...</p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="newuser.php"> 
              <div class="box">
                <i class="fa fa-file fa-fw danger"></i>
                <div class="info">
                  <h3 a href="newuser.php">Create User</h3>
                  <p>New User Sign-Up</p>
                </div> 
              </div>
              </a>
            </div>
            <div class="col-md-4">
            <a href="TransactionHistory.php">
              <div class="box">
                <i class="fa fa-users fa-fw success"></i>
                <div class="info">
                  <h3 a href="TransactionHistory.php">Transactions History</h3>
                  <p>Effortless Transact</p>
                </div>
              </div>
            </div>
              </a>
          </div>
        </div>
  </section>
  <!-- Dummy Data -->
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <style>
      .container{
        width: 100%;
      }
    </style>
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Web Development Project - Basic Banking System</h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Front-End : HTML, CSS , JS | Back-End :  PHP , Database : MySQL </p>
    </div>
    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Dummy Data | Template </span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
        </div>
      </div>
      
</section>
<div class="content">
  <style>
    .content{
      padding: 25px;
      color:white;

    }
  </style>
  
</div>

  <!-- Copyright -->
  <div class="text-center" style="background-color: rgba(0, 1, 5, 0.2)">
  <style>
    .text-center{
      color: yellow;
    }
  </style>
   
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>