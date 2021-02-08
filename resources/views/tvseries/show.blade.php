@extends ('tvseries.layout')

@section ('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>  {{ $tvseries->name }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tvseries.index') }}">Back</a>
        </div>
    </div>
</div>

        <div class="col-lg-6">
    <strong>{{ $tvseries->name }}  </strong> <br>
        <img src="{{ $tvseries->image_url }}" alt=""> <br>
       <strong>Number of episodes:</strong>{{ $tvseries->episode_number }} <br>
       <strong>Rating:  </strong> {{ $tvseries->rating }} <br>
        {{ $tvseries->description }} <br>
        </strong>
    </div>

@endsection