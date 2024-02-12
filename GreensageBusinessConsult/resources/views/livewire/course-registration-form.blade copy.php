<div>
   
    <form>
        <section id="personal-info">
           <div class="container">
              <div class="personal-info">
                 <div class="personal-info-content center">
                    {{-- <h2>{{}}</h2> --}}
                    
                    
                       
                       <div class="inputbox">
                          <input type="text" required="required">
                          <span>First Name</span>
                       </div>
                       <div class="inputbox">
                          <input type="text" required="required">
                          <span>Last Name</span>
                       </div>
                       <div class="inputbox">
                          <input type="text" required="required">
                          <span>Email</span>
                       </div>
                       <div class="inputbox">
                          <input type="text" required="required">
                          <span>Phone Number</span>
                       </div>
                       
  
           
                    
                    </div>
              </div>
           </div>
        </section>
  
        <section id="course-content">
           <div class="container">
           <div class="course-content">
              <div class="course-conten-info">
                 <h2>Courses In Categories </h2>
           
                 <div class="row">
                    {{-- @foreach($courses as $categorizedArray )
                          <div class="col-md-4 col-sm-6">
                             <div class="course-main">
                                <h5 class=course-title>{{ $categorizedArray[0]->category->name }} </h5>
                                   @foreach($categorizedArray as $course)  
                                        
                                         <label class="checkbox-container">{{$course->title}}
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                         </label>
                                   @endforeach
                             </div>
                          
                          </div>
                    @endforeach --}}
                @foreach ($courses->chunk(10) as $chunk)
                     <div class="col-lg-4 col-sm-6">
                            <div class="course-main">
                   
                              @foreach ($chunk as $course)
                                <label class="checkbox-container">{{$course->title}}
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                @endforeach
     
                         </div>
                        </div>
                  @endforeach  
                 </div>
  
                 </div>
           </div>
           </div>
        </section>
  
        <section id="course-date" class="mb-5">
           <div class="container">
           <div class="course-date">
              <div class="course-content-date">
                 <h2>Course Date </h2>
           
                    
                    <div class="form-group">
                       <label for="date">Proposed Date</label>
                       <input class=" form-control" type="date" id="datepicker"   >
                    </div>
           
                 </div>
           </div>
           </div>
        </section>
  
  
        <div class="inputBtn">
           <input type="button" value="Back">
        
           <input type="button" value="Next">
        </div>
  </form>
    
</div>
