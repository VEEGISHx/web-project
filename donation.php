<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Campaign Project</title>

    <!-- 3rd party libraries -->
    <!-- Loading Bootstrap 4 dependencies -->
    <script src="assets/js/popper/popper.min.js"></script>
    <script src="assets/js/jquery/jquery.min.js"></script>

    <!-- Loading Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- ScrollRevealJS & Normalize CSS -->
    <script src="assets/js/scrollreveal/scrollreveal.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="assets/js/sweetalert/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/js/sweetalert/sweetalert.min.css">

    <!-- TinyMCE Editor -->
    <script src="assets/plugins/tinymce/tinymce.min.js"></script>

    <!-- TypeIt -->
    <script src="assets/js/typeit/typeit.min.js"></script>

    <!-- Core CSS and scripts -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js"></script>

    <!-- Google Fonts -->
    <link href="assets/fonts/fonts.css" rel="stylesheet">

    <!-- Font Awesome icons-->
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php include 'includes/header.php'; ?>

    <div class="container-fluid">
        <div class="campaign-wrapper">
            <div class="col-lg-7">
                <section class="campaign-body">
                    <div class="campaign-scrollable-bar"></div>
                    <div class="campaign-image">
                        <img src="assets/images/raw/charity.jpg" class="img-fluid img-campaign" alt="campaign image">
                    </div>

                    <div class="campaign-main-body">
                        <h4 class="campaign-overview">Campaign Overview</h4>
                        <hr>
                        <!-- start slipsum code -->

                        <h2>Nullam commodo neque</h2>
                        Fusce a metus eu diam varius congue nec nec sapien. Vestibulum orci tortor, sollicitudin ac euismod non, placerat ac augue. Nunc convallis accumsan justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec
                        malesuada vehicula lectus, viverra sodales ipsum gravida nec. Integer gravida nisi ut magna mollis molestie. Nullam pharetra accumsan sagittis. Proin tristique rhoncus orci, eget vulputate nisi sollicitudin et. Quisque lacus augue,
                        mollis non mollis et, ullamcorper in purus. Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque mauris rhoncus. Duis vitae neque dolor. Duis sed purus at eros bibendum cursus nec a nulla. Donec turpis
                        quam, ultricies id pretium sit amet, gravida eget leo.

                        <h2>Proin suscipit luctus</h2>
                        Etiam aliquam sem ac velit feugiat elementum. Nunc eu elit velit, nec vestibulum nibh. Curabitur ultrices, diam non ullamcorper blandit, nunc lacus ornare nisi, egestas rutrum magna est id nunc. Pellentesque imperdiet malesuada quam, et rhoncus eros auctor
                        eu. Nullam vehicula metus ac lacus rutrum nec fermentum urna congue. Vestibulum et risus at mi ultricies sagittis quis nec ligula. Suspendisse dignissim dignissim luctus. Duis ac dictum nibh. Etiam id massa magna. Morbi molestie
                        posuere posuere.

                        <h2>Donec malesuada vehicula</h2>
                        Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing. Suspendisse in urna ligula, a volutpat mauris. Sed enim mi, bibendum eu pulvinar vel, sodales vitae dui. Pellentesque sed sapien lorem, at lacinia urna. In hac
                        habitasse platea dictumst. Vivamus vel justo in leo laoreet ullamcorper non vitae lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ullamcorper rutrum.

                        <h2>Nullam commodo neque</h2>
                        Nullam eros mi, mollis in sollicitudin non, tincidunt sed enim. Sed et felis metus, rhoncus ornare nibh. Ut at magna leo. Suspendisse egestas est ac dolor imperdiet pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor, erat
                        sit amet venenatis luctus, augue libero ultrices quam, ut congue nisi risus eu purus. Cras semper consectetur elementum. Nulla vel aliquet libero. Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.

                        <h2>Integer elementum massa</h2>
                        Proin ut quam eros. Donec sed lobortis diam. Nulla nec odio lacus. Quisque porttitor egestas dolor in placerat. Nunc vehicula dapibus ipsum. Duis venenatis risus non nunc fermentum dapibus. Morbi lorem ante, malesuada in mollis nec, auctor nec massa.
                        Aenean tempus dui eget felis blandit at fringilla urna ultrices. Suspendisse feugiat, ante et viverra lacinia, lectus sem lobortis dui, ultricies consectetur leo mauris at tortor. Nunc et tortor sit amet orci consequat semper.
                        Nulla non fringilla diam.

                        <!-- end slipsum code -->
                    </div>
                </section>
            </div>

            <aside class="col-lg-5 campaign-actions" id="action-sidebar">
                <div class="campaign-goal">
                    <h3 class="campaign-title">Raise awareness about domestic violence.</h3>
                    <p class="quick-message">Help make change happen<span class="red">.</span></p>
                    <p class="campaign-donation-message">You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. </p>

                    <div class="campaign-organiser-wrapper">
                        <div class="campaign-organiser-container">
                            <img src="assets/images/raw/lbleu.png" class="organisation-avatar-sm">
                            <h5 class="organisation-card-name">Lagon Bleu</h5>
                            <p class="verified"><span class="fa fa-check-circle-o" aria-hidden="true"></span> Verified Organisation</p>
                            <button type="button" class="btn btn-primary view-profile">View Profile</button>
                        </div>
                    </div>

                    <div class="campaign-progress-wrapper">
                        <span style="font-family: 'Open-sans',sans-serif;"><strong>Rs18,750 MUR raised</strong> by 120 backers</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                        <p style="font-family: 'Nunito',sans-serif;">25% of Rs75,000 goal achieved</p>
                    </div>

                    <button type="button" class="donate-button">Donate</button>
                </div>

            </aside>
        </div>
    </div>

</body>

</html>