<header class="clearfix">
    <a href="<?php echo BASE_URL . 'index.php' ?>" class="logo">
        <h1 class="logo-text"><span>We</span>Inspire</h1>
    </a>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        
        <?php if(isset($_SESSION['id'])): ?>
      <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size : 0.8em;"></i>
          </a>
          <ul class="dropdown">
          <?php if($_SESSION['admin']): ?>
            <li><a href="<?php echo BASE_URL . 'admin/dashboard.php'; ?>">Dashboard</a></li>
          <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Log-Out</a></li>
          </ul>
        </li>
        <?php else: ?>
      <li><a href="<?php echo BASE_URL . 'register.php'; ?>">Sign-Up</a></li>
      <li><a href="<?php echo BASE_URL . 'login.php'; ?>">Log-In</a></li>
    <?php endif; ?>
      </ul>
    </nav>
  </header>