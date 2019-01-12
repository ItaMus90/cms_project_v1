<?php include_once("includes/admin_header.php"); ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once("includes/admin_navigation.php"); ?>



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



                            <?php 
                            
                                if (isset($_POST["submit_category"])) {

                                    $cat_title = $_POST["cat_title"];

                                    if ($cat_title === "" || empty($cat_title)) {

                                        echo "This field should not be empty";

                                    } else {

                                        $idcategory = md5( $cat_title . "2683b0748eb7782c3065038a53d58182" . time());

                                        $query = "INSERT INTO cms_v1.categories (idcategory, category_title) ";
                                        $query .= "VALUES ('". $idcategory . "' , '" .$cat_title . "') ";


                                        $create_category_query = mysqli_query($connection, $query);

                                        if (!$create_category_query) {

                                            die("QUERY FAILED " .mysqli_error($connection));

                                        }
                                    }

                                }
                            
                            
                            ?>

                        
                            <form action="" method="post">

                                <div class="form-group">
                                <label for="cat-title">Add Category</label>
                                    <input type="text" name="cat_title" class="form-contorl">
                                </div><!--form-group-->
                                
                                <div class="form-group">
                                    <input type="submit" value="Add Category" name="submit_category" class="btn btn-info">
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

                                    <?php 
                                        //Find all categories
                                        $query = "SELECT * FROM categories";
                                        $query_select_all = mysqli_query($connection, $query);
                                    
                                        while($row = mysqli_fetch_assoc($query_select_all)){

                                            $cate_id = $row["idcategory"];
                                            $cate_title = $row["category_title"];


                                            echo "<tr>";
                                            echo "<td>" .$cate_id ."</td>";
                                            echo "<td>" .$cate_title ."</td>";
                                            echo "<td><a href=categories.php?delete=" .$cate_id . ">Delete</a></td>";
                                            echo "</tr>";

                                        }
                                    
                                    
                                    ?>


                                    <?php 

                                        //Delete Query
                                    
                                        if (isset($_GET["delete"])) {

                                            $id_category = $_GET["delete"];

                                            $query = "DELETE FROM cms_v1.categories WHERE idcategory = '". $id_category ."' ";
                                            $query_delete = mysqli_query($connection, $query);

                                            header("Location: categories.php");
                                        }
                                    
                                    
                                    ?>

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



    <?php include_once("includes/admin_footer.php"); ?>