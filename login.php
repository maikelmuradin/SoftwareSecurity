<?php
include('header.php');
?>
<body>
    <div class="conntainer m-4 " style="width:40%" >
        <h2>Inloggen</h2>
        <form action="" method="GET" >
          <div class="mb-3">
            <label  class="form-label">Gebruikersnaam</label>
            <input type="text" class="form-control" name="gebruikersNaam" >
          </div>
          <div class="mb-3">
            <label  class="form-label">Wachtwoord</label>
            <input type="password" class="form-control" name="wachtwoord">
          </div>
          
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>   
</body>

<?php include('footer.php'); ?>
