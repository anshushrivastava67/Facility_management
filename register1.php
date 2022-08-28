<link href='style1.css' rel='stylesheet' type='text/css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
  .a{
    width:186px;
  }
  </style>

<div id="navwrapper">
  <div id="navbar"> <table class="tablewrapper">
    <tr>
      <form action="login.php" method="post">
      <td class="row1">Faculty ID</td>
      <td class="row1">Password</td>
    </tr>
    <tr>
      <td><input type="text" class="inputtext" name='f_id'>
      </td>
      <td><input type="password" class="inputtext" name='Password'>
      </td>
      <td><div><button type="submit" id="button" name="login" >Log In</button></div></td>
    </tr>
    <tr>
      <td>
       
  </table>
</form>  
    <h1 class="logowrapper">Sushant University</h1>
   
  </div>
  </div>

  <div id="contentwrapper">
    <div id="content">
      
      <div id="leftbod">
        
        <div class="connect bolder">
          </div>       
            
      </div>
      
      <div id="rightbod">
        <div class="signup bolder">Register</div>
    
        <form action="connect3.php" method="post">
        <div class="formbox">
        <input type="text" class="inputbody in1 a" placeholder="First name" name="fname" id="fname"required>
        <input type="text" class="inputbody in1 a" placeholder="Last name" name="Lname" id="Lname"required>
        <input type="text" class="inputbody in2 " placeholder="Faculty ID" name="f_id" id="f_id"required>
        </div>
        <div class="formbox">
        <input type="email" class="inputbody in2" placeholder="Email" name="Email_id" id="Email_id"required>
        
        </div>
        <div class="formbox">
        <input type="text" class="inputbody in2" placeholder="Mobile number" name="mobile_no" id="mobile_no"required>
        </div>
        <div class="formbox">
        <input type="password" class="inputbody in2" placeholder="Password" name="Password" id="Password"required>
        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
        <input type="text" class="inputbody in2" placeholder="School_name" name="School_name" id="School_name"required>
        </div>
       
            <div class="formbox">
              <button type="submit" class="signbut bolder" name="register" id="register" >Register</button>
            </div>
        
</form>   
        
      </div>
     </div>
    </div>
<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#Password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'Password' ? 'text' : 'Password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
  </script>
    
