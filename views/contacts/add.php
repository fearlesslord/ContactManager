  <h2>Add new contact</h2>

  <form method="post" action="<?php URL?>add">
    <table id="addContact" class="addContact">
      <tbody>
        <tr>
          <td><label for="lastname">Last name *</label></td>
          <td><input type="text" id="lastname" name="lastname" value="<?php echo (isset($data['lastname']) ? $data['lastname'] : false); ?>" /></td>
          <td class="error"><label for="lastname"><?php echo (isset($errors['lastname']) ? $errors['lastname'] : false); ?></label></td>
        </tr>

        <tr>
          <td><label for="firstname">First name *</label></td>
          <td><input type="text" name="firstname" id="firstname" value="<?php echo (isset($data['firstname']) ? $data['firstname'] : false); ?>" /></td>
          <td class="error"><label for="firstname"><?php echo (isset($errors['firstname']) ? $errors['firstname'] : false); ?></label></td>
        </tr>

        <tr>
          <td><label for="email">Email *</label></td>
          <td><input type="text" name="email" id="email" value="<?php echo (isset($data['email']) ? $data['email'] : false); ?>" /></label></td>
          <td class="error"><label for="email"><?php echo (isset($errors['email']) ? $errors['email'] : false); ?></td>
        </tr>

        <tr>
          <td><label for="homephone">Homephone</label></td>
          <td><input type="radio" name="bestphone" value="homephone" checked> <input type="text" id="homephone" name="homephone" class="phone"
               value="<?php echo (isset($data['homephone']) ? $data['homephone'] : false); ?>" /> </td>
          <td class="error"><label for="homephone"><?php echo (isset($errors['homephone']) ? $errors['homephone'] : false); ?></label></td>
        </tr>

        <tr>
          <td><label for="workphone">Workphone</label></td>
          <td><input type="radio" name="bestphone" value="workphone"> <input type="text" id="workphone" name="workphone" class="phone"
               value="<?php echo (isset($data['workphone']) ? $data['workphone'] : false); ?>" /></td>
          <td class="error"><label for="workphone"><?php echo (isset($errors['workphone']) ? $errors['workphone'] : false); ?></label></td>
        </tr>

        <tr>
          <td><label for="cellphone">Cellphone</label></td>
          <td><input type="radio" name="bestphone" value="cellphone"> <input type="text" id="cellphone" name="cellphone" class="phone"
              value="<?php echo (isset($data['cellphone']) ? $data['cellphone'] : false); ?>" /></td>
          <td class="error"><label for="cellphone"><?php echo (isset($errors['cellphone']) ? $errors['cellphone'] : false); ?></label></td>
        </tr>

        <tr>
          <td><label for="address1">Address 1</label></td>
          <td><input type="text" name="address1" id="address1"
               value="<?php echo (isset($data['address1']) ? $data['address1'] : false); ?>" /></td>
        </tr>

        <tr>
          <td><label for="address2">Address 2</label></td>
          <td><input type="text" name="address2" id="address2"
               value="<?php echo (isset($data['address2']) ? $data['address2'] : false); ?>" /></td>
        </tr>

        <tr>
          <td><label for="city">City</label></td>
          <td><input type="text" name="city" id="city"
               value="<?php echo (isset($data['city']) ? $data['city'] : false); ?>" /></td>
        </tr>

        <tr>
          <td><label for="state">State</label></td>
          <td><input type="text" name="state" id="state"
               value="<?php echo (isset($data['state']) ? $data['state'] : false); ?>" /></td>
        </tr>

        <tr>
          <td><label for="zip">Zip</label></td>
          <td><input type="text" name="zip" id="zip"
               value="<?php echo (isset($data['zip']) ? $data['zip'] : false); ?>" /></td>
        </tr>

        <tr>
          <td><label for="country">Country</label> </td>
          <td><input type="text" name="country" id="country"
               value="<?php echo (isset($data['country']) ? $data['country'] : false); ?>" /></td>
        </tr>

        <tr>
          <td><label for="birthdate">Birthdate</label></td>
          <td><input type="date" name="birthdate" id="birthdate"
               value="<?php echo (isset($data['birthdate']) ? $data['birthdate'] : false); ?>"/ ></td>
        </tr>

        <tr>
          <td><label></label><input type="submit"  value="add contact"/></td>
        </tr>
      </tbody>
    </table>
  </form>