<div>
 
    {{-- <form id="contacts_form"  action="{{route('contact.store')}}" method="POST"> --}}
          @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mx-4"
         style="background: #253b5c;color:#eee" 
         role="alert"
         x-data="{ open: true }"
         x-init="setTimeout(()=>{open = false},2000)"
         x-show.transition.duration.1000ms="open"
         >
            <strong>Thank you. </strong>{{session('success')}} 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true" style="color:#eee">&times;</span>
            </button>
          </div>
        @endif
          <div class="title">
            <h3>Send Us A Message</h3>
          </div>

         <form id="contacts_form"  wire:submit.prevent="sendContactForm" >

        <div class="wrapper">
          {{-- <div class="input-data">
              <input type="text"  name="name" value="{{ old('name') }}" wire:model.lazy="name">
            <div class="underline"></div>
                <label>Name</label>
                @error('name')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="input-data">
            <input type="email"  name="email" value="{{ old('email') }}" wire:model.lazy="email">
            <div class="underline"></div>
                <label>Email</label>
                @error('email')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div> --}}
          <div class="group">
            <input type="text" placeholder="Name" autocomplete="off"  name="name" value="{{ old('name') }}" wire:model.lazy="name" /><span class="highlight"></span><span class="bar"></span>
            @error('name')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="group">
            <input type="email" placeholder="Email." autocomplete="off" name="email" value="{{ old('email') }}" wire:model.lazy="email" /><span class="highlight"></span><span class="bar"></span>
            @error('email')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
          <div class="group">
            <textarea type="text" placeholder="Textarea..." autocomplete="off"  name="message" wire:model.lazy="message">{{ old('message') }}</textarea><span class="highlight"></span><span class="bar"></span>
            @error('message')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div>
       
          {{-- <div class="input-data">
            <textarea  name="message" wire:model.lazy="message">{{ old('message') }}</textarea>
            <div class="underline"></div>
                <label>Message</label>
                @error('message')<small class="form-text text-danger">{{ $message }}</small>@enderror
          </div> --}}
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</div>
