@extends('layout')
@section('style')
    <style>
        .card:hover,
        .card:focus-within {
        background-color: #e9ecef; /* Using the same color as selected nav items */
        box-shadow: 0 0 1rem rgba(0,0,0,0.15);
        }

        /* Make it look clickable... */
        .card-clickable {
        border-radius: 7px;
        border-width: 2px;
        }

        /* .opacity {
            --bs-bg-opacity: .5;
        } */
    </style>
@endsection
@section('content')
<div class="row">
    
<div class="card m-3 card-clickable overflow-auto bg-warning" style="height: 18rem;width: 18rem">
    <div align="right" class="me-3">
        {{-- <a href="#"><button style="background-color: white;border:none"><i class="fa-solid fa-pen-to-square"></i></button></a> --}}
        <a href="#"><button class="btn btn-sm bg-warning" style="border:none;position: fixed"><i class="fa-solid fa-xmark"></i></button></a>
        {{-- <a href="#"><button style="background-color: white;border:none">Done</button></a> --}}
    </div>
    <a href="#" style="text-decoration: none">
    <div class="card-body overflow-auto text-dark p-1">
        <h5 class="card-title">Card title</h5>
        <hr class="m-1">
        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque quod, minima nesciunt non at pariatur magnam, quisquam fugiat, magni suscipit placeat exercitationem deserunt sequi rem voluptas tempore illo. Nulla vel, incidunt maiores, a asperiores dolorum, fugiat officia cumque adipisci alias nam reprehenderit possimus ipsa perferendis accusantium doloribus quaerat vero. Ab, asperiores saepe deserunt, ipsa delectus tempore nisi, perspiciatis itaque debitis recusandae cumque numquam hic ratione illum corrupti vitae veritatis harum architecto voluptatum exercitationem voluptatibus nobis quo aut! Eum, eaque veritatis aliquam voluptatibus deserunt dolore obcaecati excepturi. Aliquam cumque expedita porro voluptatum soluta, ea debitis doloremque inventore, ab eaque voluptas aliquid.</p>
    </div></a>
  </div>
<div class="card m-3" style="height: 18rem;width: 18rem">
    <div class="card-body overflow-auto">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
<div class="card m-3" style="height: 18rem;width: 18rem">
    <div class="card-body overflow-auto">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
<div class="card m-3" style="height: 18rem;width: 18rem">
    <div class="card-body overflow-auto">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
<div class="card m-3" style="height: 18rem;width: 18rem">
    <div class="card-body overflow-auto">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
</div>


@endsection