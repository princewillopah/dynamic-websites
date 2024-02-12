<div>
   @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mx-4"
         style="background: #253b5c;color:#eee" 
         role="alert"
         x-data="{ open: true }"
         x-init="setTimeout(()=>{open = false},2000)"
         x-show.transition.duration.1000ms="open"
         >
            <strong> {{session('success')}} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="color:#eee">&times;</span>
            </button>
          </div>
        @endif


    <form  wire:submit.prevent="submit">
        <section id="personal-info">
           <div class="container">
              <div class="personal-info">
                 <div class="personal-info-content center">
                       <h2>Personal Informaton</h2>
                       <div class="inputbox">
                          <input type="text"  wire:model.lazy="firstName">
                            @error('firstName')<small class="form-text text-danger">{{ $message }}</small>@enderror
                          <span>First Name</span>
                       </div>
                       <div class="inputbox">
                          <input type="text"   wire:model.lazy="lastName">
                       
                          <span>Last Name</span>
                       </div>
                       <div class="inputbox">
                          <input type="text"   wire:model.lazy="email">
                            @error('email')<small class="form-text text-danger">{{ $message }}</small>@enderror
                          <span>Email</span>
                       </div>
                       <div class="inputbox">
                          <input type="text"   wire:model.lazy="phone">
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
                 <h2>Select Courses </h2>
               @error('courseCategories')<small class="form-text text-danger">{{ $message }}</small>@enderror
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
                                    <input type="checkbox" name="Course Categories" value="{{$course->title}}" wire:model.lazy="courseCategories">
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
                       <input class=" form-control" type="date" id="datepicker" name="proposedDate"  wire:model.lazy="proposedDate" >
                       @error('proposedDate')<small class="form-text text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div class="inputBtn">
                     <input type="submit" value="Submit">
                  </div>

                 </div>
           </div>
           </div>
        </section>

  
       
      
  </form>
    
</div>
