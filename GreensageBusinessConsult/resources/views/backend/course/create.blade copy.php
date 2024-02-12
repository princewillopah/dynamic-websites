@extends('layouts.dashboardLayout')

@section('title')
 Create New
@endsection

@section('style')

@endsection

@section('script')

 {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script> --}}
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script> --}}
<script src="{{ asset('ckeditor5-build-classic/ckeditor.js') }}"></script>
<script>
class MyUploadAdapter {

    constructor( loader ) {
        // The file loader instance to use during the upload. It sounds scary but do not
        // worry — the loader will be passed into the adapter later on in this guide.
        this.loader = loader;
    }
// Starts the upload process.
    upload() {
        return this.loader.file
            .then( file => new Promise( ( resolve, reject ) => {
                this._initRequest();
                this._initListeners( resolve, reject, file );
                this._sendRequest( file );
            } ) );
    }

    // Aborts the upload process.
    abort() {
        if ( this.xhr ) {
            this.xhr.abort();
        }
    }

       // Initializes the XMLHttpRequest object using the URL passed to the constructor.
       _initRequest() {
        const xhr = this.xhr = new XMLHttpRequest();

        // Note that your request may look different. It is up to you and your editor
        // integration to choose the right communication channel. This example uses
        // a POST request with JSON as a data structure but your configuration
        // could be different.
        xhr.open( 'POST', '{{route('ckeditor.image_upload.store')}}', true );
        xhr.setRequestHeader('x-csrf-token','{{ csrf_token() }}');
        xhr.responseType = 'json';
    }

     // Initializes XMLHttpRequest listeners.
     _initListeners( resolve, reject, file ) {
        const xhr = this.xhr;
        const loader = this.loader;
        const genericErrorText = `Couldn't upload file: ${ file.name }.`;

        xhr.addEventListener( 'error', () => reject( genericErrorText ) );
        xhr.addEventListener( 'abort', () => reject() );
        xhr.addEventListener( 'load', () => {
            const response = xhr.response;

            // This example assumes the XHR server's "response" object will come with
            // an "error" which has its own "message" that can be passed to reject()
            // in the upload promise.
            //
            // Your integration may handle upload errors in a different way so make sure
            // it is done properly. The reject() function must be called when the upload fails.
            if ( !response || response.error ) {
                return reject( response && response.error ? response.error.message : genericErrorText );
            }

            // If the upload is successful, resolve the upload promise with an object containing
            // at least the "default" URL, pointing to the image on the server.
            // This URL will be used to display the image in the content. Learn more in the
            // UploadAdapter#upload documentation.
            resolve( {
                default: response.url
            } );
        } );
         // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
        // properties which are used e.g. to display the upload progress bar in the editor
        // user interface.
        if ( xhr.upload ) {
            xhr.upload.addEventListener( 'progress', evt => {
                if ( evt.lengthComputable ) {
                    loader.uploadTotal = evt.total;
                    loader.uploaded = evt.loaded;
                }
            } );
        }

    }


 // Prepares the data and sends the request.
 _sendRequest( file ) {
        // Prepare the form data.
        const data = new FormData();

        data.append( 'upload', file );

        // Important note: This is the right place to implement security mechanisms
        // like authentication and CSRF protection. For instance, you can use
        // XMLHttpRequest.setRequestHeader() to set the request headers containing
        // the CSRF token generated earlier by your application.

        // Send the request.
        this.xhr.send( data );
    }

    
}
///////////////////////////////////////////////////
////////////////class using the aboove code///////////////////////////////////
function SimpleUploadAdapterPlugin( editor ) {
    editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
        // Configure the URL to the upload script in your back-end here!
        return new MyUploadAdapter( loader );
    };
}
///////////////////////////////////////////////////
/////////ckeditr main//////////////////////////
ClassicEditor
    .create( document.querySelector( '#full-description' ), {
        extraPlugins: [ SimpleUploadAdapterPlugin ],
    } )
    .catch( error => {
        console.log( error );
    } );
// --------------------------------------------------------
    // ClassicEditor
    //     .create( document.querySelector( '#full-description' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );
</script>


@endsection

@section('content')
 <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <a href="{{URL::previous()}}" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                        <div class="ms-auto text-end ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create New</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             

                      <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8 offset-md-2" style="min-height: 450px;">
                        @include('includes.messages')

                        <form method="POST" action="{{ route('courses.store') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Course Title</label>
                                <input type="text" id="title" placeholder="Enter COURSE Title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Amount</label>
                                <input type="number" min="0" id="amount" placeholder="Enter Course Amount" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="form-control-label">Short Description</label>
                                <textarea  id="short_description" rows="3" placeholder="Enter Short Description" class="form-control @error('short_description') is-invalid @enderror" name="short_description" >{{ old('short_description') }}</textarea>
                               
                                @error('short_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-control-label">Full Description</label>
                                {{-- <textarea  id="description" rows="5" placeholder="Enter Full Description" class="form-control @error('description') is-invalid @enderror" name="description" >{{ old('description') }}</textarea> --}}
                                <textarea class="form-control"id="full-description" role="5" name="description" placeholder="Enter Full Description. Press enter if you need to go to second paragraph"  class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                                  
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Category</label>
                                <select name="category" id="pastor" class="form-control">
                                    <option value="" disabled>Select Course Category</option>
                                    @foreach($categorys as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Format</label>
                                <select name="format" id="format" class="form-control">
                                    <option value="" disabled>Select Course Format</option>
                                    @foreach($formats as $format)
                                        <option value="{{$format->id}}">{{$format->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            

                            <div class="form-group">
                                <label for="cover_image">Cover Image:</label>
                                <input type="file" class="form-control" placeholder="Cover Image" id="cover_image" name="coverImage">
                            </div>

                        

                            <div class="form-group">
                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>

                        </form>

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

          @endsection




