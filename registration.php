<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="registration.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Add Student</h1>
      <form action="#">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName"> Lastname</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="fullName"> Firstname</label>
            <input type="text"
                    id="firstName"
                    name="firstName"
                    placeholder="Enter First Name"/>
          </div>
          <div class="user-input-box">
            <label for="fullName"> MI</label>
            <input type="text"
                    id="MI"
                    name="MI"
                    placeholder="Enter MI"/>
          </div>

          <div class="user-input-box">
            <label for="username">Student Number</label>
            <input type="text"
                    id="studentnumber"
                    name="studentnumber"
                    placeholder="Enter Student number" maxlength="11"/>
          </div>
          <div class="user-input-box">
            <label for="email">UE-Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text"
                    id="phoneNumber"
                    name="phoneNumber"
                    placeholder="Enter Phone Number"/>
          </div>
          <div class="user-input-box">
          <label for="program">Program</label>
            
         <div class="select-style select">  
       <select id="userRole" name="userRole">

        <option value="#"> </option>
        <option value="#">Computer Engineering</option>
        <option value="#">Mechanical Engineering</option>
        <option value="#">Electrical Engineering</option>
        <option value="#">Civil Engineering</option>
        <!-- Add more roles as needed -->
      </select>
         </div>
          </div>
          
          <br>
          
          <div class="user-input-box">
            <label for="curryr">Curr. Yr.</label>
           
            <div class="select-style select">
            <select id="userRole" name="userRole">

        <option value="#"> </option>
        <option value="#">Freshmen</option>
        <option value="#">Sophomore</option>
        <option value="#">Junior Year</option>
        <option value="#">Senior Year</option>
        <!-- Add more roles as needed -->
      </select>

            </div>        
          </div>
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other">
            <label for="other">Other</label>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Save">
          
        </div>
      </form>
    </div>
  </body>
</html>