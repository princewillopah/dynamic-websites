
{{-- <div class="col-md-12 mt-2 "> --}}
    {{-- <div class="alert alert-success ajax-message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> --}}
{{-- </div> --}}

<div class="col-md-12 mt-2">
    @if(count($errors)>0)
       @foreach($errors->all() as $error)
          <div class="alert alert-danger">
              {{$error}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
     @endforeach
   @endif
</div>




  {{-- @if(session('success'))

  <div class="alert alert-success">
      {{session('success')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif --}}

@if(session('success'))
  <div class="alert alert-success col-md-6 offset-md-3">
      <strong>{{session('success')}}</strong>
      {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button> --}}
  </div>
@endif

{{-- <div class="col-md-12 mt-2">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{ session()->get('success') }}</strong>
        </div>
    @endif
</div> --}}

@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(session('error'))
  <div class="alert alert-danger">
      {{session('error')}}
  </div>
@endif