
<?php include("header.php")?>

<div class="container">
<div>
  <h1>Chage info</h1> <br>
 <p> Changes will be reflected to every services</p>
</div>
<form>
  <div>
    <img src="" alt=""> <button>CHANGE PHOTO</button>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name..">
    <div id="name" class="form-text">Enter your name..</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputBio" class="form-label">Bio</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your bio..">
  
  </div>

  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Phone</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone..">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email..">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your new password..">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>



<?php include("footer.php")?>