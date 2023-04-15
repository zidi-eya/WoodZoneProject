<div class="modal popup-search-style" id="searchActive"  style="color:#7a823a ">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true" >&times;</span></button>
        <div class="modal-overlay" >
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content" style="background-color:#7a823a ">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" action="{{ route('products.search') }}"  role="search">
                            <div class="form-group">
                                <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}" placeholder="Search here...">
                            </div>
                                <button type="submit" class="submit-btn"><i class="pe-7s-search" ></i></button>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>