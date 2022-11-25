<?php

$totalUsers = count($params['usersData']);

echo $params['header']."<h1>Users list-14 (Total: ${totalUsers})</h1>";

?>


<div class="usersContainer">
  
<?php

  switch ($params['newUser']) {
    case 'yes':
      ?>
      <div class="success">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span><b>&#10004</b> New user lucas added successfully!</div>
      <?php
      break;
    case 'error':
?>
<div class="alert">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span><b>&#10069</b> The email is already registered!</div>
<?php
        break;
}


?>
<div class="searchBarContainer"><img id="searchImg"width="25"height="25"src="http://localhost/assets/img/search.png" title="Search" alt="Search"/>
<input type="text" id="searchInput" placeholder="Search users..." title="Search users">
</div>

<div class="tableContainer">

<table id="usersTable"><thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Registration date</th>
    <th>Avatar</th>
    <th>Options</th>
  </tr></thead><tbody>
  <?php foreach($params['usersData'] as $userData):
    
$userAvatarTitle = $userData['name'].' avatar';
$avatarUrl = base_url('uploads/'.$userData['avatar']);
$userAvatarHtml =  "<img alt='${userAvatarTitle}'title='${userAvatarTitle}'class='userAvatar' width='50'height='50'src='${avatarUrl}'/>";
    ?>
  <tr>
  <td><?= $userData['ID'];?></td>
    <td><?= $userData['name'];?></td>
    <td><?= $userData['email'];?></td>
    <td><?= $userData['registration_date'];?></td>
    <td><?php if(! empty($userData['avatar'])){ echo $userAvatarHtml; }?></td>
  <td>Edit/Delete</td>
  </tr>
 <?php endforeach;?>

</tbody>
</table>
</div>

<a class="button"href="/new-user">Add new user</a>
</div>



<?= $params['footer'];?>