<div>
<main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Add New categories
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                Add New categories
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.categories')}}" class="btn btn-success float-end">All Categories</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <Form wire:submit.prevent="storeCategory">
                                <div class="mb-3 mt-3">
                                    <laber for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter category name" wire:model="name" wire:keyup="generateSlug"/>
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <laber for="name" class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Enter category slug"  wire:model="slug"/>
                                    @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <laber for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" wire:model="image"/>
                                    @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                </div>

                                <div class="mb-3 mt-3">
                                    <laber for="is_popular" class="form-label">Popular</label>
                                    <input class="form-control" name="is_popular" wire:model="is_popular">
                                        <option value="0">No </option>
                                        <option value="1">Yes </option>
                                    @error('is_popular')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</session>
</main>
</div>
