<!doctype html>
<title>Spa</title>
<link rel="stylesheet" href="css/style.css">


<body>

    <div class="header">
       <?php loadView('partials.header'); ?>
    </div>
    <div class=" container">
        <div class="sidebar">
          <?php loadView('partials.sidebar'); ?>
        </div>
        <div class="content">
            <?php loadView($page); ?>
        </div>
    </div>
    <div class="footer">
        <?php loadView('partials.footer'); ?>
    </div>
</body>