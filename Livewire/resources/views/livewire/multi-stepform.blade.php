<div>
    <form>
        {{-- Step 1 --}}
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white"> Phase 1/4 - Details Personnels</div>
                <div class="card-body"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <labelle for="">Prenom</labelle>
                                <input type="text" class="form-control" placeholder="Votre Prenom">

                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <labelle for="">Nom</labelle>
                                <input type="text" class="form-control" placeholder="Votre Nom">

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sexe</label>
                                        <select class="form-control">
                                            <option value="" >Choisir le genre</option>
                                            <option value="male">Homme</option>
                                            <option value="femal">Femme</option>
                                        </select>
                                     </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Age</label>
                                    <input type="text" class="form-control" placeholder="Mettez votre Age">                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" cols="2" rows="2"></textarea>

                        </div>
                    </div>
                </div>

            </div>

        </div>


        {{-- STEP 2 --}}
        <div class="step-two">
            <div class="card">
                  <div class="card-header bg-secondary text-white"> Phase 2/4 - Addresse et Contact</div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for=""> Email</label>
                                  <input type="text" class="form-control" placeholder="Votre Email">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Telephone</label>
                                  <input type="text" class="form-control" placeholder="Votre Telephone">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for=""> Votre Pays</label>
                                 <select class="form-control">
                                     <option value="" selected>Selectionner votre pays</option>
                                     <option value="Senegal"> Senegal</option>
                                     <option value="France"> France</option>
                                     <option value="Guinee Conackry"> Guinee Conackry</option>
                                     <option value="Allemagne"> Allemagne</option>
                                     <option value="Allemagne"> Canada</option>
                                 </select>
                                
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for=""> Votre Ville</label>
                                 <input type="text" class="form-control" placeholder="Selectionner votre ville">
                             </div>
                         </div>
                      </div>
                  </div>
            </div>
        </div>

    </form>
</div>
