<?php
$storeName = $storeName ?? "Joze Sports Store";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $storeName ?></title>
    <style>
        /* Body and background */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('trackfield.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            margin: 0;
            padding: 20px;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(12,19,42,0.7);
            z-index: -1;
        }

        /* Header title */
        h1 {
            text-align: center;
            font-size: 4rem;
            font-weight: 900;
            color: #16595fff;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 
                0 0 10px #00eaff,
                0 0 20px #00eaff,
                0 0 30px #00eaff,
                0 0 40px #00eaff,
                0 0 50px #00eaff;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            font-size: 1.4rem;
            color: #b0e0ff;
            margin-bottom: 40px;
            text-shadow: 1px 1px 2px #000;
        }

        /* Navbar (consistent across all pages) */
        .navbar {
            text-align: center;
            margin-bottom: 30px;
        }

        .navbar a {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            padding: 8px 15px;
            margin: 0 5px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .navbar a:hover {
            background-color: #1e90ff;
            color: #fff;
        }

        /* Table styling */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: rgba(255,255,255,0.05);
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid rgba(0,234,255,0.3);
            text-align: center;
            transition: background 0.3s, color 0.3s;
        }

        th {
            background: #00eaff;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:hover td {
            background: rgba(0,234,255,0.25);
            color: #fff;
            font-weight: bold;
        }

        .section-label {
            text-align: center;
            font-size: 28px;
            margin-top: 50px;
            margin-bottom: 15px;
            color: #00eaff;
            font-weight: bold;
            letter-spacing: 1px;
            text-shadow: 1px 1px 5px #000;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="stock_monitor.php">Stock Levels</a>
    </div>

    <h1><?= $storeName ?></h1>
    <p class="subtitle">Premium Smart & GPS Sports Products</p>

