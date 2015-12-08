<?php require("includes/header.php"); ?>
  <body>

    <!----- Top Bar ------>
    <?php require("includes/topbar.php"); ?>
    <!----- Top Bar ------>


    <!----- Menu ------>
    <?php require("includes/menu-admin.php"); ?>
    <!----- Menu ------>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <div class="main-grids">
            <!-- container -->
            <div class="container">

              <div class="panel panel-primary">
                <div class="panel-heading">
                    <strong>Create New Content</strong>
                </div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">

                      <form class="form" role="form" action="#" method="POST">
                        <div class="form-group">
                          <label for="sel1">Category</label>
                          <select class="form-control" id="sel1">
                            <option>cat 1</option>
                            <option>cat 2</option>
                            <option>cat 3</option>
                            <option>cat 4</option>
                            <option>cat 5</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="sel1">Subcategory</label>
                          <select class="form-control" id="sel1">
                            <option>sub cat 1</option>
                            <option>sub cat 2</option>
                            <option>sub cat 3</option>
                            <option>sub cat 4</option>
                            <option>sub cat 5</option>
                          </select>
                        </div>

                        <div class="form-group">
                             <label>Image Cover</label>
                             <input type="file" class="form-control" name="images" value="" placeholder="Enter video title">
                        </div>

                        <div class="form-group">
                             <label>File Video</label>
                             <input type="file" class="form-control" name="video" value="" placeholder="Enter video title">
                        </div>

                        <div class="form-group">
                             <label>Title</label>
                             <input class="form-control" name="title" value="" placeholder="Enter video title">
                        </div>
                        <div class="form-group">
                            <label>Subtitle</label>
                            <textarea class="form-control" name="description" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="10"></textarea>
                        </div>


                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Cancle</button>
                      </form>

                    </div>
                  </div>
                </div>

              </div>

            </div>
            <!-- //container -->
        </div>


    	<!-- //footer -->
      <?php require("includes/footer.php"); ?>
			<!-- //footer -->
		</div>
		<div class="clearfix"> </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>
