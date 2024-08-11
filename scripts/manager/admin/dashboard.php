<?php require "includes/session.php" ?>
<?php require "../../../config/config.php" ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Admin</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Tableau de bord</a></li>
                    <li><a href="#">Bibliothécaires</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Editer Profil</a></li>
                    <li><a href="#">Se déconnecter</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                </div>
            </header>

            <!-- Dashboard Overview -->
            <section class="overview">
                <div class="card">
                    <h3>8,267</h3>
                    <p>New Users</p>
                </div>
                <div class="card">
                    <h3>200,521</h3>
                    <p>Total Orders</p>
                </div>
                <div class="card">
                    <h3>275,642</h3>
                    <p>Products Sold</p>
                </div>
                <div class="card">
                    <h3>$677,85</h3>
                    <p>This Month</p>
                </div>
            </section>

            <!-- User Table -->
            <section class="user-table">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>Software Engineer</td>
                            <td><span class="status active">Active</span></td>
                            <td>Admin</td>
                            <td><a href="#">Edit</a></td>
                        </tr>
                        <!-- More rows here -->
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>
