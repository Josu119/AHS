@if(session()->has('message'))
<div class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-androidGreen text-darkOlive px-48 py-3 z-30">
    <p>
        {{ session('message') }}
    </p>
</div>
@endif
