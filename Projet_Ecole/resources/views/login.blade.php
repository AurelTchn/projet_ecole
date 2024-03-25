


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/stylelogin.css" />
    <title>Connexion</title>
  </head>
  <body>
    <style>
      *{
        font-family: "Times New Roman";
      }
    </style>
    
    
    
    <div class="container">
      <div class="forms-container">
      
        <div class="signin-signup"><center>
            <button class="btn transparent" onclick="window.location.href='index.php'" 
            style="color:white;background-color:blue;margin-bottom:45px;padding:25px;padding-bottom:40px;width:300px " id="stn">
            <b>Retourner à l'Accueil</b>
            </button></center>
          <form action="admin" method="POST" class="sign-in-form">
            @method('POST')
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" style="font-family:'Times New Roman'" name="signin_user" required placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" style="font-family:'Times New Roman'" name="signin_password" required placeholder="Password" />
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" />
            <p class="social-text">Connecter vous en tant qu'administrateur.</p>
            <div class="social-media">
              <!-- <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a> -->
            </div>
          </form>
          <form action="admin" method="POST" class="sign-up-form">
            @method('POST')
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="password" style="font-family:'Times New Roman'" name="password_admin" required placeholder="Password Administration" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" style="font-family:'Times New Roman'" name="username" required placeholder="Username" />
            </div>
            <div class="input-field">
              <!-- <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" /> -->
              <select name="titre_admin"  class="fas" 
              style="width:400px;border-radius:80px;
              padding-left:75px;font-size:20px;margin-left:-20px;
              font-family:'Times New Roman'" id="">
                <option value="Directeur">Directeur</option>
                <option value="Surveillant">Surveillant</option>
                <option value="Censeur">Censeur</option>
                <option value="Enseignant">Enseignant</option>
                <option value="Secrétaire">Sécrétaire</option>
          
              </select>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" style="font-family:'Times New Roman'" name="passwordd" required placeholder="Password" />
            </div>
            <input type="submit" name="signup" class="btn" value="Sign up" />
            <p class="social-text">Inscription en tant qu'administrateur.</p>
            <div class="social-media">
              <!-- <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a> -->
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Vous n'êtes pas encore inscrit ?</h3>
            <p>
              Inscrivez-vous en tant qu'administrateur en cliquant sur le bouton <b> Sign Up</b>
            </p> 
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Etes-vous déjà membre d'administration?</h3>
            <p>
              Cliquez sur le bouton <b>Sign In</b> pour se connecter en tant qu'administrateur
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script >
              const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
          container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
          container.classList.remove("sign-up-mode");
        }); 

    </script>
  </body>
</html>


