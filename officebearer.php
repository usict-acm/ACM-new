<section class="tag container-fluid">
    <div class="">
        <h2 class="my-4 display-4 fw-bolder text-center">Office<span class="text-head"> Bearers</span></h2>
    </div>
 <div class="row justify-content-center">
<?php
$database = new Database();
$db = $database->connect();
$query = "SELECT t.image, t.name, t.designation from office_bearer t where category = 'faculty'";
$rows = $db->query($query);
while($row = $rows->fetch_assoc()) {
?>
    <div class="profile-card col-md-4 col-sm-6">
    <div class="img">
      <img src="<?php echo $row["image"]?>"/>
    </div>
    <div class="caption">
      <h3><?php echo $row["name"]?></h3>
      <p><?php echo $row["designation"]?></p>
    </div>
  </div>
<?php 
} ?> 
 </div>



<div class="row justify-content-center">
<?php
$query = "SELECT t.image, t.name, t.designation, t.linkedin from office_bearer t WHERE category = 'student'";
$rows = $db->query($query);
while($row = $rows->fetch_assoc()) {
?>
<div class="profile-card col-md-4 col-sm-6">
    <div class="img">
      <img
        src="<?php echo $row["image"]?>"
      />
    </div>
    <div class="caption">
    <h3><?php echo $row["name"]?></h3>
    <p><?php echo $row["designation"]?></p>
      <div class="social-links">
        <a href="<?php echo $row["linkedin"]?>" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </div>
<?php 
} ?> 
</div>
<div class="py-3 mt-2 d-flex justify-content-sm-center">
    <div class="col-lg-2 col-md-4 col mb-2 mt-4 mt-lg-0">
        <a id="meet-the-team-btn" href="./team.php" class="about-button team-mobile-btn">Meet the Team</a>
        </div>
</div>
</section>
