         <?php include "includes/header.php"; ?>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
         <div class="content-wrapper">
            <section class="content-header">
               <h1>
                  Dashboard
                  <small>Analytics Graph</small>
               </h1>
               <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                  <li class="active">Here</li>
               </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12" style="overflow-x: auto;">
                        <table id="example" class="display nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Unique ID</th>
                                    <th>Bar Contact Name</th>
                                    <th>Bar Contact Number</th>
                                    <th>Category</th>
                                    <th>Address</th>
                                    <th></th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Unique ID</th>
                                    <th>Bar Contact Name</th>
                                    <th>Bar Contact Number</th>
                                    <th>Category</th>
                                    <th>Address</th>
                                    <th></th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($response as $value) { ?>
                                    <tr>
                                        <td><?=@$value->id?></td>
                                        <td><?=@$value->name?></td>
                                        <td><?=@$value->entity_unique_id?></td>
                                        <td><?=@$value->bar_contact_name?></td>
                                        <td><?=@$value->bar_contact?></td>
                                        <td><?=@$value->category?></td>
                                        <td><?=@$value->address?></td>
                                        <td><button type="button" class="btn btn-primary"><i class="fa fa-info"></i>&nbsp;&nbsp;View</button></td>
                                        <td><button type="button" class="btn btn-success"><i class="fa fa-toggle-on"></i>&nbsp;&nbsp;Active</button></td>
                                        <td><button type="button" class="btn btn-danger"><i class="fa fa-toggle-off"></i>&nbsp;&nbsp;Disable</button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
         </div>
         <?php include "includes/footer.php"; ?>

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable( {
                    dom: 'Bfrtip',
                    lengthMenu: [
                        [ 10, 25, 50, -1 ],
                        [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                    ],
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'
                    ]
                } );
            } );
        </script>