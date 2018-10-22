<?php
session_start();
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row" style="margin-left: 35%;">
      <table style="border: solid black; text-align: center ">
          <tr style="border: 1px solid black; padding: 10px; border-collapse: collapse;">
              <th style="border: 1px solid black; padding: 10px; border-collapse: collapse;">Pecan Nuts </th>
              <th style="border: 1px solid black; padding: 10px; border-collapse: collapse;">Chocolate Chips </th>
              <th style="border: 1px solid black; padding: 10px; border-collapse: collapse;">Chocolate Cookie </th>
              <th style="border: 1px solid black; padding: 10px; border-collapse: collapse;">M&M's Cookies</th>
          </tr>
          <tr>
              <td style="border: 1px solid black; padding: 10px; border-collapse: collapse; text-align: center"> <?php echo $_SESSION['pecanNuts'] ?></td>
              <td style="border: 1px solid black; padding: 10px; border-collapse: collapse; text-align: center"> <?php echo $_SESSION['chocolateChips'] ?></td>
              <td style="border: 1px solid black; padding: 10px; border-collapse: collapse; text-align: center"> <?php echo $_SESSION['chocolateCookie'] ?></td>
              <td style="border: 1px solid black; padding: 10px; border-collapse: collapse; text-align: center"> <?php echo $_SESSION['m&msCookie'] ?></td>
          </tr>
      </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
