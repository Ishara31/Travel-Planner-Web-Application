<?php
require './classes/DbConnector.php';

use classes\DbConnector;
$dbcon = new DbConnector();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

 
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="Admin.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">EDMON</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="visa.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Visagan</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="Admin.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="Admin_Package.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Packages</a>
                  
                    <a href="Admin_Touist.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tourist</a>
                   
                  
                        </div>
                    </div>
                </div>
            </nav>
        </div>
     

        <div class="content">
            
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="Admin.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notifications</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="visa.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Visagan</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="admin_setting.php" class="dropdown-item">Settings</a>
                            <a href="home.html" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
      
<table border="1">
            <thead>
                <tr>
                    <th>Package_Id</th>
                    <th>Package_Name</th>
                    <th>Package Amount</th>
                    <th>Action</th>
           
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $con = $dbcon->getConnection();
                    $query = "SELECT * FROM packages";
                    $pstmt = $con->prepare($query);
                    $pstmt->execute();
                    $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
                  
                    foreach ($rs as $user) {
                        ?>
                        <tr>
                            <td><?php echo $user->Package_Id; ?></td>
                            <td><?php echo $user->Package_Name; ?></td>
                            <td><?php echo $user->Package_Amount; ?></td>
                            <td><a href="edit.php?id=<?php echo $user->id; ?>">Edit</a> | <a href="delete.php?id=<?php echo $user->id; ?>">Delete</a></td>
                           
                        </tr>
                        <?php
                      
                    }
                } catch (PDOException $exc) {
                    echo $exc->getMessage();
                }
                ?>


            </tbody>
        </table>
 
 <div class="modal fade" id="editPackageModal" tabindex="-1" role="dialog" aria-labelledby="editPackageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPackageModalLabel">Edit Package Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editPackageForm">
                        <div class="form-group">
                            <label for="packageName">Package Name</label>
                            <input type="text" class="form-control" id="packageName">
                        </div>
                        <div class="form-group">
                            <label for="packageID">Package ID</label>
                            <input type="text" class="form-control" id="packageID">
                        </div>
                         <div class="form-group">
                            <label for="packageName">Package Price</label>
                            <input type="text" class="form-control" id="packagePrice">
                        </div>
                        <div class="form-group">
                            <label for="packageDescription">Description</label>
                            <textarea class="form-control" id="packageDescription" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="savePackageChanges">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <script>
        $(document).ready(function () {
            $('#myTab a').on('click', function (e) {
                e.preventDefault();
                $(this).tab('show');
            });

            // Functionality for edit package button
            $('.btn-edit').on('click', function () {
                // Get the row data
                const packageName = $(this).data('package-name');
                const packageID = $(this).data('package-id');
                const packagePrice = $(this).data('package-price');
                const packageDescription = $(this).data('package-description');

                // Populate the edit package modal with row data
                $('#editPackageModal #packageName').val(packageName);
                $('#editPackageModal #packageID').val(packageID);
                $('#editPackageModal #packageName').val(packageName);
                $('#editPackageModal #packageDescription').val(packageDescription);
            });

            // Functionality for edit admin button
            $('.btn-edit-admin').on('click', function () {
                // Get the admin data
                const adminName = $('#admin tbody tr:eq(0) td:eq(1)').text();
                const adminEmail = $('#admin tbody tr:eq(1) td:eq(1)').text();
                const adminUsername = $('#admin tbody tr:eq(3) td:eq(1)').text();

                // Populate the edit admin modal with data
                $('#editAdminModal #adminName').val(adminName);
                $('#editAdminModal #adminEmail').val(adminEmail);
                $('#editAdminModal #adminUsername').val(adminUsername);
            });

            // Functionality for Save Changes button in Package Details
            $('#savePackageChanges').on('click', function () {
                // Get the edited data from the modal
                const packageName = $('#editPackageModal #packageName').val();
                const packageID = $('#editPackageModal #packageID').val();
                const packageDescription = $('#editPackageModal #packageDescription').val();

                // Update the corresponding table row data
                const activeTab = $('#myTabContent .tab-pane.active');
                const rowData = activeTab.find('tbody tr:first-child');
                rowData.find('td:eq(0)').text(packageName);
                rowData.find('td:eq(1)').text(packageID);
                rowData.find('td:eq(2)').text(packageDescription);

                // Close the modal
                $('#editPackageModal').modal('hide');
            });

            // Functionality for Save Changes button in Admin Settings
            $('#saveAdminChanges').on('click', function () {
                // Get the edited data from the modal
                const adminName = $('#editAdminModal #adminName').val();
                const adminEmail = $('#editAdminModal #adminEmail').val();
                const adminUsername = $('#editAdminModal #adminUsername').val();

                // Update the corresponding table row data
                const adminTable = $('#admin tbody');
                adminTable.find('tr:eq(0) td:eq(1)').text(adminName);
                adminTable.find('tr:eq(1) td:eq(1)').text(adminEmail);
                adminTable.find('tr:eq(3) td:eq(1)').text(adminUsername);

                // Close the modal
                $('#editAdminModal').modal('hide');
            });
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>