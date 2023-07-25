<!DOCTYPE html>
<html lang="en">


<head>
    <!-- bootsrtap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootsrtap -->
</head>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class=" modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Membership Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="Email" placeholder="abcy@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="Phone" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control" id="Phone" placeholder="0993222344">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">ID Number</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                   

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>


<!-- bootsrtap scrip -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- bootsrtap -->



</html>