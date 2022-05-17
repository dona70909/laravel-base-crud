<section class="container-fluid">
    <div class="row cards-wrapper">
        @foreach ($comics as $comic)
            <div class="card col-2">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary">View Comic</a>
                </div>
            </div>
        @endforeach
        
    </div>
</section>