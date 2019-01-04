<?php include_once("includes/header.php"); ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once("includes/navigation.php"); ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcmoe To Admin
                            <small>Author</small>
                        </h1>



                        <div class="col-xs-6">
                        
                            <form action="">

                                <div class="form-group">
                                <label for="cat-title">Add Category</label>
                                    <input type="text" name="cat_title" class="form-contorl">
                                </div><!--form-group-->
                                
                                <div class="form-group">
                                    <input type="submit" value="Add Category" name="submit" class="btn btn-info">
                                </div><!--form-group-->

                            </form>
                        
                        </div><!--col-xs-6-->

                        <div class="col-xs-6">
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Soccer Category</td>
                                        <td>Baskball Category</td>
                                    </tr>
                                </tbody>
                            </table>
                        
                        
                        </div><!--col-xs-6-->
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->




        </div>
        <!-- /#page-wrapper -->


    </div>

    
<!-- /#wrapper -->



    <?php include_once("includes/footer.php"); ?>