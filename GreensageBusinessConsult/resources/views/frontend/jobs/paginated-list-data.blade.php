

@if($jobs->count() > 0)
<h6 class="totalFound">Total Rusults Found: <span>{{$jobs->count()}}</span></h6>
@foreach($jobs as $job)

<div class="col-md-12">
  <div class="content">
    <a href="{{route('single-job',[$job->id,$job->slug])}}">
      <div class="content-inner">
        <div class="icon">
          <img src="img/hr/icon.png" class="img-fluid" alt="greensage logo">
        </div>
        <div class="main-job-ads">
          <div class="title">
            <h4>{{$job->title}}</h4>
          </div>
          <div class="desc">
            <p> {{$job->short_description}}</p>
          </div>
        
          <div class="other-info">
            <div class="company-name">
              <i class="fa fa-building-o"></i>
              <h5>{{$job->company_name}}</h5>
            </div>
            <div class="job-sector">
              <i class="fa fa-industry"></i>
              <h5>{{$job->industry->name}}</h5>
            </div>
            <div class="job-date-published">
              <i class="fa fa-calendar"></i>
              <h5>{{$job->formattedDate($job->created_at)}}</h5>
              
            </div>
          </div>
        </div>
        <div class="right-content job-desktop">
          <h6 class="state">{{$job->location->name}}</h6>
          <h5>{{$job->job_type}}</h5>
        </div>
        <div class="job-mobile">
          <h6 class="state">Location: <span>{{$job->location->name}}</span></h6>
          <h5>Job type: <span>{{$job->job_type}}</span> </h5>
        </div>
      </div>
    </a>  
  </div>
</div>
@endforeach
<div class="col-md-12">
  {{$jobs->links()}}
  {{-- {{$jobs->links('vendor.pagination.custom3-pagination')}} --}}
</div>

@else
<h5 class="no-found">  No Job Found</h5>
@endif