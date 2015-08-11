<div class="emais">
  <form method="post" action="<?php URL?>check">
   <label>
    <p>Please append emails separated by comma</p>
    TO: <br />
    <textarea rows="5" class="cheched_emails" id="contact_list" name="contact_list"><?php if(!empty ($emails)){foreach ($emails as $email) {echo $email.', ';}}?></textarea>
   </label> <br />

    <label>Subject <br />
      <input type="text" name="subject" class="subject" />
    </label><br />

    <label> Text <br />
      <textarea rows="5" class="text_message" name="text_message"></textarea>
    </label> <br />
      <input type="submit" name="submit" value="Send" id="submit" onclick="alert('message has been sent !!!');" />
    </form>
</div>
