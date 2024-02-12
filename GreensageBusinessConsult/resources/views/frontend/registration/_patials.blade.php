
<div class="err">
 @if(count($errors)>0)
            @foreach($errors->all() as $error)
               <div class="alert alert-danger col-md-4 offset-4 mb-2">
                  {{$error}}
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
           @endforeach
@endif 
</div>
     
           {{-- @if(session('error'))
           <div class="alert alert-danger col-md-12 ">
               <strong>{{session('error')}}</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
           </button>
           </div>
   @endif --}}
<form action="{{route('course-registration-store')}}" method="post">
        @csrf
    <section id="personal-info">
       <div class="container">
          <div class="personal-info">
             <div class="personal-info-content center">
                   <h2>Personal Informaton</h2>
                   <div class="inputbox">
                      <input type="text"  name="firstName">
                      <span>First Name</span>
                   </div>
                   <div class="inputbox">
                      <input type="text"  name="lastName">
                      <span>Last Name</span>
                   </div>
                   <div class="inputbox">
                      <input type="email"  name="email">
                      <span>Email</span>
                   </div>
                   <div class="inputbox">
                      <input type="text"  name="phone">
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
             <h2>Select Courses Based On Category</h2>
       
             <div class="row">
                {{-- @foreach($courses as $categorizedArray )
                      <div class="col-md-4 col-sm-6">
                         <div class="course-main">
                            <h5 class=course-title>{{ $categorizedArray[0]->category->name }} </h5>
                               @foreach($categorizedArray as $course)  
                                    
                                     <label class="checkbox-container">{{$course->title}}
                                        <input type="checkbox" name="courseCategories[]" value="{{$course->title}}" {{ old($course->title) == $course->title ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                     </label>
                               @endforeach
                         </div>
                      
                      </div>
                @endforeach --}}

              {{-- @foreach($courses as $categorizedArray )
                      <div class="col-md-4 col-sm-6">
                         <div class="course-main">
                            <h5 class=course-title>{{ $categorizedArray[0]->category->name }} </h5>
                               @foreach($categorizedArray as $course)  
                                      
                                   <label>
                                 <input type="checkbox" name="courseCategories[]" value="{{$course->title}}" {{ old('courseCategories') == $course->title ? 'checked' : '' }}  />
                                 <span>{{$course->title}}</span>
                                 </label>
                              @endforeach
                         </div>
                      
                      </div>
                @endforeach  --}}

  

                @foreach ($courses->chunk($courses_count) as $chunk)
                 <div class="col-lg-4 col-sm-6">
                        <div class="row">
                           @foreach($chunk as $categorizedArray )
                           <div class="col-12">
                              <div class="course-main">
                                 <h5 class=course-title>{{ $categorizedArray[0]->category->name }} </h5>
                                    @foreach($categorizedArray as $course)  
                                           
                                        <label>
                                      <input type="checkbox" name="courseCategories[]" value="{{$course->title}}" {{ old('courseCategories') == $course->title ? 'checked' : '' }}  />
                                      <span>{{$course->title}}</span>
                                      </label>
                                   @endforeach
                              </div>
                           
                           </div>
                     @endforeach
 
                     </div>
                  </div>
              @endforeach  

            {{-- @foreach ($courses->chunk(10) as $chunk)
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
              @endforeach   --}}
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
                   <input class=" form-control" type="date" id="datepicker" name="proposedDate"  >
                </div>

                <div class="inputBtn">
                 <input type="Submit" value="Submit">
              </div>

             </div>
       </div>
       </div>
    </section>


   
  
</form>