<x-app-dashboard-layout title="Edit User">
    <div class="col-12">
        <h3>Edit User</h3>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.update', $user) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        @if($user->image_url)
                                        <img src="{{ url($user->image_url) }}" alt="photo-image" width="72" class="img-thumbnail">
                                        @else
                                        <img src="https://www.transparentpng.com/download/user/gray-user-profile-icon-png-fP8Q1P.png" width="72" alt="photo-image" class="img-thumbnail">
                                        @endif
                                    </div>
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
                                        <input type="text" id="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name" />
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>    
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email" />
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
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-dashboard-layout>