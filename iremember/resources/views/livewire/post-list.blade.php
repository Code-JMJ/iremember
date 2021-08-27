<div class="mx-auto" >

    @foreach ($postList2 as $item)

    <div class="card mb-3 mx-auto" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{asset('img/saitama.jpg')}}" alt="..." class="img-fluid">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    {{ $postList2->links() }}
</div>
