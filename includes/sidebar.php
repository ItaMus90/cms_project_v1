<div class="col-md-4">


<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form method="post" action="search.php">
        <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
            <button name="submit" class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
    </form><!--search form-->
    <!-- /.input-group -->
</div>




<!-- Blog Categories Well -->
<div class="well">


    <?php 
        
        $query = "SELECT category_title FROM categories LIMIT 3";
        $query_select_category_title_sidebar = mysqli_query($connection, $query);



    
    ?>


    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">

                <?php 


                    while($row = mysqli_fetch_assoc($query_select_category_title_sidebar)){

                        $cat_title = $row["category_title"];

                        echo "<li> <a href='#'>" . $cat_title . "</a></li>";

                    }


                ?>

            </ul>
        </div>
        <!-- /.col-lg-12 -->

    </div>
    <!-- /.row -->
</div>




<!-- Side Widget Well -->
<?php include_once ("widget.php"); ?>


</div>