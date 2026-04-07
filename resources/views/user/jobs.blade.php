@extends('layout')

@section('title', ' | Jobs')

@section('content')

<div class="container">
    <div class="row">
        <h2>Job List</h2>
        <a href="{{ url('post-job') }}" class="btn btn-sm btn-outline-primary mb-3 mx-2" style="width: auto">Post Job</a>
        <hr>
    </div>

    @if(empty($jobs[0]))
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
                        @if($job->logo)
                            <img src="{{ asset($job->logo) }}" height="50px" class="img-circle">
                        @endif
                    </td>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->description }}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a href="{{ url('listing/edit/' . $job->id) }}"
                                class="btn btn-outline-info m-2 ms-0 float-end btn-sm"><i class="fa fa-pencil"></i>
                                Edit</a>
                            <form action="{{ url('listing/delete/' . $job->id) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger mt-2 ms-0 float-end btn-sm"><i
                                        class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        {{ $jobs->links() }}
    @endif

    
</div>

@endsection
