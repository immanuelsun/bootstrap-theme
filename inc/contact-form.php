<div class="modal fade" id="contact-form" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Us</h4>
      </div> <!-- end modal-header -->

      <div class="modal-body">
        <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }; ?>
      </div> <!-- end modal-body -->

      <div class="modal-footer">
        <a href="" class="btn btn-theme-aqua" data-dismiss="modal">Close</a>
      </div> <!-- end modal-footer -->

    </div> <!-- end modal-content -->
  </div>  <!-- end modal-dialog -->
</div> <!-- end modal -->