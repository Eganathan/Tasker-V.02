<?php include 'nav.php'; ?>

<div class="container">
          <form action="new-task.php" method="post">

        <div class="input-group input-group-lg">

          <input type="text" id="task-Input" value="" name="task_inp" class="form-control" placeholder="Type something here .." minlength="8" maxlength="122">

          <div class="input-group-append">
            <input class="btn btn btn-success"  name="submit" type="submit" value="New Task" />
          </div>
        </div>



        <div class="card">
          <div class="card-body">

            <div class="card">
              
                <table class="table table-hover">
                  <tbody>

                      <?php include 'getTasks.php' ?>
                    
                  </tbody>
                </table>

            </div>
            <!--
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted card-sub-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
              -->

          </div>
        </div>
      
      </form>
</div>

<?php include 'footer.php';?>

