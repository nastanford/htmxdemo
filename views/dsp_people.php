<div class="row">
  <div class="col-3 ms-2">
    <div>
      <h3>People</h3>
      <div>
        <?php
        foreach ($qry_people as $row) {
          $fullName = $row['first_name'] . " " . $row['last_name'];
          $url = "some_page.php?user_id=" . $row['id'];
          echo '<a href="' . $url . '" class=" list-group-item list-group-item-action">' . $fullName . '</a>';
        }
        ?>
      </div>

    </div>
  </div>
</div>