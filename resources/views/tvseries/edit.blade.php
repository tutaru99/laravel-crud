@extends ('tvseries.layout')

@section ('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit TV Serie</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tvseries.index') }}">Back</a>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-6">

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tvseries.update', $tvseries->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name of the Series:</strong>
                <input type="text" name="name" value="{{ $tvseries->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description of the Series:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $tvseries->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image URL:</strong>
                <input type="text" name="image_url" class="form-control" value="{{ $tvseries->image_url }}" placeholder="URL">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="form-group">
                <strong>Number of Episodes:</strong>
                <input type="number" name="episode_number" class="form-control" value="{{ $tvseries->episode_number }}" placeholder="Number of Episodes">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="form-group">
                <strong>Rating:</strong>
                <input type="number" name="rating" class="form-control" value="{{ $tvseries->rating }}" placeholder="Rating">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
    </div>

<div class="col-lg-6">
    <strong>{{ $tvseries->name }}  </strong> <br>
        <img src="{{ $tvseries->image_url }}" alt=""> <br>
       <strong>Number of episodes:</strong>{{ $tvseries->episode_number }} <br>
       <strong>Rating:  </strong> {{ $tvseries->rating }} <br>
        {{ $tvseries->description }} <br>
        </strong>
    </div>



</div>
@endsection