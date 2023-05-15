<?php include "head.php"; ?>

<body class="bg-gradient-primary">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-xl-6 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-xl my-5">
     <div class="card-body bg-white p-4">
      <div class="row">
       <div class="col-xl-12">
        <div class="p-5">
         <div class="text-center">
    
         <h1 class="h4 text-dark mb-5">LOGIN</h1>
         </div>
         <form class="user" method="POST" action="login.php">
    <div class="form-group">
        <input type="text" class="form-control form-control-user"
            id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Email Address..." name="text">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user"
            id="exampleInputPassword" placeholder="Password" name="password">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Remember
                Me</label>
        </div>
    </div>
    <a href="index.php" class="btn btn-primary btn-user btn-block">
                                            Ingresar
                                        </a>
                                        
</form>

         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>

