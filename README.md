lorem-php - by Loreto Gabawa Jr.
===============

https://github.com/loretog/lorem-php

a tool for beginners or students

How-to:

1. Download files
2. Extract in your root folder (e.g.: C:\xampp\htdocs\my-app)


Active nav-link
1. <?php echo basename($_SERVER['REQUEST_URI']) == '?page=dashboard' ? 'active' : ''; ?>

For Notif success
1. <?php if (!empty($msg)): ?>
        <div class="alert <?php echo $msg_class ?>" role="alert" id="alert">
            <?php echo $msg; ?>
        </div>
    <?php endif; ?>
