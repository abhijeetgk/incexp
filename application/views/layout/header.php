
<nav class="">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $project_name;?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo site_url();?>">Home</a></li>
             <?php foreach($menu as $menukey=>$menuvalue){ ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $menukey;?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?php foreach($menuvalue as $key=>$value) { ?>
                  <li><a href="<?php echo $value;?>"><?php echo $key;?></a></li>
                  <?php } ?>
                
                  
                  
                </ul>
              </li>
              <?php } ?>
            </ul>
            <?php if (isset($username)){ ?>
            <ul class="nav navbar-nav navbar-right">
            <li><a>Welcome <?php echo $username;?>&nbsp;</a></li>
              <li><a href="<?php echo site_url('logout');?>">Logout</a></li>
            </ul>
            <?php } ?>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

