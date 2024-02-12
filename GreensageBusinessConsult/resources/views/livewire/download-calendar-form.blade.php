<div>
    <form  wire:submit.prevent="submit">
        <p class="top-message">Please complete the following for access to the free download.</p>
        <section id="download-calender">
           <div class="container">
              <div class="download-calender">
                 <div class="download-calender-content">
                       <h2>Your Informaton</h2>
                       <div class="form-group">
                            <label>Your Name</label>
                          <input type="text" class="form-control"  wire:model.lazy="name">
                            @error('name')<small class="form-text text-danger">{{ $message }}</small>@enderror
                       </div>
                       <div class="form-group">
                            <label>Company Name</label>
                          <input type="text" class="form-control"   wire:model.lazy="company">
                          @error('company')<small class="form-text text-danger">{{ $message }}</small>@enderror
                       </div>

                       <div class="form-group">
                      <label>Your State</label>
                        <select type="text" class="form-control" class="custom-select-sm"  wire:model.lazy="state">
                           <option value=""> Select State</option>
                           <option value="Abuja"> Abuja </option>
                            <option value="Abia">   Abia</option>
                            <option value="Adamawa">   Adamawa</option>
                            <option value="Akwa Ibom">   Akwa Ibom </option>
                            <option value="Anambra">   Anambra </option>
                            <option value="Bauchi">   Bauchi</option>
                            <option value="Bayelsa">     Bayelsa</option>
                            <option value="Benue">    Benue </option>
                            <option value="Borno">     Borno</option>
                            <option value="Cross River">     Cross River </option>
                            <option value="Delta">     Delta</option>
                            <option value="Ebonyi">      Ebonyi</option>
                            <option value="Edo">    Edo</option>
                            <option value="Ekiti">      Ekiti</option>
                            <option value="Enugu">    Enugu </option>
                            <option value="Gombe">        Gombe </option>
                            <option value="Imo">     Imo </option>
                            <option value="Jigawa"> Jigawa</option>
                            <option value="Kaduna">  Kaduna</option>
                            <option value="Kano"> Kano</option>
                            <option value="Katsina">  Katsina</option>
                            <option value="Kebbi">Kebbi </option>
                            <option value="Kogi"> Kogi</option>
                            <option value="Kwara">  Kwara</option>
                            <option value="Lagos">  Lagos</option>
                            <option value="Nasarawa"> Nasarawa</option>
                            <option value="Niger">Niger </option>
                            <option value="Ogun">  Ogun</option>
                            <option value="Ondo">Ondo </option>
                            <option value="Osun">Osun </option>
                            <option value="Oyo"> Oyo </option>
                            <option value="Plateau"> Plateau </option>
                            <option value="Rivers">Rivers </option>
                            <option value="Sokoto"> Sokoto</option>
                            <option value="Taraba"> Taraba</option>
                            <option value="Yobe">Yobe </option>
                            <option value="Zamfara"> Zamfara</option>
                        </select> 
                           @error('state')<small class="form-text text-danger">{{ $message }}</small>@enderror
                       </div>
                       <div class="form-group">
                           <label>Phone Number</label>
                          <input type="text" class="form-control"   wire:model.lazy="phone">
                          {{-- @error('phone')<small class="form-text text-danger">{{ $message }}</small>@enderror --}}
                       </div>
                       <div class="form-group">
                           <label>Email</label>
                        <input type="text" class="form-control"   wire:model.lazy="email">
                          @error('email')<small class="form-text text-danger">{{ $message }}</small>@enderror
                       </div>
                       <button type="submit" class="btn-sub">Submit</button>
                     
                    </div>
              </div>
           </div>
        </section>

       
      
      
     
     
      
    
    
    
   
   
   
     
   
    
   
        
       
        
       
        
        
       
       
        
        
       
        
        
       
       
        
        
        
        
        
      

      
       
      
  </form>
</div>
