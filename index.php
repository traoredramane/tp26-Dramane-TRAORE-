
<?php
@$firstname=$_POST["firstname"];
@$lastname=$_POST["lastname"];
@$email=$_POST["email"];
@$password=$_POST["password"];
@$sexe=$_POST["sexe"];
@$age=$_POST["age"];
@$number=$_POST["number"];
@$valider=$_POST["valider"];
$erreur="";
 if(isset($valider))
   if(empty($firstname)) $erreur="<li>firstname laisser est vide!</li>";
   if(isset($valider))
   if(empty($lastname)) $erreur.="<li>lastname laisser est vide!</li>";
   if(isset($valider))
   if(empty($email)) $erreur.="<li>email laisser est vide!</li>";
   if(isset($valider))
    if(empty($password)) $erreur.="<li>password laisser est vide!</li>";
    if(isset($valider))
    if(!is_numeric($age) or $age<20) $erreur.="<li>age Invalide!</li>";
    if(isset($valider))
    if(!is_numeric($age)) $erreur.="<li>numero Invalide!</li>";
    if(isset($valider))
    if(!is_numeric($sexe)) $erreur.="<li>le sexe Invalide!</li>";
    
 
 else if((isset($valider))) {
   echo "$firstname <br>";
   echo "$lastname <br>";
   echo "$email <br>";
   echo "$password <br>";
   echo "$age <br>";
   echo "$number <br>";
   echo "$sexe <br>";
 }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    
</head>
<body>
   
  
  <section class="fro">
  
  <h1>Formulaire d'inscription</h1>
  
  
  
  <div class="far">
    <form  method="post" action="index.php">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input name="firstname" type="text" id="form3Example1" class="form-control"/>
              <label class="form-label" for="form3Example1">First name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input name="lastname" type="text" id="form3Example2" class="form-control" />
              <label class="form-label" for="form3Example2">Last name</label>
            </div>
          </div>
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input name="email" type="email" id="form3Example3" class="form-control" />
          <label class="form-label" for="form3Example3">Email address</label>
        </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input name="password"type="password" id="form3Example4" class="form-control" />
          <label class="form-label" for="form3Example4">Password</label>
        </div>
        
         <!-- case age -->
        
         <div class="form-outline mb-4">
            <input type="Number"  name="age" id="form3Example4"  class="form-control" />
            <label class="form-label" for="form3Example4">age</label>
          </div>
        
        
        
         <!-- case numero -->
        
         <div class="form-outline mb-4">
            <input type="Number"  name="number" id="form3Example4"  class="form-control" />
            <label class="form-label" for="form3Example4">number</label>
          </div>
        
        <!-- select sexe -->
      <div class="doc">
        <select name="sexe" class="form-select" aria-label="Default select example">
            <option selected>Selectionné le sexe</option>
            <option value="1">Homme</option>
            <option value="2">Femme</option>
          </select>
        </div>
        
       
        
        
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
          <label class="form-check-label" for="form2Example33">
            Subscribe to our newsletter
          </label>
        </div>
      
        <!-- Submit button -->
        <button type="submit" name="valider" class="yar btn btn-primary btn-block mb-4">M'inscrire</button>
      
        <!-- Register buttons -->
        <div class="text-center">
          <p>or sign up with:</p>
          <button type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
      
          <button type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
      
          <button type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
      
          <button type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
      <?php if(!empty($erreur)){ ?>
  <div id="erreur"><?php echo $erreur ?></div>
  <?php } ?>
  
      </div>
  
  
  </section> 
   
   
   
    
</body>
</html>