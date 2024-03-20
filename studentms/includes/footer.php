<div class="footer">
    <div class="container">
      <div class="col-md-6 footer-left">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="admin/login.php">Admin</a></li>
          <li><a href="user/login.php">Student</a></li>
        </ul>
       
      </div>
      <div class="col-md-3 footer-middle">
        <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
        <h3>Address</h3>
        <div class="address">
          <p><?php  echo htmlentities($row->PageDescription);?>
          </p>
        </div>
        <div class="phone">
          <p><?php  echo htmlentities($row->MobileNumber);?></p>
        </div>
      <?php $cnt=$cnt+1;}} ?></div>
      <div class="col-md-3 footer-right">
        <h3>SMS</h3>
        <p>Stay connected with our Student Management System (SMS) through our SMS section. This section offers quick access to important updates, notifications, and communication tools, ensuring seamless interaction between students, educators, and administrators.</p>
      </div>
      <div class="clearfix"> </div> 
    </div>
  </div>
<div class="copyright">
    <div class="container">
      <div class="copyright-left">
      <p><?php echo date('Y');?> Student Management System </p>
      </div>
      <div class="copyright-right">
        <ul>
          <li><a href="#" class="twitter"> </a></li>
          <li><a href="#" class="twitter facebook"> </a></li>
          <li><a href="#" class="twitter chrome"> </a></li>
          <li><a href="#" class="twitter pinterest"> </a></li>
          <li><a href="#" class="twitter linkedin"> </a></li>
          <li><a href="#" class="twitter dribbble"> </a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
      
    </div>
    
<script type="text/javascript">
    $(document).ready(function() {
    $().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 
  </div>