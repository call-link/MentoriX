
<?php
$conn = new mysqli("localhost", "root", "", "mentorix");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "ok<br>";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
   // print_r($rows);
} else {
  //  echo "No records found.";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Level 0</title>
    <link rel="icon" type="image/png" href="../../assets/img/logo-psd.png" />
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <!-- start style css 1030 -->
    <style>
      .table-wrapper {
        overflow-x: auto;
        background-color: #0d1117;
        border: 1px solid #30363d;
        border-radius: 6px;
        padding: 3px;
        margin-top: 1rem;
      }

      .github-user-table {
        width: 100%;
        border-collapse: collapse;
        font-family: system-ui, sans-serif;
        color: #c9d1d9;
      }

      .github-user-table thead {
        background-color: #161b22;
      }

      .github-user-table th,
      .github-user-table td {
        padding: 12px 16px;
        border: 1px solid #30363d;
        text-align: left;
        font-size: 14px;
      }

      .github-user-table tbody tr:hover {
        background-color: #21262d;
        transition: background 0.2s ease;
      }
    </style>
    <!-- end style css 1030 -->
  </head>
  <body>
    <!-- Navbar -->
    <header class="navbar">
      <div class="nav-left">
        <img
          src="../../assets/img/logo-psd.png"
          alt="Profile"
          style="width: 30px; height: 30px"
        />
        <span class="mentorix">MentoriX</span>
        <input type="text" class="search" placeholder="Search..." />
      </div>
      <div class="nav-right">
        <i class="fas fa-plus"></i>
        <i class="fas fa-bell"></i>
        <div class="profile">
          <img src="../../assets/img/logo-psd.png" alt="Profile" />
          <div class="profile-menu hidden">
            <a href="#">profile</a>
            <a href="#">Settings</a>
            <a href="#">Sign out</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Page layout -->
    <div class="container">
      <!-- Sidebar -->
      <aside class="sidebar">
        <ul>
          <li>
            <a href="#"><i class="fas fa-compass"></i> Explore</a>
          </li>
          <!-- <li>
            <a href="#"><i class="fas fa-home"></i> Home</a>
          </li> -->
          <li>
            <a href="#"><i class="fas fa-code-branch"></i> Pull Requests</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-exclamation-circle"></i> Codespace</a>
          </li>
        </ul>

        <!-- <div class="new-repo-box">
        <p><strong>New Repository</strong></p>
        <button>Create</button>
      </div> -->
      </aside>
      <!-- Main timeline -->
      <main class="main">
        <h2>Map</h2>
        <div class="activity-grid">
          <div class="event">
            <a href="./index-tpl.html"
              ><i class="fa-solid fa-circle-arrow-left"></i
            ></a>
            <strong>‌Back to Level 0</strong>
            <span class="timestamp"
              >Hmmm, you're so weak that you want to let him go and come back?
              :))</span
            >
          </div>
          <div class="event">
            <a href="#" style="font-weight: bold">Hint</a>
            <strong> for answer this challenge</strong>
            <span class="timestamp" id="help-message"
              >You do not have access to see this challenge !
            </span>
          </div>
          <div class="event">
            <div class="event-header">
              <strong>Go to Level 01</strong>
              <a href="">
                <i class="fa-solid fa-circle-arrow-right"></i>
              </a>
            </div>
            <span class="timestamp">
              <span>Can I give you a tissue to wipe your tears?</span>
            </span>
          </div>
          <!--<div class="event">
            <a href="#">FuXXing Js</a> <strong>JS Challenge</strong>
            <span class="timestamp">click on link and go to the Challenge</span>
          </div> -->
          <!-- <div class="event">
          <strong>Ali</strong> commented on <a href="#">bug-report</a>
          <span class="timestamp">click on link and go to the Challenge</span>
        </div> -->
          <!-- <div class="event">
          <strong>Sara</strong> created a new repo <a href="#">new-lib</a>
          <span class="timestamp">click on link and go to the Challenge</span>
        </div> -->
        </div>

        <!-- Start Bog Box 1030 HTML -->
        <h2 style="margin-top: 40px">Run Challenge</h2>
        <span class="timestamp">To view the code for this challenge, search for the number 1030. To solve the challenge, you need to replace the fake data in the table with actual data from the database.</span>
        <span class="timestamp">1. Create a table named users, culomns named (name , email , date) in your database.</span>
        <span class="timestamp">2. Connect to the database you created using a connection.</span>
        <span class="timestamp">3. Fetch the records from the database using a query and display them in the table.</span>
        <main class="main">
          <h2 style="color: #c9d1d9">Users</h2>
          <div class="table-wrapper">
            <table class="github-user-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Joined</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $rows[0]['name'];?> </td>
                  <td><?php echo $rows[0]['email'];?> </td>
                  <td> <?php echo $rows[0]['date'];?> </td>
                </tr>
                <tr>
                  <td><?php echo $rows[1]['name'];?></td>
                  <td><?php echo $rows[1]['email'];?></td>
                  <td><?php echo $rows[1]['date'];?></td>
                </tr>
                <tr>
                  <td><?php echo $rows[2]['name'];?></td>
                  <td><?php echo $rows[2]['email'];?></td>
                  <td><?php echo $rows[2]['date'];?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>

        <!-- End Bug Box -->
      </main>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="footer-container">
        <p>&copy; 2025 MentoriX Group – For academy only</p>
        <div class="footer-links">
          <a href="#">Terms</a>
          <a href="#">Privacy</a>
          <a href="#">Security</a>
          <a href="#">Contact</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    <script src="../../assets/js/script.js"></script>
  </body>
</html>
<?php $conn->close(); ?>
