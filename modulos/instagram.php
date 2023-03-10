<section id="noticias" class="mt-5">
    <a class="conteudo w-80 row m-auto align-items-center" href="https://www.instagram.com/farmaciasassociadaspiratini/" target="_blank">
        <div class="logo p-5 rounded-circle" style="background-image: url('<?= SITE ?>imagens/logo-insta.jpg');">

        </div>
        <h6 class="subtittle px-3">
            farmaciasassociadaspiratini
        </h6>
    </a>
    <style>
        #noticias .conteudo {
            margin-top: 6% !important;
            margin-bottom: 2% !important;
            color: #000;
            text-decoration: none;
        }

        #noticias .conteudo:hover {
            cursor: pointer;
        }

        #noticias .logo {
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        #noticias .subtittle {
            font-size: 20px;
            font-weight: 700;
            color: #484848;
            font-family: "Roboto", sans-serif;
        }

        .instagram_feed_mobi {
            width: 100%;
            margin-bottom: 25px;
        }

        .instagram_feed_mobi .item-video {
            width: 100%;
            /*height: 250px;*/
        }

        video {
            width: 100%;
            height: 270px;
            background-color: #000;
        }

        .imagem_insta {
            width: 100%;
            height: 270px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
        }

        .play {
            width: 100%;
            height: 270px;
            position: absolute;
            text-align: center;
            display: flex;
            align-items: center;
        }

        .icone-play {
            margin: auto;
            font-size: 50px;
            color: #fff;
        }

        #moreBtn {
            background-color: rgb(238,140,28);
            zoom: 1;
            padding: 7px 14px;
            margin: 5px auto 0;
            border: none;
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            line-height: 1.5;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            transition: .1s ease-in;
            outline: none !important;
            cursor: pointer;
        }

        .siga {
            background: rgb(0, 180, 172);
            color: #fff;
            zoom: 1;
            padding: 7px 14px;
            margin: 5px auto 0;
            border: none;
            text-decoration: none;
            font-size: 13px;
            line-height: 1.5;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            transition: .1s ease-in;
        }

        @media screen and (max-width: 900px) {
            .imagem_insta {
                height: 400px;
            }
        }
    </style>


    <div class="instagram_feed_mobi mt-4 w-80 m-auto">
        <div id="feed" class="row m-0">

        </div>
        <div class="text-center">
            <button id="moreBtn">Veja Mais</button>
            <a href="https://www.instagram.com/farmaciasassociadaspiratini/" target="_blank"><button class="siga"> <i class="fa-brands fa-instagram"></i> Siga-nos</button></a>
        </div>
    </div>

</section>



<script type="text/javascript">
    $('.owl-carousel-insta').owlCarousel({
        margin: 5,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false,
                loop: false
            },
            1000: {
                items: 4,
                nav: false,
                loop: false
            }
        }
    })
</script>
<script src="<?= SITE ?>js/instagram.js"></script>