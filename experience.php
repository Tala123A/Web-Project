<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="experience.css">
  <link rel="stylesheet" href="menu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
 
  <title>REVIEW US!</title>
</head>

<body>
  <header class="header"><div class="bottom-header">
    <div class="header-logo">
<img src="logo1.jpeg" alt="Logo" id="logo"></div>
<div class="navigations"><ul class="nav-list desktop">
<li><a class="" href="menu.html">MENU</a></li>
<li><a class="active" href="experience.html">EXPERIENCE</a></li>
<li><a class="" href="stores.html">STORES</a></li>
<li><a class="" href="careers.html">CAREERS</a></li>
<li><a class="" href="contact.html">CONTACT</a></li>
<li><a class="" href="faq1.html">FAQs</a></li>

<li><a href="https://www.instagram.com/swissbutter"><i class="fa-brands fa-instagram"></i></a></li>
<li><a href="https://www.tiktok.com/@swiss.butter"><i class="fa-brands fa-tiktok"></i></a></li>
</header>
  <div class="containerr">
    <video autoplay loop muted src="video.mp4"></video>
    <div class="content">SHARE YOUR EXPERIENCE</div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!DOCTYPE html>
<html lang="en">

<head>
    <br><br>
        <section class="review">
    <div class="form-container">
        <h2>YOUR OPINION MATTERS TO US!</h2>
        <form action="review.php" method="POST" id="reviewForm">
            <label for="name">Name:</label>
            <input type="text" id="costumer_name" name="name" required>
            <br>
            <label for="review">Review:</label>
            <br>
            <textarea id="costumer_review" name="review" required></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <h2>Customer Reviews</h2>
    <table id="reviewsTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Review</th>
            </tr>
        </thead>
       
    </table>
    <script>
        document.getElementById('reviewForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const review = document.getElementById('review').value;
            const table = document.getElementById('reviewsTable').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
            const nameCell = newRow.insertCell(0);
            const reviewCell = newRow.insertCell(1);
            nameCell.textContent = name;
            reviewCell.textContent = review;
            document.getElementById('reviewForm').reset();
              } )
       
    </script>
    </section>

    <br> <br>
    <footer padding: 20px;>
  <div style= "text-align:center;background-color:lightgrey">
      <p id="foot">Copyright © 2023 Swiss Butter-All rights reserved.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="faq1.html">FAQs</a>&nbsp; <b class="bold">&nbsp;|&nbsp;</b> &nbsp;<a>&nbsp;Terms of Service&nbsp;</a>&nbsp; <b class="bold">|</b>&nbsp;<a>&nbsp;Privacy Policy&nbsp;</a>&nbsp; <b class="bold">&nbsp;|&nbsp;</b>  <a>&nbsp;Cookies Settings&nbsp;</a></p>
  </div>
</footer>
    
</body>
</html>
  
