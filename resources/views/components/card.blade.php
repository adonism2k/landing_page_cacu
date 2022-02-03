@props(['number', 'class', 'color'])

<div class="col d-flex justify-content-center mt-0 mt-lg-5">
    <div class="card border-0 p-4 mb-5 {{ $class ?? '' }}">
        <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
            <div class="card-number rounded-circle d-flex justify-content-center align-items-center" style="background-color: {{ $color }};">{{ $number }}</div>
        </div>
        <div class="card-body">
            <h5 class="card-title text-center fs-5">{{ $title }}</h5>
            <p class="card-text text-center mt-4">{{ $description }}</p>
        </div>
    </div>
</div>
