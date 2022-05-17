<section class="container-fluid">
    <div class="row p-3">
        <div class="col-12">
            <div class="my-card">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
                <div class="my-card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                </div>
            </div>
        </div>
    </div>
</section>