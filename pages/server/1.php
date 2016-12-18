<?php echo file_get_contents('../include/header.php'); ?>
<nav class="navbar navbar-default navbar-top">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="/pages/servers.php">Edit Server</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li><a href="/pages/server/1.php">Overview</a></li>
            <li><a href="/pages/server/console.php">Console</a></li>
            <li><a href="/pages/server/ftp.php">FTP</a></li>
            <li><a href="/pages/server/mysql.php">MySQL</a></li>
         </ul>
      </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
</nav>
<h2>Edit Server</h2>
<p>
When editing a server, keep in mind:<br>
&bull; Moving a server to a different node changes the IP.<br>
&bull; You can only move servers to nodes that are online and you have permission to the node and action.<br>
&bull; The port 25565 will only be allowed if you have permission for that server.
</p>
<div class="btn-group btn-group-justified">
   <a href="#" class="btn btn-primary">Start</a>
   <a href="#" class="btn btn-primary">Stop</a>
   <a href="#" class="btn btn-primary">Restart</a>
   <a href="#" class="btn btn-primary">Kill</a>
</div>
<br>
<div class="form-group">
   <label class="col-lg-2 control-label">Status</label>
   <input disabled type="text" class="form-control" placeholder="Server Status" value="Offline">
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Server Name</label>
   <input type="text" class="form-control" placeholder="My Minecraft Server" value="Test Server">
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Players</label>
   <input type="text" class="form-control" placeholder="20" value="10">
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Select Avalible Node</label>
   <select class="form-control" id="select">
      <option selected>Local</option>
      <option disabled>USA/Node1</option>
      <option disabled>USA/Node2</option>
      <option disabled>USA/Node3</option>
      <option>USA/Node4</option>
      <option disabled>FRANCE/Node1</option>
      <option>FRANCE/Node2</option>
      <option>FRANCE/Dedicated1</option>
   </select>
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">IP</label>
   <input disabled type="text" class="form-control" placeholder="12.34.567.89" value="71.74.111.83">
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Select Avalible Port for Local</label>
   <select class="form-control" id="select">
      <option>25565</option>
      <option selected>25585</option>
   </select>
</div>
<div class="form-group">
   <label class="col-lg-2 control-label">Select one of your templates.</label>
   <select class="form-control" id="select">
      <option selected>None</option>
      <option>CastleBuild</option>
      <option>TNT_Wars</option>
   </select>
</div>
<div class="btn-group" role="group">
   <a href="/pages/servers.php"><button type="button" class="btn btn-primary">Submit Changes</button></a>
</div>
<?php echo file_get_contents('../include/footer.php'); ?>