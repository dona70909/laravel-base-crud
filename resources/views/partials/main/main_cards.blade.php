<section class="container-fluid">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="card col-3" style="width: 18rem;">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary">View Comic</a>
                </div>
            </div>
        @endforeach
        
    </div>
</section>