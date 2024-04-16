<div class="container mt-4">
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Success! </strong>
        <span class="fw-bold fst-italic">
            <?= ucfirst($data['name']) ?>
        </span> with Phone Number:
        <span class="fw-bold fst-italic">
            <?= $data['phone'] ?>
        </span> Registered Successfully
    </div>

    <script>
        var alertList = document.querySelectorAll(".alert");
        alertList.forEach(function (alert) {
            new bootstrap.Alert(alert);
        });
    </script>

</div>