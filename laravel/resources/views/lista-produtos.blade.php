<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <H1>BEM VINDO AO SISTEMA LARAVEL</H1>
        <a href="/produtos/criar">Criar novo Produto</a>
       <table>
           <thead>
               <tr>
                   <th>#</th>
              
                   <th>Nome do Produto</th>
           
                   <th>Marca</th>
              
               
                   <th>Preço</th>
               </tr>
           </thead>
           <tbody>
                <?php

                    //var_dump($produtos);

                    foreach ($produtos as $produto) {
                       
                ?>
               <tr>
                    <td><?php echo $produto[0]; ?></td>
                    <td><?php echo $produto[1]; ?></td>
                    <td><?php echo $produto[2]; ?></td>
                    <td><?php echo $produto[3]; ?></td>

                    <?php
                    }
                    ?>
               </tr>
           </tbody>
           <tfoot>
               <td></td>
           </tfoot>
       </table>
    </body>
</html>
