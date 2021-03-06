<?php
  include_once '_header.mandatory.php';
  include '_header.php';
?>

<script>
    function confirmation() {
        if (confirm("<?= $t->__('inscription.question.confirm') ?>")) {
            document.forms["myform"].submit();
        }
    }
</script>

<h1 class="jumbotron-heading"><?= $t->__('inscription.title') ?></h1>
<p class="lead text-muted"><?= $t->__('inscription.description') ?></p>

<form action="inscriptionSave.php" method="post" id="myform">

<div class="row">
<div class="col-sm-10">

  <!-- Name --> 
  <div class="form-group">
    <label class="control-label col-sm-2"><?= $t->__('inscription.label.name') ?>:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" value=<?= $fmw->getPostOrArrayQuoted($columns, 'name') ?> maxlength="50" />
    </div>
  </div>

  <!-- Family Name -->
  <div class="form-group">
    <label class="control-label col-sm-2"><?= $t->__('inscription.label.familyName') ?>:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="familyName"  value=<?= $fmw->getPostOrArrayQuoted($columns, 'familyName') ?> maxlength="50" />
    </div>
  </div>
    
  <!-- E-mail -->
  <div class="form-group">
    <label class="control-label col-sm-2"><?= $t->__('inscription.label.email') ?>:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="email" value=<?= $fmw->getPostOrArrayQuoted($columns, 'email') ?> maxlength="100" />
    </div>
  </div>

  <!-- Terms GRPD -->    
  <div class="form-group">
    <label class="control-label col-sm-2">&nbsp;</label>
    <div class="col-sm-1">
      <input type="checkbox" name="gdpr" class="form-control" value='1' <?= $fmw->getPostOrArray($columns, 'gdpr') == '1' ? 'checked' : '' ?> >
    </div>
      <p class="form-control-static">&nbsp;<br/><a href="gdpr.php" target="_blank"><?= $t->__('inscription.label.gdpr') ?></a></p>
  </div>
    
  <!-- Recaptcha -->
  <div class="form-group">
    <label class="control-label col-sm-2">&nbsp;</label>
    <div class="col-sm-10">
        <div class="g-recaptcha" data-sitekey="6LcUCk8UAAAAAB6E1JiwKkDmoLTeuKbFzELMe0pT"></div> 
    </div>
  </div>
    
</div>    
</div>

<!-- Buttons -->
<div class="row">
    <div class="col-sm-10">
        
      <div class="form-group">
        <label class="control-label col-sm-2">&nbsp;</label>
        <div class="col-sm-10">
              <input type="button" class="btn btn-default" value="<?= $t->__('button.save') ?>" onclick="confirmation()" />
              <input type="button" class="btn btn-default" value="<?= $t->__('button.cancel') ?>" onclick="window.location.href='index.php'" />
        </div>
      </div>
        
    </div>
</div>
    
</form>

<?php include '_footer.php' ?>