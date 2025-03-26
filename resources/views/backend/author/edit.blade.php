<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Author</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('author.update', 'update') }}" method="POST" id="editForm" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="author_id" id="author_id">

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                    </div>

                    <div class="form-group">
                        <label for="profile_image">Profile Image</label>
                        <input type="file" class="form-control" id="profile_image" name="profile_image">
                    </div>

                    <div class="form-group">
                        <img id="current_profile_image" src="" alt="Current Image" width="50">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var editButtons = document.querySelectorAll('.edit-btn');

    editButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var authorId = this.getAttribute('data-id');
            var firstName = this.getAttribute('data-first_name');
            var lastName = this.getAttribute('data-last_name');
            var email = this.getAttribute('data-email');
            var phoneNumber = this.getAttribute('data-phone_number');
            var profileImage = this.getAttribute('data-profile_image');

            // Set values to the modal form fields
            document.getElementById('author_id').value = authorId;
            document.getElementById('first_name').value = firstName;
            document.getElementById('last_name').value = lastName;
            document.getElementById('email').value = email;
            document.getElementById('phone_number').value = phoneNumber;

            // If profile image exists, display it
            if (profileImage) {
                document.getElementById('current_profile_image').src = "{{ Storage::url('') }}" + profileImage;
            } else {
                document.getElementById('current_profile_image').src = "{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}";
            }

            // Change form action to the correct URL with the author ID
            var formAction = "{{ route('author.update', ':id') }}".replace(':id', authorId);
            document.getElementById('editForm').action = formAction;
        });
    });
});

</script>