<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>
  <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs')?>

    <h4>Profile</h4>
    <div class="row">
      <div class="col-4">
        <img src="<?=ASSETS?>/user_female.jpg">
      </div>
      <div class="col-8 bg-secondary"></div>
    </div>

  </div>

<?php $this->view('includes/footer')?>