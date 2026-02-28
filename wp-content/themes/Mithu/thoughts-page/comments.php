<!--For lingual anarchy-->
<div class="modal modal-fullscreen fade comments" id="lingualcomments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>Un</span></button>
      </div>
      <div class="modal-body">
        <div class="wrap">
        	<h2>lingual anarchy</h2>
            <ul class="comments">
			<?php
            $comments = get_comments( array('post_id'=>196,'status'=>'approve') );
			foreach($comments as $comment) :?>
            	<li>
                	<p><?php echo($comment->comment_content); ?> </p>
                    <span><?php	echo($comment->comment_date); ?> </span>
                </li>
			<?php endforeach;?>
            </ul>			
            <form method="post">
                <textarea required="required" name="lcomment" placeholder="Enter your comment here !"></textarea>
                <button type="submit" name="submit4" value="" onClick="alert('Comment submitted for approval!')">
                	<img src="<?php bloginfo('template_url')?>/img/red-logo.gif" title="submit" alt="submit"/>
                </button>
            </form>
            <?php 
			if(isset($_POST['submit4']) && $_POST['submit4']=="Submit"){
				$lcomment=$_POST['lcomment'];
				$time = current_time('mysql');
				$data = array(
					'comment_post_ID' => 196,
					'comment_content' => $lcomment,
					'comment_date' => $time,
					'comment_approved' => 0);
				wp_insert_comment($data);
			}?>
        </div>
      </div>
    </div>
  </div>
</div>

<!--For unmonolith identity-->
<div class="modal modal-fullscreen fade comments" id="unmonolithcomments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>Un</span></button>
      </div>
      <div class="modal-body">
        <div class="wrap">
        	<h2>unmonolith identity</h2>
            <ul class="comments">
            <?php 
			$comments = get_comments( array('post_id'=>194,'status'=>'approve') );
			foreach($comments as $comment) :?>	
            	<li>
                	<p> <?php echo($comment->comment_content); ?> </p>
                    <span> <?php	echo($comment->comment_date); ?> </span>
                </li>
            <?php endforeach;?>
            </ul>
            <form method="post">
                <textarea required="required" name="icomment" placeholder="Enter your comment here !"></textarea>
                <button type="submit" name="submit3" value="" onClick="alert('Comment submitted for approval!')">
                	<img src="<?php bloginfo('template_url')?>/img/red-logo.gif" title="submit" alt="submit"/>
                </button>

            </form>
			<?php 
			if(isset($_POST['submit3']) && $_POST['submit3']=="Submit"){
				$icomment=$_POST['icomment'];
				$time = current_time('mysql');
				$data = array(
					'comment_post_ID' => 194,
					'comment_content' => $icomment,
					'comment_date' => $time,
					'comment_approved' => 0);
				wp_insert_comment($data);
			}?>
        </div>
      </div>
    </div>
  </div>
</div>

<!--For untaboo sexuality-->
<div class="modal modal-fullscreen fade comments" id="untaboocomments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>Un</span></button>
      </div>
      <div class="modal-body">
        <div class="wrap">
        	<h2>untaboo sexuality</h2>
            <ul class="comments">
            <?php 
			$comments = get_comments( array('post_id'=>195,'status'=>'approve') );
			foreach($comments as $comment) :
			?>
                <li>
                    <p> <?php echo($comment->comment_content); ?> </p>
                    <span> <?php	echo($comment->comment_date); ?> </span>
                </li>
			<?php endforeach;?>
            </ul>			
            <form method="post">
                <textarea required="required" name="scomment" placeholder="Enter your comment here !"></textarea>
                <button type="submit" name="submit2" value="" onClick="alert('Comment submitted for approval!')">
                	<img src="<?php bloginfo('template_url')?>/img/red-logo.gif" title="submit" alt="submit" />
                </button>
            </form>
            <?php 
			if(isset($_POST['submit2']) && $_POST['submit2']=="Submit"){
				$scomment=$_POST['scomment'];
				$time = current_time('mysql');
				$data = array(
					'comment_post_ID' => 195,
					'comment_content' => $scomment,
					'comment_date' => $time,
					'comment_approved' => 0);
				wp_insert_comment($data);
			}
			?>
        </div>
      </div>
    </div>
  </div>
</div>

<!--For Counter Capitalism-->
<div class="modal modal-fullscreen fade comments" id="countercomments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>Un</span></button>
      </div>
      <div class="modal-body">
        <div class="wrap">
        	<h2>counter capitalism</h2>
            <ul class="comments">
			<?php
            $comments = get_comments( array('post_id'=>197,'status'=>'approve') );
			foreach($comments as $comment) :?>
            	<li>
                	<p><?php echo($comment->comment_content); ?></p>
                    <span><?php	echo($comment->comment_date); ?></span>
                </li>
            <?php endforeach;?>
            </ul>			
            <form method="post">
                <textarea required="required" name="ccomment" placeholder="Enter your comment here !"></textarea>
                <button type="submit" name="submit1" value="" onClick="alert('Comment submitted for approval!')">
                	<img src="<?php bloginfo('template_url')?>/img/red-logo.gif" title="submit" alt="submit" />
                </button>
            </form>
			<?php 
			if(isset($_POST['submit1']) && $_POST['submit1']=="Submit"){
				$ccomment=$_POST['ccomment'];
				$time = current_time('mysql');
				$data = array(
					'comment_post_ID' => 197,
					'comment_content' => $ccomment,
					'comment_date' => $time,
					'comment_approved' => 0);
				wp_insert_comment($data);
			}?>
        </div>
      </div>
    </div>
  </div>
</div>


<!--For Radical Hospitality-->
<div class="modal modal-fullscreen fade comments" id="radicalcomments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>Un</span></button>
      </div>
      <div class="modal-body">
        <div class="wrap">
        	<h2>radical hospitality</h2>
            <ul class="comments">
			<?php
            if(isset($_POST['submit']) && $_POST['submit']=="Submit"){
				$rcomment=$_POST['rcomment'];
				$time = current_time('mysql');
				$data = array(
					'comment_post_ID' => 198,
					'comment_content' => $rcomment,
					'comment_date' => $time,
					'comment_approved' => 0);
				wp_insert_comment($data);
			}?>
			<?php
			$comments = get_comments( array('post_id'=>198,'status'=>'approve') );
			foreach($comments as $comment) :?>
            	<li>
                	<p><?php echo($comment->comment_content); ?></p>
                    <span><?php	echo($comment->comment_date); ?></span>
                </li>
            <?php endforeach;?>
            </ul>			
            <form method="post">
                <textarea required="required" name="rcomment" placeholder="Enter your comment here !"></textarea>
                <button type="submit" name="submit" value="" onClick="alert('Comment submitted for approval!')">
                	<img src="<?php bloginfo('template_url')?>/img/red-logo.gif" title="submit" alt="submit"/>
                </button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>