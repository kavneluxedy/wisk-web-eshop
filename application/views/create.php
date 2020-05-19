<div class="container">
   <div class="row">
      <form method="POST" action="User/create" id="form">
         <fieldset class="col-auto m-0 p-4 bg-dark shadow text-light">
            <div class="row">

               <div clas="d-flex flex-row align-items-end justify-content-between">
                  <div>
                     <label for="objReq" class="col-auto mt-1">Objet de votre demande</label>
                     <select id="objReq" name="objReq" class="form-control col-auto mb-1 transition" />
                     <option selected disabled>--</option>
                     <option value="SAV">SAV</option>
                     <option value="DEVIS">Devis</option>
                     <option value="OTHERS - TO DETERMINATE">Autres - à préciser</option>
                     </select>
                  </div>
                  <div>
                     <div>
                        <label for="sexe" class="col-auto m-0">Civilité</label>
                        <input type="text">
                        <input type="radio" name="sexe" value="female">Mme.</input>
                        <input type="radio" name="sexe" value="male">Mr.</input>
                        </input>
                     </div>
                  </div>
               </div>

            </div>
            <div class="row">

               <label for="nom" class="col-3 m-0">Nom</label>
               <input type="text" name="nom" id="nom" class="form-control col-12 mb-1 transition shadow" />
               <span class="missFirstName" id="missName"></span>

               <label for="prenom" class="col-9 m-0">Prénom</label>
               <input type="text" name="prenom" id="prenom" class="form-control col-12 mb-1 transition shadow" />
               <span class="missName" id="missLastName"></span>

               <label for="email" class="col-9 m-0">Adresse e-mail</label>
               <input type="text" name="email" id="email" placeholder="example@domain.net" class="form-control col-12 mb-1 transition shadow" />

               <span class="missMail" id="missMail"></span>

               <label for="uMsg" class="col-9 m-0">Votre message</label>
               <textarea id="uMsg" name="uMsg" class="form-control mb-1 transition shadow" rows="2"></textarea>
               <span class="missMsg" id="missMsg"></span>
            </div>
         </fieldset>
         <div class="form-group d-flex justify-content-center mt-4">
            <input type="reset" id="reset" value="Effacer" class="btn text-center shadow col-2 text-warning bg-dark" />
            <input type="submit" id="submit" value="Envoyer" class="btn text-center shadow col-2 text-success bg-dark ml-2" />
         </div>
      </form>
   </div>
</div>