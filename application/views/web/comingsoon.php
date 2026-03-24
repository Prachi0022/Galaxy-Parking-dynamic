<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Under Development | Coming Soon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main CSS, adjust the path as needed -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fafbfc;
            color: #151515;
            margin: 0;
        }
        .coming-soon-container {
            background: #fff;
            padding: 48px 32px 40px 32px;
            border-radius: 16px;
            box-shadow: 0 4px 32px rgba(0,0,0,0.06);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .coming-soon-container h1 {
            color: #f94d00;
            font-size: 44px;
            font-weight: bold;
            margin-bottom: 16px;
        }
        .coming-soon-container p {
            font-size: 18px;
            color: #555;
            margin-bottom: 36px;
        }
        .maintenance-icon {
            font-size: 56px;
            margin-bottom: 12px;
            color: #f94d00;
        }
        @media (max-width: 575px) {
            .coming-soon-container {
                padding: 24px 8px;
            }
            .coming-soon-container h1 {
                font-size: 30px;
            }
        }
    </style>
    <!-- Optionally add a Google Font or Icon (Font Awesome) here if available in project -->
</head>
<body>
    <div class="coming-soon-container">
        <div class="maintenance-icon">
            &#9881; <!-- Unicode gear/development icon -->
        </div>
        <h1>Under Development</h1>
        <p>
            Our website is currently under development.<br>
            We are working hard to launch soon.<br>
            Please visit us again!
        </p>
        <a href="<?php echo base_url(); ?>" class="theme-btn" style="display:inline-block;margin-bottom:24px;padding:10px 28px;background:#f94d00;color:#fff;text-decoration:none;border-radius:6px;font-weight:bold;transition:background 0.2s;">Back to Home</a>
        <div style="color:#aaa;font-size:13px;">&copy; <?php echo date('Y'); ?> Galaxy Parking System Pvt. Ltd. All rights reserved.</div>
    </div>
</body>
</html>