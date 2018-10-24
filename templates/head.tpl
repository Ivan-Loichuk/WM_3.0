<!DOCTYPE html>
<html lang="uk-ua">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <meta name="statvooVerification" content="5e1274be5b06e1111f0a74b8abf7ccb6" />

    <meta name="description" content="{$description}">
    <meta name="keywords" content="{$keywords}">

    <title>{$title}</title>


    <meta name="yandex-verification" content="077e7ac14e6bbba9" />

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic" rel="stylesheet" async>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {if !empty($smarty.get.p) && $smarty.get.p != ''}
        <!-- bootstrap gallery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    {/if}

    <link rel="stylesheet" href="{$config.templates_dir}/css/main.min.css">

    {*<link rel="stylesheet" href="{$config.templates_dir}/css/style.min.css">*}
    <link rel="shortcut icon" href="{$config.templates_dir}/img/shortcut_icon.png" type="image/x-icon">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{$config.templates_dir}/js/scripts.min.js"></script>
    <script src="{$config.templates_dir}/js/main.js"></script>

    {if !empty($smarty.get.p) && $smarty.get.p != ''}
        <script>
            $(document).ready(function () {
                baguetteBox.run('.tz-gallery');
            });
        </script>
    {/if}

    <!--<script src='https://www.google.com/recaptcha/api.js?hl=pl'></script>-->

    <script type="application/ld+json">
      {
          "@context": "http://schema.org",
          "@type": "Product",
          "description": "Корпусні шафи купе на замовлення у Рівному",
          "name": "Шафи купе",
          "image": "http://west-mebli.com.ua/img/titles/cabinets.jpg",
          "url": "http://west-mebli.com.ua/korpusni-mebli-na-zamowlenia/szafy-kupe",

          "review": [
            {
              "@type": "Review",
              "author": "Андрій Куришко",
              "datePublished": "2018-01-21"
            }
          ]
      }
    </script>
</head>