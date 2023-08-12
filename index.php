<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Portfolio</title>
  <link rel="stylesheet" href="styles/index.css">
  <script type="text/javascript" src="scripts/index.js"></script>

  <nav>
    <a class="nav" id="1" href="#home">Home</a>
    <a class="nav" id="2" href="#about">About</a>
    <a class="nav" id="3" href="#skills">Skills</a>
    <a class="nav" id="4" href="#activities">Activities</a>
    <a class="nav" id="5" href="#goals">Goals</a>
    <a class="nav" id="6" href="#projects">Projects</a>
    <a class="nav" id="7" href="#contact">contact</a>
    <li><a href="#" id="loginButton">Log In</a></li>
  </nav>
  

</head>

<body>

  <script>
    const loginUrl = "login.php";

    const loginButton = document.getElementById("loginButton");

    loginButton.addEventListener("click", function() {
        window.location.href = loginUrl;
    });

</script>
  <div class="section" id="home">
    <h1> My Uni Life</h1>
    <h2> I am Thakshila Madhuwanthi ,Student at Rajarata University Of Sri Lanka</h2>
    <div class="center-image">
      <img src="photos/myphoto.jpg" alt="my photo" class="myphoto" style="width:300px;height:300px;">
    </div>

  </div>


  <div class="section about-section" id="about">
    <h2>About </h2>
    <p> I am Thakshila Madhuwanthi undergraduate student at Rajarata University of Sri Lanka,
      pursuing a multidisciplinary education in Computer Science, Physics, and Chemistry.
      Alongside my academic pursuits, I actively engages in various extracurricular activities.
      My diverse interests and dedication to personal growth have led my to explore different
      avenues beyond my core studies. I'm involvement in these extra activities demonstrates
      my commitment to holistic development and my ability to balance multiple responsibilities. With my
      strong
      foundation in science and my passion for technology, I aspires to contribute to innovative advancements in
      my chosen field. I'm enthusiasm, versatility, and thirst for knowledge make my a promising individual
      with a bright future ahead.
    </p>
    <h5>Here we are 19/20 Batch Faculty of Applied Sciences</h5>
    <div class="center-image">
      <img src="photos/batchphoto.jpg" alt="university image 1" style="width:500px;height:300px;">
    </div>
 
  <h4>University images</h4>
  <p>My university situated in Anuradhapura.Rajarata University of Sri Lanka is a prestigious institution of higher
    education
    located in the North Central Province of Sri Lanka. Established
    in 1996, it has emerged as a leading university known for its commitment to academic excellence and research.
  </p>

  <br>

  <div>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="photos/university.jpg" alt="university image 1" style="width:100%">
        <div class="text">Caption Text</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="photos/uni.jpg" alt=" university Image 2" style="width:100%">
        <div class="text">Caption Two</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="photos/uni2.jpg" alt=" university Image 2" style="width:100%">
        <div class="text">Caption Three</div>
      </div>
      
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
      
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
  </div>

  </div>

  <div class="section" id="skills">
    <div class="list">
      <h2>Skills </h2>
      <ul>
        <li>
          <h5>Computer science</h5>
        <li>Languages =(phython,C,C++,Java) </li>
        <li>htmal,css, javascript</li>
        <li>data base management</li>
        <li>system anlysis and desing</li>
        <li>web desing</li>
        <li>image processing</li>
        </li>
      </ul>
      <ul>
        <li>
          <h5>Chemistry</h5>
        <li>Organic Chemistry </li>
        <li>Inorganic chemistry</li>
        <li>Chemical science</li>
        <li>General chemistry</li>
        <li>Electro chemistry</li>
        <li>Chemistry Laboratory</li>
        </li>
      </ul>
      <ul>
        <li>
          <h5>Physics</h5>
        <li>General physics </li>
        <li>Modern physics</li>
        <li>Physical Geology</li>
        <li>Electronics</li>
        <li>Quntum mechanism</li>
        <li>Physical Laboratory</li>
        </li>
      </ul>
      < </div>

    </div>
  </div>

  <div class="section" id="activities">
    <div class="list">
      <h2>Activites </h2>
      <ul>

        <li>Member of a Rotaract club in Rajarata University Of Sri Lanka</li>
        <li>Member of a Zero PLastic commetie in Rajarata University Of Sri Lanka</li>
        <li>Member of a Gavel Club in Rajarata University of Sri Lanka</li>
        <li>Team member in Netball team in rajarata universityOf Sri Lanka</li>
        <li>Team member in Hokey team in rajarata universityOf Sri Lanka</li>
      </ul>
      <img src="photos/zp.jpg" alt="zero plastic " style="width:400px;height:300px;">
      <img src="photos/robat.jpg" alt=" Rotaract club members" style="width:400px;height:300px;">
      <img src="photos/rotarf.jpg" alt=" Rotaract club" style="width:400px;height:500px;">
    </div>
  </div>


  <div class="section" id="goals">
    <h2>Goals of my university life</h2>
    <br>
    <p>I determined undergraduate student at Rajarata University of Sri Lanka (RUSL) with ambitious goals.
      My primary objective is to obtain a special honors degree in Chemistry and Physics, demonstrating my commitment to
      academic
      excellence and mastery of these disciplines. My passion for teaching and sharing knowledge drives my aspiration to
      become a lecturer in the future.
      Through my dedication to my studies and my active participation in university life, I am on a path towards
      realizing my dreams. With my strong academic
      foundation and a relentless pursuit of learning,
      My aims to make a significant impact in the field of education and inspire future generations.</p>
    <br>
    <br>
    <img src="photos/graduation.jpg" alt=" Graduation photo" style="width:600px;height:400px;">
    <img src="photos/app.jpg" alt=" Graduation" style="width:700px;height:400px;">
  </div>

  <div class="section" id="projects">
    <h2>Projects</h2>

    <?php
    $projects = getProjects();

    foreach ($projects as $project) {
        echo "<div class='project'>";
        echo "<h3>{$project['ProjectName']}</h3>";
        echo "<p>{$project['Description']}</p>";
        echo "</div>";
    }
    ?>
</div>

  <div class="section contact-section" id="contact">
    <div class="list">
      <h2>Contact info </h2>
      <ul>
        <li>Name-Thakshila Madhuwanthi</li>
        <li>Email-thakshilamadhuwanthi524@gmail.com</li>
        <li>Address-No 98,Hospital Road,Dankotuwa</li>
        <li>Tel No-+94774502604</li>
      </ul>
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br><br>
        Message: <textarea name="message"><?php echo $message; ?></textarea>
        <span class="error"><?php echo $messageErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
  </div>

  <div class="footer">
    <p> Follow me on </p>
    <img src="photos/socialmedia.jpg" width="500 " height="200" alt="media">
    <div class="end -text">
      <p> Copyright @2023 All rights reserved | Thakshila Madhuwanthi </p>
    </div>
  </div>
</body>
</html>