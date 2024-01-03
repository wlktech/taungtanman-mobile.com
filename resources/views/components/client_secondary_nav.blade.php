<!-- secondary navbar section start  -->
<section class="container" style="margin-top:100px;">
    <div class="row secondary-nav">
        <div class="col-lg-9 d-lg-block d-none">
        <form class="search-box" action="{{ route('search') }}" method="get">
            <input type="search" placeholder="Search.." name="search" value="{{ request('search') }}" class="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
        <!-- <span class="fas fa-search"></span> -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
            <select name="category" id="category" class="form-select py-2">
            <option value="choose">Choose Brands..</option>
            <option value="all">All Product</option>
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
            </select>
        </div>
        
    </div>
</section>
<!-- secondary navbar section end  -->