<?php require("includes/header.php"); ?>
  <body>

    <!----- Top Bar ------>
    <?php require("includes/topbar.php"); ?>
    <!----- Top Bar ------>


    <!----- Menu ------>
    <?php require("includes/menu.php"); ?>
    <!----- Menu ------>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


        <!----- Content ------>

        <div class="show-top-grids">
          <div class="col-sm-8 single-left">
            <div class="song" style="width:100%">
              <div class="song-info">
                <h3>Employee Engagement</h3>
              </div>
              <div class="video-grid">
                <iframe src="https://www.youtube.com/embed/mg0RP9UcvYc" allowfullscreen></iframe>
              </div>
            </div>

            <div class="clearfix"> </div>
            <div class="published">
              <script src="jquery.min.js"></script>
                <script>
                  $(document).ready(function () {
                    size_li = $("#myList li").size();
                    x=1;
                    $('#myList li:lt('+x+')').show();
                    $('#loadMore').click(function () {
                      x= (x+1 <= size_li) ? x+1 : size_li;
                      $('#myList li:lt('+x+')').show();
                    });
                    $('#showLess').click(function () {
                      x=(x-1<0) ? 1 : x-1;
                      $('#myList li').not(':lt('+x+')').hide();
                    });
                  });
                </script>
                <div class="load_more">
                  <ul id="myList">
                    <li>
                      <h4>Course Description</h4>
                      <div>
                      <p>You need to pass the PMP® exam and you need quality training that'll help you in your role as a project manager. You also want to learn from an authority in project management, in an online environment with plenty of exercises, videos, and concise explanations. This course provides 36.5-contact hours of project management education and is taught by project management author and expert Joseph Phillips.</p>
                      <p>The 36.5 contact hours of project management education are earned by completing all of the course videos AND all the interactive video sessions in the course. You must complete all of the videos and all of the interactive video sessions to claim the educational hours for your PMP exam application. The Learning Management System tracks your completion of the course.</p>
                      <p><strong>What are the requirements?</strong></p>
                      <ul>
                        <li>Project manager experience</li>
                        <li>PMP candidate (applied or will apply for the PMP exam)</li>
                        <li>Dedication to completing the course and passing the PMP exam</li>
                      </ul>
                      <p><strong>What am I going to get from this course?</strong></p>
                      <ul>
                        <li>Over 119 lectures and 37 hours of content!</li>
                        <li>Pass the PMI PMP certification exam</li>
                        <li>Discuss the PMBOK 5th edition with confidence</li>
                        <li>Explain the project management processes</li>
                        <li>Discuss the project management knowledge areas</li>
                      </ul>
                      <div class="clearfix"> </div>
                    </div>
                    </li>
                    <li>
                      <div class="load-grids">
                        <div class="load-grid">
                          <p>Category</p>
                        </div>
                        <div class="load-grid">
                          <a href="movies.html">Entertainment</a>
                        </div>
                        <div class="clearfix"> </div>
                      </div>
                    </li>
                  </ul>
                </div>

                <!----- Sections --->
                <?php require("includes/details/sections.php"); ?>
                <!----- Sections --->

            </div>

            <!----- Comment --->
            <?php require("includes/details/comments.php"); ?>
            <!----- Comment --->

          </div>
          <!----- Left Sitebar --->

          <!----- Content Right Sidebar --->
          <?php require("includes/details/content_right_sidebar.php"); ?>
          <!----- Content Right Sidebar --->

        </div>

        <!----- Content ------>
      	<!-- footer -->
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
