
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex">

        <title>Bootstrap styling for Datatable - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <style type="text/css">
            .pagination>li {
                display: inline;
                padding:0px !important;
                margin:0px !important;
                border:none !important;
            }
            .modal-backdrop {
                z-index: -1 !important;
            }
            /*
            Fix to show in full screen demo
            */
            iframe
            {
                height:700px !important;
            }

            .btn {
                display: inline-block;
                padding: 6px 12px !important;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
            }

            .btn-primary {
                color: #fff !important;
                background: #428bca !important;
                border-color: #357ebd !important;
                box-shadow:none !important;
            }
            .btn-danger {
                color: #fff !important;
                background: #d9534f !important;
                border-color: #d9534f !important;
                box-shadow:none !important;
            }
        </style>
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">

            window.alert = function () {};
            var defaultCSS = document.getElementById('bootstrap-css');
            function changeCSS(css) {
                if (css)
                    $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
                else
                    $('head > link').filter(':first').replaceWith(defaultCSS);
            }
            $(document).ready(function () {
                var iframe_height = parseInt($('html').height());
                window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
            });

        </script>
    </head>
    <body>
        <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

    <body>
        <div class="container">
            <div class="row">
                <h2 class="text-center">Major Table</h2>
            </div>

            <div class="row">

                <div class="col-md-12">


                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th><center>รหัสสาขาวิชา</center></th>
                        <th><center>ชื่อสาขาวิชา</center></th>

                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                        </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th><center>รหัสสาขาวิชา</center></th>
                        <th><center>ชื่อสาขาวิชา</center></th>


                        <th><centrer>Edit</centrer></th>
                        <th><center>Delete</center></th>
                        </tr>
                        </tfoot>

                        <tbody>
                            <!-- เริ่มการทำloop เพื่อแสดงชื่อคณะ -->
                            <?php foreach ($rs->result() as $value) : ?>
                                <tr>
                                    <td><center><?php echo $value->major_id; ?> </center></td>
                            <td><?php echo $value->major_name; ?> </td>

                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" id="fac_id" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>

                        <?php endforeach; ?>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control " type="text" id="fac_id"  name="fac_id" value=" 
                                   <?php echo $value->major_id;?>">
                        </div>
                        <div class="form-group">

                            <input class="form-control " type="text" name="fac_name" value=" 
                                   <?php echo $value->major_name;?>">
                        </div>
                  
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
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
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                    </div>
                </div>
                <!-- /.modal-content --> 
            </div>
            <!-- /.modal-dialog --> 
        </div>
    </body>
    <script type="text/javascript">
            /*  ส่วนที่ใช้ในการแสดงค้นหาทางด้านบน */
             $(document).ready(function () {
             $('#datatable').dataTable();
             
             $("[data-toggle=tooltip]").tooltip();
             
             });
             
    </script>
</body>
</html>
