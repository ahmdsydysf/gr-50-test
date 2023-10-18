<div>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">{{ $limitition($user->email , 2)}}.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</div>
