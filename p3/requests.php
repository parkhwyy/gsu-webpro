
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-default" role="tablist" >
    <li id="new_btn" role="presentation" class="active btn-warning"><a href="#new" aria-controls="new" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-bell"></span> Active Requsts</a></li>
  </ul>



  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="new">
      <?php


      ?>
    </div>
</div>

<script>
$("#new").load("req.php");

</script>