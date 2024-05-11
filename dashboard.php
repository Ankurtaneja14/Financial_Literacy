<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <style>
    body::-webkit-scrollbar {
      width: 0.5em;
      z-index: 100;
      background-color: transparent;
    }


    body::-webkit-scrollbar-thumb {
      background-color: white;
      box-shadow: 0 -100vh 0 100vh #5128f5; //magic
    }

    .tabs {
      margin: auto;
      width: fit-content;
    }

    /* Style the tab buttons */
    .tablinks {
      background-color: #f2f2f2;
      border: none;
      cursor: pointer;
      padding: 10px 20px;
      font-size: 18px;
    }

    /* Change background color of active tab button */
    .tablinks.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 20px;
      border-top: none;
      color: white;
      margin: auto;
    width: fit-content;
    }

    /* Show the active tab */
    .tabcontent.active {
      display: block;
    }
  </style>
  <link rel="stylesheet" href="assets/css/paperr.css">
  <title>Dashboard | FinEdu Hub</title>
</head>

<body>
  <?php include "sidebar.php"; ?>
  <main>
    <div class="tabs">
      <button class="tablinks" onclick="openTab(event, 'courses')">Courses</button>
      <button class="tablinks" onclick="openTab(event, 'blogs')">Blogs</button>
      <button class="tablinks" onclick="openTab(event, 'articles')">Articles</button>
    </div>

    <div id="courses" class="tabcontent">
      <!-- Content for Courses Tab -->
      <h2>Courses</h2>
      <p>List of available courses...</p>
    </div>

    <div id="blogs" class="tabcontent">
      <!-- Content for Blogs Tab -->
      <h2>Blogs</h2>
      <p>List of available blogs...</p>
    </div>

    <div id="articles" class="tabcontent">
      <!-- Content for Articles Tab -->
      <h2>Articles</h2>
      <p>List of available articles...</p>
    </div>

    <script>
      function openTab(evt, tabName) {
        // Hide all tab content
        var tabcontent = document.getElementsByClassName("tabcontent");
        for (var i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        // Remove the 'active' class from all tab links
        var tablinks = document.getElementsByClassName("tablinks");
        for (var i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the selected tab content and set the button as active
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      // Open the default tab on page load
      document.getElementById("courses").style.display = "block";
      document.getElementsByClassName("tablinks")[0].className += " active";

    </script>
  </main>
  <script src="assets/js/script.js"></script>
</body>

</html>