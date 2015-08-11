  <form method="post" action="<?php URL?>accept">
    <input type="submit" value="Accept contacts"/>
    <a href="<?php echo URL?>contacts?page=1">Cancel</a>
    <fieldset>
      <table id="contactsCheck" class="tablesorter" >
        <thead>
          <tr>
            <th id="select_all_th"><label><b>Select all<input type="checkbox" id="select_all"></b></label></th>
            <th><b>Last name</b></th>
            <th><b>First name</b></th>
            <th><b>Email</b></th>
            <th><b>Best Phone</b></th>
            <br/>
          </tr>
        </thead>
        <tbody>
          <?php foreach($contactsList as $key => $value){ ?>
            <tr>
              <td>
                <input type="checkbox" name="contactsEmail[]" value="<?php echo $value['email']; ?>">
              </td>
              <td><?php echo $value['lastname']; ?></td>
              <td><?php echo $value['firstname']; ?></td>
              <td><?php echo $value['email']; ?></td>
              <td><?php echo $value['bestphone']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </fieldset>

    <input type="submit" value="Accept contacts"/>
    <a href="<?php echo URL?>contacts?page=1">Cancel</a>

  </form>