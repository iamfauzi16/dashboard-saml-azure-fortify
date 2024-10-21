<x-app-dashboard-layout title="Create User">
    <div class="col-12">
        <h3>Create User</h3>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                 
                                    <div class="form-group">
                                        <label for="imageUrl">Upload Photo</label>
                                        <input type="file" id="imageUrl" class="form-control @error('image_url') is-invalid @enderror" name="image_url" placeholder="upload photo" />
                                        @error('image_url')
                                            <div class="invalid-feedback">{{ $message }}</div>    
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name" />
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>    
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" />
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>    
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="password" />
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>    
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="passwordConfirmation">Password Confirmation</label>
                                        <input type="password" id="passwordConfirmation" class="form-control" name="password_confirmation" placeholder="password confirmation" />
                                    </div>
                                </div>

                               
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-dashboard-layout>