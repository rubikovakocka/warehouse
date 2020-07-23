<!doctype html>
<html>
<head>
    <title>Magacinko</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
    <style>



        .displayItems {
            display: flex;
            padding: 5px;
        }

        .showContent, .displayItems *{
            padding: 5px 10px;
            font-size: 1.4em;
        }
        .navbar {
            background-color: #dae0f2;
        }

        .name {width: 250px;}
        .description {width: calc(100% - 450px)}k
        .stock, .price {width: 80px;}
        .address, .city, .phone {width: 460px;}
        .category {width: 300px;}
        .arrivalDate, .arrivalStock, .expireDate {width: 14%; padding-right: 10px;}
        .arrivalStock {text-align: center;}
        .expireDate {font-weight: bold; text-decoration: red underline}
        .product, .supplier, .employee, .warehouse {width: 16.5%;}

        .search{display:flex; justify-content: center; align-items: center;}

        .flex,
        .row {
            display: flex;
        }

        .row {
            margin-left: -10px;
            margin-right: -10px;
        }

        .col {
            flex: 1;
            padding: 10px;
        }

        .box {
            background: #e3e3e3;
            height: 50px;
            display: flex;
            justify-content: left;
            align-items: center;

        }
        
        .numInput{width: 200px; margin-right: 25px;}
         h1 {margin: 0; padding: 15px; font-weight: bold; font-size: 22px;}

        .pagination {width: 500px; position: relative; left: 20%; margin-top: 15px; margin-bottom: 20px;}
        .pagination > li {font-size: 1.5em; font-weight: bold;}

        #arrivalNavbar {position: absolute; right: 50px; width: 120px; height: 52px; font-size: 1.4em; font-weight: bold;}
        .arrival{ margin: 20px; font-weight: bold; color
            : #275eb7; text-shadow: 3px 3px 3px white; font-size: 1.1em}
        .inlineInfo {display: flex; margin: 10px;}
        .inlineInfo > label > span {
            margin: 10px;
            display: block;
            font-size: 1.4em;
        }

        .inlineInfo > label {width: 33%;}

        .dropdowns {width: 100%; display: flex; justify-content: center;}
        .dropdowns .label {margin-right: 15px;}
        .numInputRow {width: 100%; display: flex;}
    </style>
</head>
<body>
<div class="container">
    @include('navbar')
</div>
<div class="container">
    @include('search')
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>
