<?php
  include "php/const.php";
?>
<nav class="navbar navbar-default" style="margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><?php echo $GLOBALS['codename'];?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo $GLOBALS['path']['index']; ?>">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Scouting <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $GLOBALS['path']['matchSheet'];?>"><?php echo $GLOBALS['text']['matchSheet'];?></a></li>
            <li><a href="<?php echo $GLOBALS['path']['pitSheet'];?>"><?php echo $GLOBALS['text']['pitSheet'];?></a></li>
            <li><a href="<?php echo $GLOBALS['path']['allianceSheet'];?>"><?php echo $GLOBALS['text']['allianceSheet'];?></a></li>
          </ul>
        </li>
        <li><a href="<?php echo $GLOBALS['path']['reportSheet'];?>"><?php echo $GLOBALS['text']['reportSheet'];?></a></li>
        <li><a href="<?php echo $GLOBALS['path']['databaseSheet'];?>"><?php echo $GLOBALS['text']['databaseSheet'];?></a></li>
        <li><a href="<?php echo $GLOBALS['path']['admin'];?>"><?php echo $GLOBALS['text']['admin'];?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-top-links navbar-right">
        <li>
        <?php
            $disabled = "";
            if (isset($_SESSION['userArray']['name'])) {
                echo '<div style="padding-right: 5px">
                            <div class="btn-group navbar-btn">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black !important">
                                <img src="' . $_SESSION['userArray']['image_24'] . '"> ' . $_SESSION['userArray']['name'] . ' <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">';
                              if ($GLOBALS['enable']['achievements']) {
                                echo '<li ' . $disabled . '><a href="/achievement.php?userid=' . $_SESSION['userArray']['id'] . '"><i class="fa fa-star-o" aria-hidden="true"></i> Achievements</a></li>
                                <li role="separator" class="divider"></li>';
                              }
                                echo '
                                <li><a href="/oauthLogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                              </ul>
                            </div>
                        </div>';
            }
            else {
                echo '
                  <div style="padding: 5px">
                      <a href="https://slack.com/oauth/authorize?scope=identity.basic,identity.email,identity.team,identity.avatar&client_id=3325716591.80369238817&redirect_uri=' . $GLOBALS['externalURL'] . $GLOBALS['OAUTH']['URI'] . '"><img alt="Sign in with Slack" height="40" width="172" src="https://platform.slack-edge.com/img/sign_in_with_slack.png" srcset="https://platform.slack-edge.com/img/sign_in_with_slack.png 1x, https://platform.slack-edge.com/img/sign_in_with_slack@2x.png 2x" /></a>
                  </div>';
            }
        ?></li>
        <?php
          if (!isset($_SESSION['userArray']['name'])) {
            echo '<li><a style="cursor:pointer" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user" aria-hidden="true"></i></a></li>';
          }
          else {
            echo '<li><a href="' . $GLOBALS['path']['settings'] . '"><i class="fa fa-cog" aria-hidden="true"></i></a></li>';
          }
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Login Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
            <input id="userT" class="form-control" type="text" placeholder="Username" name="name" required>
            <br>
            <input id="userT" class="form-control" type="password" placeholder="Password" name="pin" required>
            <br><br>
            <button type="submit" class="btn btn-danger btn-lg" style="display: block; width: 100%;">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <span class="psw"><a href="createAccount.php">Create Account</a></span>
        </div>
      </div>
    </div>
  </div>

<?php include 'php/message.php'; checkMessage(); ?>

<!--<a href="https://slack.com/oauth/authorize?scope=identity.basic&client_id=your_client_id"><img src="https://api.slack.com/img/sign_in_with_slack.png" /></a>-->