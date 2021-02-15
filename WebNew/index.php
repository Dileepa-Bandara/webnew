<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>FutureCom Pages</title>
  <link rel="stylesheet" href="./CSS/index.css" />
</head>

<body>
  <div class="container">
    <div class="header">
      <ul>
        <li><a href="#" style="background:white;"><img src="./video/logo1.png" alt="" style="width:175px;height:40px;object-fit: fill;"></a></li>
        <li>
          <a href="./pages/facilities.php">Facilities</a>
        </li>
        <li>
        <li>
          <a href="./pages/contactus.php">Contact Us</a>
        </li>

        <li style="flex-grow: 3"></li>
        <li>
          <p class="login" style="flex-grow: 1">Login</p>
        </li>
        <li>
          <p class="register" style="flex-grow: 1">Register</p>
        </li>
        <li>
          <a style="flex-grow: 1" href="./pages/default.php">Find Companies <span>>>></span></a>
        </li>
      </ul>
      <div id="myBar"></div>
    </div>
    <div class="image">
      <img src="./video/bg.png">
      <!--<video src="./video/video1.jpg" loop muted autoplay></video> -->
    </div>
    <div class="svg">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
          <LinearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#282b36" stop-opacity="1"></stop>
            <stop offset="100%" stop-color="#1e3ca8" stop-opacity="1"></stop>
          </LinearGradient>
        </defs>
        <path fill="url(#gradient)" fill-opacity="1" d="M0,96L34.3,117.3C68.6,139,137,181,206,208C274.3,235,343,245,411,250.7C480,256,549,256,617,213.3C685.7,171,754,85,823,64C891.4,43,960,85,1029,112C1097.1,139,1166,149,1234,133.3C1302.9,117,1371,75,1406,53.3L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
      </svg>
    </div>
    <div id="open" class="register-container">
      <div class="register-form">
        <form action="./include/register.php" method="post" enctype="multipart/form-data">
          <h1>Sign Up</h1>
          <p>Please fill in this form to register your company.</p>
          <div class="registerinput">
            <label for="" style="margin-top: 75px">Company Name</label>
            <input type="text" name="company-name" id="" required />
            <label for="">Email or Username</label>
            <input type="text" name="email" id="" required />
            <label for="">Password</label>
            <input type="password" name="password" id="" required />

            <div>
              <label for="" style="
                    font-family: 'Trebuchet MS', 'Lucida Sans Unicode',
                      'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                    font-size: medium;
                    font-weight: 800;
                    margin-top: 25px;
                  ">Category</label>
              <br />
              <select name="category" id="cars" style="margin-top: 5px; padding: 10px">
                <option value="Art,Photography & Creative Services" selected>
                  Art,Photography & Creative Services
                </option>
                <option value="Construction & Home Improvement">
                  Construction & Home Improvement
                </option>
                <option value="Consulting & Professional Services">
                  Consulting & Professional Services
                </option>
                <option value="Financial Services & Insurance">
                  Financial Services & Insurance
                </option>
                <option value="Hair,Spa & Aesthetics">
                  Hair,Spa & Aesthetics
                </option>
                <option value="Medical,Dental & Health">
                  Medical,Dental & Health
                </option>
                <option value="Web,Tech & Media">
                  Web,Tech & Media
                </option>
                <option value="Retailers,Resellers & Sales">
                  Retailers,Resellers & Sales
                </option>
              </select>
            </div>
            <div>
              <h2 style="margin-top: 10px">Select Company role</h2>
              <select name="company-role" id="cars" style="margin-top: 5px; padding: 10px">
                <option value="Manufacturer" selected>Manufacturer</option>
                <option value="Suplire">Supplier</option>
                <option value="None">None</option>
              </select>
            </div>
            <label for="w3review">Company Discription:</label>

            <textarea id="w3review" name="discription" rows="4" cols="50">

</textarea>

            <label for="">Address</label>
            <input type="text" name="address" id="" required />
            <label for="">Contact Number</label>
            <input type="tel" name="contact-number" id="" required />
            <label for="">Company Established Date</label>
            <input type="date" name="established-date" id="" required />
            <!-- <input type="text" name="established-date" id=""  /> -->
            <label for="">Number of Employees</label>
            <input type="text" name="employees" id="" required />
            <label for="">Name of the person who entered details</label>
            <input type="text" name="person-name" id="" required />
            <label for="">Your Position in the Compnay</label>
            <input type="text" name="position" id="" required />

            <!-- upload facility -->
            <label for="">Upload Logo</label>
            <input type="file" name="upload_image" id="" required />

            <!-- <button type="submit" value="Upload" name="submit">Upload Company Logo</button> -->


            <button type="submit" style="margin-top: 35px" name="submit">
              Sign Up
            </button>
            <button type="button" style="margin-top: 15px" onclick="document.getElementById('open').style.display='none'">
              Cancel
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="footer"></div>
  </div>
  <div class="logincontainer">
    <div class="container1">
      <div class="white"></div>
    </div>
    <div class="container2">
      <div class="white"></div>
      <form action="./include/login.php" method="post" class="loginform">
        <img src="./video/avatar.jpg" alt="avatar" />

        <h1 style="margin-top: 10px">LOG IN</h1>

        <input type="text" name="email" id="" placeholder="Username/Email" />
        <input type="password" name="password" id="" placeholder="Password" />
        <button type="submit" name="submit">Login</button>
        <p>Forgot Password?</p>
      </form>
    </div>
  </div>
  <script>
    const login = document.querySelector(".login");
    const container = document.querySelector(".container");
    const register = document.querySelector(".register");
    const regForm = document.getElementById("open");
    // login js
    login.addEventListener("click", () => {
      login.classList.toggle("activeright");
      container.classList.toggle("activeright");
      move();
    });
    // register js
    register.addEventListener("click", () => {
      regForm.style.display = "block";
    });

    // progressbar js
    var i = 0;

    function move() {
      if (i == 0) {
        i = 1;
        var elem = document.getElementById("myBar");
        var width = 1;
        var id = setInterval(frame, 20);

        function frame() {
          if (width >= 100) {
            clearInterval(id);
            i = 0;
          } else {
            width++;
            elem.style.width = width + "%";
          }
        }
      }
    }
  </script>
</body>

</html>