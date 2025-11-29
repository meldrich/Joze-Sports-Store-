<!DOCTYPE html>
<html>
<head>
    <title><?php echo $storeName ?? "Joze Sports Store"; ?></title>
    <style>
        /* Body with background image */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('trackfield.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            padding: 20px;
            margin: 0;
            position: relative;
        }

        /* Overlay for readability */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(12, 19, 42, 0.7);
            z-index: -1;
        }

        /* Header Title with glow effect */
        h1 {
            text-align: center;
            font-size: 4rem;
            font-weight: 900;
            color: #16595fff;
            margin-bottom: 5px;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 
                0 0 10px #00eaff,
                0 0 20px #00eaff,
                0 0 30px #00eaff,
                0 0 40px #00eaff,
                0 0 50px #00eaff;
        }

        p.subtitle {
            text-align: center;
            font-size: 1.4rem;
            color: #b0e0ff;
            margin-bottom: 40px;
            text-shadow: 1px 1px 2px #000;
        }

        /* Section Labels */
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

        /* Table Styling */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: rgba(255,255,255,0.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid rgba(0, 234, 255, 0.3);
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
            background: rgba(0, 234, 255, 0.25);
            color: #fff;
            font-weight: bold;
        }

        /* Footer Styling */
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 15px;
            border-top: 1px solid rgba(0,234,255,0.3);
            color: #b0e0ff;
            font-size: 0.9rem;
        }

    </style>
</head>
<body>
<h1><?php echo $storeName ?? "Joze Sports Store"; ?></h1>
<p class="subtitle">Premium Smart & GPS Sports Products</p>
