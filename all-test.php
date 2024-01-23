<div class="user-profile">
   

   <?php
      $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>
   <nav>
   <p> username : <span><?php echo $fetch_user['fname']; ?></span> </p>
   <p> email : <span><?php echo $fetch_user['email']; ?></span> </p>
   <div class="flex">
      <a href="shopping.php" class="btn">cart</a>
      <a href="login.php" class="btn">login</a>
      <a href="create.php" class="option-btn">register</a>
      <a href="logout.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
   </div>
</div>