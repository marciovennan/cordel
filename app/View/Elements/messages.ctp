<?php if( $this->Session->check( "Message.flash" ) ){ $this->Session->check( "Message.flash.params.class" ) ? $class = 'alert-'.$this->Session->read( "Message.flash.params.class" ) : $class = null; ?>

	<div class="alert <?= $class ?>"><a class="close" data-dismiss="alert">×</a><?= $this->Session->flash() ?></div>

<?php } else if( $this->Session->check( "Message.auth" ) ){ $this->Session->check( "Message.auth.params.class" ) ? $class = 'alert-'.$this->Session->read( "Message.auth.params.class" ) : $class = null; ?>

	<div class="alert <?= $class ?>"><a class="close" data-dismiss="alert">×</a><?= $this->Session->flash( "auth" ) ?></div>

<?php } ?>