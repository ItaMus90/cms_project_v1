<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                    <?php 
                    
                        $query = "SELECT category_title FROM categories";
                        $query_select_category_title = mysqli_query($connection, $query);


                        while($row = mysqli_fetch_assoc($query_select_category_title)){

                            $cat_title = $row["category_title"];

                            echo "<li> <a href='#'>" . strtoupper($cat_title) . "</a></li>";

                        }
                    
                    ?>

                    <li>
                        <a href="admin">ADMIN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>