<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sunspottours Hotels</title>
</head>
<body>
    <div class="container">
        <!-- Add new hotel -->
        <div class="row mt-5">
            <div class="col-md-12 d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add new
                </button>
            </div>
        </div>
        
        <!-- Search form -->
        <form action="#" method="get">
            <div class="row mt-4">
                <div class="col-md-3">
                    <input type="number" class="form-control mt-2" name="roomsRequired" placeholder="Enter number of rooms required" required>
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control mt-2" name="minimum" placeholder="Enter minimum price" required>
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control mt-2" name="maximum" placeholder="Enter maximum price" required>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary w-100 mt-2">Search</button>
                </div>
            </div>
        </form>

        <!-- Data Table -->
        <div class="row mt-3">
            <div class="col-md-12">
                <?php 
                    $html = '<table class="table table-striped table-hover table-bordered">';
                    // header row
                    $html .= '<tr>';
                    $html .= '<th>Name</th>';
                    $html .= '<th>Available</th>';
                    $html .= '<th>Floor</th>';
                    $html .= '<th>Room No</th>';
                    $html .= '<th>Per Room Price</th>';
                    $html .= '</tr>';
                
                    // data rows
                    foreach( $searchResult as $key=>$value){
                        
                        $html .= '<tr>';
                        foreach($value as $key2=>$value2){
                            if($key2 === 'available' && $value2) {
                                $value2 = "Yes";
                            }else if($key2 === 'available') {
                                $value2 = "No";
                            }
                            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
                        }
                        $html .= '</tr>';
                    }
                
                    // finish table and return it
                    $html .= '</table>';
                    echo $html;
                ?>
            <div>
        </div>
    </div>

    <!-- Add new hotel Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="#">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Hotel Room</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group m-2">
                                <select class="form-select" name="hotel" required>
                                    <option selected>Select hotel</option>
                                    <option value="Hotel A">Hotel A</option>
                                    <option value="Hotel B">Hotel B</option>
                                </select>
                            </div>
                            <div class="form-group m-2">
                                <select class="form-select" name="available" required>
                                    <option selected>Select availablability</option>
                                    <option value="True">Available</option>
                                    <option value="False">Not available</option>
                                </select>
                            </div>
                            <div class="form-group m-2">
                                <input type="number" class="form-control" name="floor" placeholder="Enter floor" required>
                            </div>
                            <div class="form-group m-2">
                                <input type="number" class="form-control" name="room_no" placeholder="Enter room no" required>
                            </div>
                            <div class="form-group m-2">
                                <input type="number" class="form-control" name="price" placeholder="Enter price" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function successful() {
            Swal.fire({
                title: 'Good job!',
                text: 'Hotel successfully added',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'ok',
                }).then((result) => {
                    window.location.replace("/");
            })
        }
    </script>
</body>
</html>