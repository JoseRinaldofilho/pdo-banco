<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/stilo.css">
    <title>Listagens de Jogos</title>
</head>
<body>
<?php
    require_once 'includes/banco.php';

?>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h1>Escolha Seu jogo</h1>
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">

<!--                    <thead>-->
<!--                    --><?php
//                        $busca = $banco->query("select * from jogos");
//                        if ($busca->rowCount()>0) {
//                            echo "<tr><td>nome</td><td>capa</td></tr>";
//                           while ($res=$busca->fetchObject()){
//
//                               echo "
//
//                                    <tr>
//                                        <td>$res->capa</td>
//                                        <td>$res->nome</td>
//                                    </tr>
//
//                               ";
//                           }
//                        }
//                    ?>
<!--                    <th>Foto</th>-->
<!--                    <th>Nome</th>-->
<!--                    <th>Adim</th>-->
<!--                    <th>Edit</th-->
<!--                    <th>Delete</th>-->
<!--                    </thead>-->
<!---->
<!--                    <tbody>-->



                    </tr>



                </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>

            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Mohsin">
                </div>
                <div class="form-group">

                    <input class="form-control " type="text" placeholder="Irshad">
                </div>
                <div class="form-group">
                    <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</body>
</html>