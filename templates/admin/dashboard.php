<?php
include("header.php");
?>

<!-- TopBar  Start -->
<?php
include("topbar.php");
?>
<!-- TopBar  End -->

<!-- CardBox Start -->
<div class="cardBox">
  <div class="card">
    <div>
      <div class="numbers">1,042</div>
      <div class="cardName">Students</div>
    </div>
    <div class="iconBox">
      <i class="fas fa-user"></i>
    </div>
  </div>
  <div class="card">
    <div>
      <div class="numbers">80</div>
      <div class="cardName">Lecturers</div>
    </div>
    <div class="iconBox">
      <i class="fas fa-user-tie"></i>
    </div>
  </div>
  <div class="card">
    <div>
      <div class="numbers">15</div>
      <div class="cardName">Courses</div>
    </div>
    <div class="iconBox">
      <i class="fas fa-book"></i>
    </div>
  </div>
  <div class="card">
    <div>
      <div class="numbers">42</div>
      <div class="cardName">Comments</div>
    </div>
    <div class="iconBox">
      <i class="fas fa-comments"></i>
    </div>
  </div>
</div>
<!-- CardBox End -->

<!-- Details View Start -->
<div class="details">
  <div class="recentCourses">
    <div class="cardHeader">
      <h2>Recent Courses</h2>
      <a href="" class="btn">View All</a>
    </div>
    <table>
      <thead>
        <tr>
          <td>Name</td>
          <td>Price</td>
          <td>Payment</td>
          <td>Status</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CSE482</td>
          <td>1200</td>
          <td>FUll</td>
          <td><span class="status launched">Launched</span></td>
        </tr>
        <tr>
          <td>CSE323</td>
          <td>1100</td>
          <td>Offer</td>
          <td><span class="status pending">Pending</span></td>
        </tr>
        <tr>
          <td>ENG111</td>
          <td>800</td>
          <td>Paid</td>
          <td><span class="status launched">Launched</span></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="recentStudents">
    <div class="cardHeader">
      <h2>Recent Students</h2>
    </div>
    <table>
      <tbody>
        <!-- Fetch resent student details -->
        <?php 
        include('./fetch_student.php');
        if ($run_sd_query->num_rows > 0) {
          while ($sdt = mysqli_fetch_assoc($run_sd_query)) {
        ?>
            <tr>
              <td width="60px">
                <div class="imgBox">
                  <img src="../../dataimg/<?php echo $sdt['Photo'] ?>" alt="img">
                </div>
              </td>
              <td>
                <h4><?php echo $sdt['FullName'] ?><br /><span><?php echo $sdt['Institution'] ?></span></h4>
              </td>
            </tr>
        <?php
          }
        } else {
          echo "No records found";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Details View End -->

<?php
include("footer.php");
?>