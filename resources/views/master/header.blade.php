<div class="container-fluid bg-warning d-flex">
    <div class="col">
        <img src="{{ asset('assets/logo_dy_id.png') }}" alt="">
    </div>
    <div class="col-lg-10">
        @csrf
        <form action="/search">
            <input type="text" name="search" placeholder="Search product..." class="p-2 my-2 w-100">
    </div>
    <div class="col">
            <input type="submit" value="Search" class="p-2 my-2">
        </form>
    </div>
</div>