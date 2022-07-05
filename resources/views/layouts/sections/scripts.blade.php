<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/2e82dfc335.js" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toastElementList = [].slice.call(document.querySelectorAll(".toast"));
        var toastList = toastElementList.map(function(element) {
            return new bootstrap.Toast(element, {
                autohide: false
            });
        });
    });
</script>
