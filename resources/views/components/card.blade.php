<div class="card" style="width: 18rem;">
    @if($image)
        <img src="{{ $image }}" class="card-img-top" alt="Image">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $content }}</p>
        <a href="{{ $link }}" class="btn btn-primary">Go Learn</a>
    </div>
</div>
