<div id="Add">
  <form method="get" action="<?php URL?>contacts/add">
    <button type="submit" >Add</button>
  </form>
</div>

<div id="Select">
  <form method="post" action="<?php URL?>contacts/select">
    <button type="submit" >Select Contact</button>
  </form>
</div>

<table id="contacts" class="tablesorter">
  <thead>
    <tr>
      <th><b><a href="<?php echo URL?>contacts?page=<?php echo $page ?>&order=lastname&orderDir=<?php echo $orderDir?>">Last name</a></b></th>
      <th><b><a href="<?php echo URL?>contacts?page=<?php echo $page ?>&order=firstname&orderDir=<?php echo $orderDir?>">First name</a></b></th>
      <th><b>Email</b></th>
      <th><b>Best Phone</b></th>

    </tr>
  </thead>
  <tbody>

    <?php foreach($contactsList as $key => $value){ ?>
         <tr>
            <td><?php echo $value['lastname']; ?></td>
            <td><?php echo $value['firstname']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['bestphone']; ?></td>
            <td><a href="<?php echo URL; ?>contacts/edit/<?php echo $value['id']; ?>">Edit/View</a></td>
            <td>
              <a href="<?php echo URL; ?>contacts/delete/<?php echo $value['id']; ?>"
                 onClick="return window.confirm('Are you sure to delete a contact')">Delete</a>
            </td>
         </tr>
    <?php } ?>
  </tbody>
</table>

<br />

<div class="paginatioMenu">
  <?php
  require '/../elements/paginationMenu.php';
  ?>
</div>

<div id="Add">
  <form method="get" action="<?php URL?>contacts/add">
    <button type="submit" >Add</button>
  </form>
</div>

<div id="Select">
  <form method="post" action="<?php URL?>contacts/select">
    <button type="submit" >Select Contact</button>
  </form>
</div>