<!doctype html>
<html lang="en">

<head>

    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo $head['html'] ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/public/'); ?>css/body.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/public/'); ?>css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('asset/public/'); ?>css/slick-theme.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title><?php echo $company['name'] ?></title>
</head>

<body>
    <div class="main">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 pt-3">
                <img src="uploads/logo.png" class="rounded mx-auto d-block" style="max-width: 15%;">
            </div>
            <?php foreach ($ads as $adsKey => $adsValue) { ?>
                <div class="col-sm-12 pt-3">
                    <img src="uploads/<?php echo $adsValue['img'] ?>" class="rounded mx-auto d-block w-75">
                </div>
            <?php } ?>
            <div class="col-sm-12 mt-2">
                <div class="containers">
                    <ul class="list-streaming">
                        <?php foreach ($group as $groupKey => $groupValue) { ?>
                            <div>
                                <li style="width:100%;display:inline-block">
                                    <div class="content-panel" group-id="<?php echo $groupValue['pkey'] ?>" style="background-image:url(<?php echo base_url('uploads/') . $groupValue['img'] ?>)"></div>
                                </li>
                            </div>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 py-1"><a href="<?php echo $content['linklogin'] ?>" class="btn btn-block btn-warning text-white font-weight-bold ">Masuk</a></div>
            <div class="col-sm-6 py-1"><a href="<?php echo $content['linkregis'] ?>" class="btn btn-block text-white font-weight-bold" style="background-color: red;">Daftar</a></div>
        </div>
        <div class="container mt-3 border border-secondary shadow-lg mb-5">
            <div class="row justify-content-sm-center" id="game">
                <?php foreach ($game as $gameKey => $gameValue) { ?>
                    <div class="col-sm-3 py-3">
                        <div class="card">
                            <a href="<?php echo $gameValue['link'] ?>"><img class="card-img-top" src="uploads/<?php echo $gameValue['img'] ?>"></a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $gameValue['name'] ?></h5>
                                <div class="card-text progress bg-dark">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated text-light font-weight-bold <?php echo $gameValue['color'] ?>" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $gameValue['percentage'] ?>%"> <?php echo $gameValue['percentage'] ?>%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="container mb-3 shadow-lg border border-warning">
            <?php echo $content['content'] ?>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?php echo base_url('asset/public/'); ?>js/slick.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $('.list-streaming').slick({
            dots: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 3,
            variableWidth: true,
            centerMode: false,
            nextArrow: '<div class="slick-arrow next-arrow"><i class="fa fa-chevron-right"></i></div>',
            prevArrow: '<div class="slick-arrow prev-arrow"><i class="fa fa-chevron-left"></i></div>',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    </script>
    <script>
        $('.content-panel').click(function() {
            $('#game').html('\
            <div class="col-sm-12 text-center">\
            <img src="uploads/Rolling-0.6s-231px.svg" class="text-center">\
            </div>');
            var grubId = $(this).attr('group-id');
            $.ajax({
                    url: 'live/ajax',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        grubid: grubId
                    },
                })
                .done(function(a) {
                    console.log(a);
                    var data = '';
                    $.each(a, function(i, value) {
                        data += '<div class="col-sm-3 py-3">';
                        data += '<div class="card">';
                        data += '<a href="' + value.link + '"><img class="card-img-top" src="uploads/' + value.img + '"></a>';
                        data += '<div class="card-body">';
                        data += '<h5 class="card-title text-center">' + value.name + '</h5>';
                        data += '<div class="card-text progress bg-dark">';
                        data += '<div class="progress-bar progress-bar-striped progress-bar-animated text-light font-weight-bold ' + value.color + '" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: ' + value.percentage + '%"> ' + value.percentage + '%</div>';
                        data += '</div>';
                        data += '</div>';
                        data += '</div>';
                        data += '</div>';
                    });
                    $('#game').html(data);

                })
                .fail(function() {
                    console.log('error');
                })



        })
    </script>
    <script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
    <div class="row" style="position: fixed;bottom: 50px;margin-left: 10%;margin-right: 10%;display: none;" id="sticky-ad">
        <button class="text-light close-ads" aria-label="Close this ad" style="position: absolute; width: 28px; height: 28px; top: -28px; right: 0; border: none; border-radius: 12px 0 0 0;background: none;">X</button>
        <div class="col-sm-6 py-1">
            <a href="#" target="_blank"><img src="<?php echo base_url('uploads/1648544918.png') ?>" class="" alt="Ads" style="width: 100%;border-radius: 10px;border-style: solid;border-color:yellow"></a>
        </div>
    </div>
</body>

</html>