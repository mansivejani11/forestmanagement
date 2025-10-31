<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forest Management Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f8f5;
    display: flex;
    height: 100vh;
    overflow: hidden;
}

/* Dashboard Layout */
.dashboard-container {
    display: flex;
    width: 100%;
}

/* Sidebar Styles */
.sidebar {
    width: 260px;
    background-color: #004d00; /* Dark Green */
    color: white;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.sidebar h2 {
    font-size: 1.8rem;
    text-align: center;
    margin-bottom: 40px;
}

.sidebar nav ul {
    list-style-type: none;
    padding: 0;
}

.sidebar nav ul li {
    margin: 20px 0;
}

.sidebar nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2rem;
    display: block;
    padding: 10px;
    transition: background-color 0.3s ease;
}

.sidebar nav ul li a:hover {
    background-color: #006400;
    border-radius: 5px;
}

/* Main Content Area */
.main-content {
    flex: 1;
    padding: 40px;
    background-color: #e0f5e6;
    overflow-y: auto;
}

.main-header {
    text-align: center;
    background-color: #228b22; /* Vibrant Green */
    padding: 30px;
    color: white;
    margin-bottom: 30px;
    border-radius: 10px;
}

.main-header h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.main-header p {
    font-size: 1.2rem;
}

/* Section Styles */
.section {
    margin-bottom: 30px;
}

.section h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #006400;
}

/* Grid Layout for Overview Section */
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.card {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.card h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #006400;
}

.card p {
    font-size: 1.1rem;
}

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table thead th {
    background-color: #228b22;
    color: white;
    padding: 15px;
    text-align: left;
}

table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tbody td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

/* Right-Side Login Styles */
.login-section {
    width: 300px;
    background-color: #f9f9f9;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-container {
    text-align: center;
}

.login-avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
}

.login-container h3 {
    font-size: 1.8rem;
    color: #228b22;
    margin-bottom: 20px;
}

.login-container form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.login-container label {
    font-size: 1rem;
    margin-bottom: 5px;
}

.login-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.login-container button {
    width: 100%;
    padding: 10px;
    background-color: #228b22;
    color: white;
    font-size: 1.2rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.login-container button:hover {
    background-color: #32cd32;
}

    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar for Navigation -->
        <aside class="sidebar">
            <h2>Forest Management</h2>
            <nav>
                <ul>
                    <li><a href="#overview">Overview</a></li>
                    <li><a href="#conservation">Prim</a></li>
                    <li><a href="#sustainability">Sustainability</a></li>
                    <li><a href="#wildlife">Wildlife</a></li>
                    <li><a href="#analytics">Analytics</a></li>
                    <li><a href="#reports">Reports</a></li>
                    <li><a href="#settings">Settings</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="main-header">
                <h1>Forest Management Dashboard</h1>
                <p>Monitoring forest health, sustainability, and conservation efforts.</p>
            </header>

            <!-- Overview Section -->
            <section id="overview" class="section">
                <h2>Overview</h2>
                <div class="grid-container">
                    <div class="card">
                        <h3>Forest Cover</h3>
                        <p>75% forest cover</p>
                    </div>
                    <div class="card">
                        <h3>Air Quality</h3>
                        <p>Excellent</p>
                    </div>
                    <div class="card">
                        <h3>Biodiversity</h3>
                        <p>Thriving</p>
                    </div>
                    <div class="card">
                        <h3>Illegal Logging Incidents</h3>
                        <p>Down 20%</p>
                    </div>
                </div>
            </section>

            <!-- Table at the Bottom -->
            <section id="table-section" class="section">
                <h2>Forest Data Table</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Region</th>
                            <th>Forest Area (ha)</th>
                            <th>Protected Species</th>
                            <th>Air Quality</th>
                            <th>Last Survey Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Amazon</td>
                            <td>5,500,000</td>
                            <td>Jaguar, Harpy Eagle</td>
                            <td>Excellent</td>
                            <td>2024-09-15</td>
                        </tr>
                        <tr>
                            <td>Congo</td>
                            <td>3,680,000</td>
                            <td>Gorilla, Okapi</td>
                            <td>Good</td>
                            <td>2024-08-30</td>
                        </tr>
                        <tr>
                            <td>Taiga</td>
                            <td>8,000,000</td>
                            <td>Amur Leopard, Siberian Tiger</td>
                            <td>Moderate</td>
                            <td>2024-09-01</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>

        <!-- Right-Side Login Section -->
        <aside class="login-section">
            <div class="login-container">
                <img src="https://via.placeholder.com/150" alt="Person Avatar" class="login-avatar">
                <h3>Login</h3>
                <form action="#" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                </form>
            </div>
        </aside>
    </div>
</body>
</html>
