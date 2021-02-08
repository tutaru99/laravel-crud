@extends('tvseries.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Series</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('tvseries.create') }}"> Add New Serie</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif



    @foreach ($tvseries as $tvserie)
        <div class="col-lg-3">
        <strong>{{ $tvserie->name }}</strong> <br>
        <a href="{{ route('tvseries.show',$tvserie->id) }}"><img src="{{ $tvserie->image_url }}" alt=""></a><br>
        <strong>Number of episodes:</strong>{{ $tvserie->episode_number }} <br>
        <strong>Rating:  </strong> {{ $tvserie->rating }} <br>
        {{ $tvserie->description }} <br>
            <form action="{{ route('tvseries.destroy',$tvserie->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('tvseries.show',$tvserie->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('tvseries.edit',$tvserie->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </strong>
    </div>
    @endforeach
</div>
<div class="d-flex">
    <div class="col-lg-12">
        <div class="d-flex align-items-center">
            {{ $tvseries->links() }}
        </div>

    </div>
</div>


@endsection