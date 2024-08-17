document.getElementById('image-upload').addEventListener('change', function(event) {
    const reader = new FileReader();
    reader.onload = function() {
        document.getElementById('profile-image').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
});

document.getElementById('profile-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Profil modifié avec succès!');
});
