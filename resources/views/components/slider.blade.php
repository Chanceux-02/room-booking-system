<div id="carouselExampleFade" class="carousel slide carousel-fade mt-2 _slider-container" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="_slider" src="{{ Storage::url('gallery-pics/slider1.jpg')}}" alt="Image">
      </div>
      <div class="carousel-item">
        <img class="_slider" src="{{ Storage::url('gallery-pics/slider3.jpeg')}}" alt="Image">
      </div>
      <div class="carousel-item">
        <img class="_slider" src="{{ Storage::url('gallery-pics/slider2.jpg')}}" alt="Image">
      </div>
    </div>
    <div class="_slider-text">
      <h3>Hotel Features</h3>
    </div>
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
</div>