<!DOCTYPE html>
<html>
<head>
    <title>Nick Stubbs Training | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Fenix|Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/myStyles.css" rel="stylesheet" >
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myScript.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->

</head>
<body id="Home">
    <section class="container">
        <div class="content row">
            <?php include "_/components/php/header.php"; ?>
            <?php include "_/components/php/snippet-carousel.php"; ?>
            <section class="main col col-lg-8">
                <?php include "_/components/php/article-intro.php"; ?>
                <?php include "_/components/php/article-background.php"; ?>

            </section><!--main content-->
            <section class="sidebar col col-lg-4">
                <?php include "_/components/php/aside-upcomingCourses.php"; ?>
                <?php include "_/components/php/aside-courseEnquiries.php"; ?>
                <?php include "_/components/php/aside-courseAccordion.php"; ?>
            </section><!--sidebar-->
        </div><!--content-->
            <?php include "_/components/php/footer.php"; ?>
    </section><!--container-->



</body>
</html>