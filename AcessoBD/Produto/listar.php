<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Produtos</title>
</head>
<body>
<section>

<style>
        body {
            font-family: Century Gothic, sans-serif;
            margin: 0;
            padding: 0;
        }

        #container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        #cabecalho {
            background-color: #888;
            color: #fff;
            padding: 10px;
        }

        #tabela {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }

        #tabela th,
        #tabela td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tabela th {
            background-color: #f1f1f1;
        }

        #botaomenu {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="cabecalho">
            <h1>Listando Produtos</h1>
        </div>

        <table id="tabela">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Estoque</th>
            </tr>

            <?php
            include_once 'Produto.php';

            $p = new produtos();
            $pro_bd=$p->listar();
            ?>
           
           <?php
            foreach ($pro_bd as $pro_mostrar) {
                ?>
                <tr>
                    <td><?php echo $pro_mostrar[0]; ?></td>
                    <td><?php echo $pro_mostrar[1]; ?></td>
                    <td><?php echo $pro_mostrar[2]; ?></td>
                </tr>
                <?php
            }
        
            ?>
        </table>

        <a href="menu2.html" id="botaomenu">Voltar ao Menu</a>
    </div>
</section>
</body>
</html>
