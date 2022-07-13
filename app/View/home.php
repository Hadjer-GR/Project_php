
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Test</title>

    <link rel="stylesheet" href="<?php echo URLROOT ;?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo URLROOT ;?>/css/mobile.css" media="(max-width:980px)" />
    <link rel="stylesheet" href="<?php echo URLROOT ;?>/css/smallMobile.css" media="(max-width:510px)" />


    <script defer src="/main.js"></script>
</head>

<body>
    <header>
        <div class="header">
            <form action="<?php echo URLROOT;?>Users/login" method="post" >

           
            <div class="chiled">
                <div class="user-input">
                    <label>Adresse e-mail ou mobile</label>
                    <input type="text" placeholder="Votre login" required name="contact" class="input" />
                </div>
            </div>

            <div class="chiled">
                <div class="user-input user-input2">
                    <label>Mot de passe</label>
                    <div class="infor">
                        <input type="password" placeholder="Votre mot de passe" required name="password" class="input" />

                       <div>
                        <a href="#">informations de compte oubliées ?</a>
                       </div> 
                    </div>
                </div>
                
            </div>
            <div class="chiled chiled3">
                <div class="user-input">
                    <input type="submit" value="Connexion" class="btn" />
                </div>
            </div>
        </form>
        </div>
    </header>

    <section class="home">
     <div class="content">
        <h2>Inscription</h2>
        <h4>C'est gratuit(et ça le restera toujours)</h4>
        
          <form action="<?php echo URLROOT;?>Users"  method="post" class="register">
           <div class="information">
            <input type="text" placeholder="Prénom" name="prenom" required>
            <input type="text" placeholder="Nom de famille" name="nom" required>
            <input type="text" placeholder="Numéro de mobile ou email" name="contact" required >
            <input type="text" placeholder=" Confirmer numéro de mobile ou email" name="reaptcontact" required >
            <input type="password" placeholder=" Nouveau mot de passe"  name="password"required >


           </div>
           <div class="date_naissance">
               <h4>Date de naissance</h4>
                <input type="date" required name="date">
                </div>
            <div class="content-genre">
                <fieldset>
                <div class="gener">
                   <input type="radio" value="Femme" id="genr_f" name="gener"/>
                   <label for="genr_f">Femme</label>
                </div>
                <div class="gener">
                    <input type="radio" value="Homme" id="genr_h" name="gener"/>
                    <label  for="genr_h">Homme</label>
                 </div>
                </fieldset>
            </div>
            <div class="text">
             Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              
             
            </div>
            <div class="btn">
                <input type="submit" value="Inscription">
            </div>


          </form>



        


          
                   

     </div>

     </div>

    
    </section>
</body>

</html>