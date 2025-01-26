<?php
include('header.php');

    if(isset($_REQUEST['submit'])){
        if(checkInlog()){
            header('Location: home.php');
            exit();
        }else{
            header('Location: login.php');
            exit();
        }
        
    }

    function checkInlog(){
        return(0);
    }
?>
<body>
    <div class="conntainer m-4 " style="width:40%" >
        <h2>Inloggen</h2>
        
        <form action="" method="post" >
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
    
</body>


<?php include('footer.php'); ?>
