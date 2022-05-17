<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  rows="3" type="text" class="form-control" id="description" name="description" placeholder="description"></textarea>
                </div>

                <div class="form-group">
                    <label for="thumb">Thumb </label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="thumb">
                </div>

                <div class="form-group">
                    <label for="price">Price </label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="thumb">
                </div>

                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="thumb">
                </div>

                <div class="form-group">
                    <label for="sale-date">Sale date</label>
                    <input type="date" class="form-control" id="sale-date" name="sale_date" placeholder="thumb">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="thumb">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>