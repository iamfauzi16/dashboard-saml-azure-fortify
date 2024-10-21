<x-app-dashboard-layout title="My Profile">
    <div class="col-12">
        <h3 class="fw-semibold mb-4">My Profile</h3>
        <div class="section-body">
            <h4 class="section-title">Hi, {{ Auth::user()->name }}</h4>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-4">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Photo</h4>
                            <div class="row justify-content-start">
                                <div class="col-1">
                                    <img src="{{ $photo->image_url }}" class="rounded float-start" width="100" height="100" alt="...">
                                </div>
                                <div class="col-5">
                                    <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="formFile" class="form-label">Upload Photo</label>
                                            <input class="form-control @error('image_url') is-invalid @enderror" type="file" id="formFile" name="image_url">
                                            @error('image_url')
                                                <div class="invalid-feedback">{{ $message }}</div>       
                                            @enderror
                                        </div>
                                        <button class="btn btn-primary">Upload Photo</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit Password Section -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Password</h4>

                            <form action="{{ route('user-password.update') }}" method="POST">
                                @csrf
                                @method('PUT')


                                <div class="form-group">
                                    <label for="currentPassword">Current Password</label>
                                    <input type="password" name="current_password"
                                        class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                        id="currentPassword" placeholder="Current password">
                                    @error('current_password', 'updatePassword')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="newPassword">New Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                        id="newPassword" placeholder="New password">
                                    @error('password', 'updatePassword')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="passwordConfirmation">Confirm New Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="passwordConfirmation" placeholder="Confirm new password">
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Edit Profile Section -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Profile</h4>

                            <form action="{{ route('user-profile-information.update') }}" method="POST"
                                enctype="multiple/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror"
                                        id="name" placeholder="Name">
                                    @error('name', 'updateProfileInformation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror"
                                        id="email" value="{{ old('email', Auth::user()->email) }}"
                                        placeholder="email@example.com">
                                    @error('email', 'updateProfileInformation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

    
                                <button type="submit" class="btn btn-primary mt-3">Update Information</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-dashboard-layout>
