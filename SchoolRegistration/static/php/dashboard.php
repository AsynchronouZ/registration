<?php
include_once "include/_autoloader.inc.php";
session_start();
if (!isset($_SESSION["user"])) {
   header("location: login.php?error=You must Login first");
}
if (!empty($_COOKIE["remember"]) && !isset($_COOKIE["username"])) {
   header("location: login.php?error=Session Timed out");
}
// echo date("Y-m-d");

$user = $_SESSION["user"];
$profile = $_SESSION["profile"];
$defProfile = $_SESSION["def_profile"];
$firstname = $_SESSION["name_first"];
$lastname = $_SESSION["name_last"];

include_once "include/header.inc.php";
?>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
onload = () => {
   NavToggleDashboard();
   ConfirmLogout();
}
</script>

</head>

<body>

   <main>
      <section>
         <div>
            <div class="chop"></div>
         </div>
      </section>
   </main>

   <main class="container">
      <nav class="navigation">
         <ul>
            <li>
               <a href="#">
                  <div class="profile-image" style="background: #<?php echo $defProfile ?>">
                     <h2><?php echo substr($firstname, 0, 1) . substr($lastname, 0, 1) ?></h2>
                     <img src="<?php echo $profile ?>" alt="">
                  </div>
                  <span class="title">
                     <h2>Admin</h2>
                  </span>
               </a>
            </li>
            <li>
               <a href="#">
                  <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                  <span class="title">Dashboard</span>
               </a>
            </li>
            <li>
               <a href="#">
                  <span class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                  <span class="title">Help</span>
               </a>
            </li>
            <li>
               <a href="#">
                  <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  <span class="title">Password</span>
               </a>
            </li>
            <li>
               <a href="#" id="signOut">
                  <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                  <span class="title">Sign Out</span>
               </a>
            </li>
         </ul>
      </nav>

      <div class="main">
         <div class="topbar">
            <div class="toggle" id="toggler"></div>
            <form class="search">
               <!-- default action = self  method = get -->
               <i class="fa fa-search" aria-hidden="true"></i>
               <input type="text" name="filter" placeholder="Search here">
            </form>
         </div>
         <div class="cardBox">
            <div class="card">
               <div>
                  <div class="numbers">5,042</div>
                  <div class="cardName">Enrolled</div>
               </div>
               <div class="iconBox">
                  <i class="fa fa-user" aria-hidden="true"></i>
               </div>
            </div>
            <div class="card">
               <div>
                  <div class="numbers">1,042</div>
                  <div class="cardName">Registered</div>
               </div>
               <div class="iconBox">
                  <i class="fa fa-registered" aria-hidden="true"></i>
               </div>
            </div>
         </div>

         <div class="details">
            <div class="student">
               <div class="cardnav">
                  <h2>Registered and Pending</h2>
                  <div class="dropdown">
                     <label>View</label>
                     <ul>
                        <li><a href="dashboard.php">View All</a></li>
                        <li><a href="dashboard.php?filter=pending">Pending</a></li>
                        <li><a href="dashboard.php?filter=registered">Registered</a></li>
                     </ul>
                  </div>
               </div>
               <table>
                  <thead>
                     <tr>
                        <td>Name</td>
                        <td>Date</td>
                        <td>Status</td>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $students = new Students();
                     $showStudents = isset($_GET["filter"]) ? $students->showStudents($_GET["filter"], false) : $students->showStudents("", false);
                     if (!$showStudents) :
                     ?>
                     <tr class="emptyStudent">
                        <td>Nothing In here</td>
                     </tr>
                     <?php
                     endif;
                     foreach ($showStudents as $student) :
                     ?>
                     <tr>
                        <td>
                           <?php echo $student["student_lastname"] . ", " . $student["student_firstname"] . " " . $student["student_middlename"] ?>
                        </td>
                        <td><?php echo $student["register_date"] ?></td>
                        <?php if ($student["student_status"] === "registered") : ?>
                        <td><span class="status registered">Registered</span></td>
                        <?php else : ?>
                        <td><span class="status pending">Pending</span></td>
                        <?php endif ?>
                     </tr>
                     <?php endforeach ?>
                  </tbody>
               </table>
            </div>
            <div class="recentRegistered">
               <div class="cardnav">
                  <h2>Missed Pending</h2>
               </div>
               <table>
                  <tbody>
                     <?php
                     $recents = new Students();
                     $recentRegs = $recents->showStudents("", true);
                     foreach ($recentRegs as $recent) :
                     ?>
                     <tr>
                        <td>
                           <h4>
                              <?php echo $recent["student_firstname"] . " " . substr($recent["student_middlename"], 0, 1) . ". " . $recent["student_lastname"] ?><br>
                              <span><?php echo $recent["student_city"] . ", " . $recent["student_brgy"] ?></span>
                           </h4>
                        </td>
                     </tr>
                     <?php endforeach ?>
                  </tbody>
               </table>
            </div>

         </div>

      </div>
   </main>
</body>

</html>