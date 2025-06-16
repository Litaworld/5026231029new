<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detail PRT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            background: #145589;
            color: white;
            display: flex;
            flex-direction: column;
            position: fixed;
            left: -250px;
            padding: 20px;
            transition: all 0.3s;
            z-index: 1000;
        }
        .sidebar.active {
            left: 0;
        }
        .admin-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .admin-profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
        .nav-link {
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 5px;
            transition: all 0.2s;
        }
        .nav-link:hover, .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            text-decoration: none;
        }
        .nav-link i {
            width: 20px;
            text-align: center;
            margin-right: 10px;
        }
        .logout-btn {
            background: transparent;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            text-align: left;
            margin-top: auto;
            margin-bottom: 20px;
            width: 100%;
            transition: all 0.2s;
        }
        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        .content {
            padding: 30px;
            transition: margin-left 0.3s;
            position: relative;
            width: 100%;
        }
        .content.active {
            margin-left: 250px;
            width: calc(100% - 250px);
        }
        .profile-pic img {
            width: auto;
            object-fit: cover;
            height: 300px;
        }
        .small-img img {
            width: auto;
            max-width: 100%;
            height: auto;
            max-height: 80px;
            object-fit: cover;
        }
        .sidebar-toggle {
            background: none;
            border: none;
            color: #145589;
            padding: 0;
            margin-right: 15px;
            font-size: 1.2rem;
        }
        .page-header {
            display: flex dark;
            align-items: center;
            margin-bottom: 20px;
        }
        .btn-edit {
    width: 100%;       
    max-width: 300px;  
    padding: 12px;     
    font-size: 16px;   
    font-weight: bold; 
    border-radius: 5px; 
    text-align: center; 
}
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <div class="admin-profile">
                    <img src="admin.jpg" alt="Admin Profile Picture">
                    <div>
                        <strong>Admin</strong><br>
                        <small>admin@gmail.com</small>
                    </div>
                </div>
                <nav class="nav flex-column">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class="fas fa-clipboard-list"></i> Helperlog
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-search"></i> Helperfind
                    </a>
                </nav>
            </div>
            <button class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> Log Out
            </button>
        </div>
        
        <!-- Content -->
        <div class="content">
            <div class="page-header">
                <button class="sidebar-toggle" onclick="toggleSidebar()" aria-label="Toggle sidebar">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <h4 class="mb-0">Detail PRT</h4>
            </div>
            
            <div class="row">
                <!-- Profile Picture -->
                <div class="col-md-4 text-center profile-pic">
                    <img src="profile.png" alt="Nagisa Natsumi Profile Picture">
                    <div class="row mt-3">
                        <div class="col-4 small-img">
                            <img src="side.png" alt="Nagisa Natsumi Side View">
                        </div>
                        <div class="col-4 small-img">
                            <img src="straight.png" alt="Nagisa Natsumi Front View">
                        </div>
                        <div class="col-4 small-img">
                            <img src="back.png" alt="Nagisa Natsumi Back View">
                        </div>
                    </div>
                </div>
                
                <!-- Profile Details -->
                <div class="col-md-8">
                    <h2 class="mb-1"><strong>Nagisa Natsumi</strong></h2>
                    <p class="text-muted mb-4">Perawat Lansia</p>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <tbody>
                                <tr>
                                    <td><strong>4</strong><p class="mb-0">Tahun Pengalaman</p></td>
                                    <td><i class="fas fa-star text-warning"></i> <strong>4.6</strong><p class="mb-0">Rating</p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  
                    <!-- Skills Table -->
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr class="bg-light text-left">
                                    <th colspan="2">Biodata</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Keahlian 1:<br>
                                        Keahlian 2:<br>
                                        Keahlian 3:<br>
                                        Keahlian 4:
                                    </td>
                                    <td>
                                        Memasak<br>
                                        Mencuci Baju<br>
                                        Menyetir<br>
                                        -
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary btn-edit mt-3">Edit Data</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.content').classList.toggle('active');
            
            const arrowIcon = document.querySelector('.sidebar-toggle i');
            if (document.querySelector('.sidebar').classList.contains('active')) {
                arrowIcon.classList.remove('fa-arrow-left');
                arrowIcon.classList.add('fa-arrow-right');
            } else {
                arrowIcon.classList.remove('fa-arrow-right');
                arrowIcon.classList.add('fa-arrow-left');
            }
        }
        
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const toggleBtn = document.querySelector('.sidebar-toggle');
            
            if (sidebar.classList.contains('active') && 
                !sidebar.contains(event.target) && 
                event.target !== toggleBtn && 
                !toggleBtn.contains(event.target)) {
                toggleSidebar();
            }
        });
    </script>
</body></html>