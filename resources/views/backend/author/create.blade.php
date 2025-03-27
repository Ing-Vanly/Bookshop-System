<!-- Modal for adding new author -->
<div class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modal-lg-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-lg-label">Add New Author</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('author.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="phone_number" name="phone_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="profile_image">Profile Image</label>
                        <!-- Custom file upload input -->
                        <div class="custom-file">
                            <input type="file" name="profile_image"
                                class="custom-file-input @error('profile_image') is-invalid @enderror"
                                id="profile_image" onchange="previewImage()">
                            <label class="custom-file-label" for="profile_images">Choose file</label>
                        </div>
                        @error('profile_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <!-- Display the selected image name -->
                        <div id="file-name" class="mt-2"></div>
                        <!-- Display the image preview -->
                        <div id="image-preview" class="mt-2">
                            <img id="preview-image" src="" alt="Image Preview"
                                style="display: none; max-width: 100px; max-height: 100px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save Author</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
//Script for preview image and fill name image 
    function previewImage() {
        const fileInput = document.getElementById('profile_image');
        const fileLabel = document.querySelector('label[for="profile_images"]');
        const fileName = document.getElementById('file-name');
        const imagePreview = document.getElementById('image-preview');
        const previewImage = document.getElementById('preview-image');

        // Show the file name in the label of the file input
        const file = fileInput.files[0];
        if (file) {
            fileLabel.textContent = file.name;  // Update the file label text to the file name
        } else {
            fileLabel.textContent = 'Choose file'; // Reset label if no file is selected
            fileName.textContent = '';            // Clear the file name text
        }

        // Show the image preview
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block'; // Display the image preview
            };

            reader.readAsDataURL(file);
        } else {
            previewImage.style.display = 'none'; // Hide image if no file is selected or not an image
        }
    }
</script>
