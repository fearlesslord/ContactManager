<p>This address is not in your contact manager</p>

<form method="post" action="<?php URL?>addEmail">

  <fieldset>
    <table >
      <?php
        foreach ($contactsList as $email) {
          echo '<tr>';
          echo '<td>
                      <input type="checkbox" name="email[]" value="' . $email . '">
                    </td>';
          echo '<td>' . $email . '</td>';

          echo '</tr>';
        }
      ?>
    </table>
  </fieldset>

  <input type="submit" value="add to contact manager"/>
  <a href="<?php echo URL?>contacts">Go to my Contacts</a>

</form>
