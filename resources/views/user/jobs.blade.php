@extends('layout')

@section('title', ' | Jobs')

@section('content')

<div class="container">
    <div class="row">
        <h2>Job List</h2> <hr>
    </div>
    
    @if (empty($jobs[0]))
        <h4 class="text-center">No post Found</h4>
    @else
        <table class="table table-hover">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobs as $key => $job): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>                       
                        <td>
                            @if ($job->logo)
                                <img src="{{ asset($job->logo) }}" height="50px" class="img-circle">
                            @endif
                        </td>
                        <td>{{ $job->title }}</td>                        
                        <td>{{ $job->description }}</td> 
                        <td>
                            <div class="btn-group">
                            <a href="{{ url('listing/edit/' . $job->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="{{ url('listing/delete/' . $job->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                        </td>
                    </tr>
                <?php endforeach ?>         
            </tbody>
        </table>
        {{$jobs->links()}}
    @endif

    <a href="{{ url('post-job') }}" class="btn btn-outline-primary pull-right" style="margin-top:20px">Post Job</a>
</div>

@endsection