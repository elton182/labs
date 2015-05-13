<!-- //app/View/Users/login.ctp -->

<div class="row">
  <div class="col-md-4 col-ld-4">
    
    <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend>
                <?php echo __(''); ?>
            </legend>
            <?php 
              echo '<div class="form-group">';
              echo $this->Form->input('email',array('class="form-control"','required'));
              echo '</div>';

              echo '<div class="form-group">';
              echo $this->Form->input('password',array('class="form-control"','required'));
              echo '</div>';
            ?>
        </fieldset>
    <?php echo $this->Form->end(__('Entrar')); ?>
  </div>
      <?php echo $this->Session->flash('auth'); ?>
</div>