@extends('layouts.master')
@section('title')
 	Posted Job
@endsection
@section('content')
 	<div class="row">
	 	@if($job)
	 	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
	 		<h2 class="text-center">Posted Job</h2>
	 			<div class="row" id="{{$job->id}}">
	 			<input type="hidden" name="job_id" value="{{$job->id}}">
				    <div class="thumbnail thumbnail-padding">
				        <bold title="{{$job->job_title}}" class="desig"><label>Job Title:</label> {{ucwords($job->job_title)}}</bold>
				        <div class="caption">
				          	<span class="org"><label>Company Name:</label> {{$job->company_name}}</span><br>
					        <span class="exp"><em></em><label>Experience:</label> 0-1 yrs</span><br> 
					        <span class="jobLocation"><label>CompanyName:</label>{{$job->location}}</span>
					        <div class="more"> 
					        	<label>Keyskills:</label>
					            <div class="desc"> 
					            	<span itemprop="skills" class="skill">{{ucwords($job->skills)}}
					            	</span>
					            </div>
					        	<label>Job Description:</label>
					            <span class="desc">{{ucfirst($job->job_description)}}</span><br>
					        	<label>Salary:</label>
					            <span class="salary  "><em></em>{{$job->salary}} LPA</span>
					        </div>
				        </div>
				  	<div class="other_details">
				  		<label>Job Poster Details:</label>
				        <div class="rec_details"> Posted by
				            <a title="Job Posted by  {{ucfirst($job->first_name)}}" href="{{ env('FRONT_USER').'/logged-in-user/'.$job->user_id }}">{{ucfirst($job->first_name)}} {{$job->last_name}} 
				            </a> 
				            <span class="date">at {{$job->updated_at}}</span>
				        </div>
				    </div>
				    
				  	</div>
				</div>
		</div>
		@endif
 	</div>
@endsection