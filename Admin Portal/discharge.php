<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="./discharge.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>patient discharge</h1>
    <form class="form" action="discharge_connection.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Name" name="name" required />
       <input type="text" placeholder="Patient ID" name="patient_id"  />

      <input type="submit" value="Discharge" name="Discharge" class="btn btn-block btn-primary" />
      <a href="logout.php">Logout</a>
    </form>
  </div>
</div>
