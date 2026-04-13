<?php
include "database/config.php";

$query = "SELECT * FROM tasks ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<?php

include "inc/header.php";
?>
  <!-- Page Header -->
  <div class="page-header">
    <div class="container">
      <h1 class="mb-0">
        <i class="fas fa-list-check me-3"></i>Task Management System built using PHP & MySQL.

      </h1>
      <p class="mb-0 mt-2 opacity-75">Manage your tasks efficiently and stay organized</p>
    </div>
  </div>

  <!-- Main Content -->
 <div class="container main-content">
    <div class="table-container">
      <div class="table-responsive">
        <table class="table table-striped mb-0">
          <thead class="table-dark">
            <tr>
              <th><i class="fas fa-hashtag me-2"></i>ID</th>
              <th><i class="fas fa-tasks me-2"></i>Task</th>
              <th><i class="fas fa-flag me-2"></i>Priority</th>
              <th><i class="fas fa-calendar me-2"></i>Created At</th>
              <th><i class="fas fa-check me-2"></i>Status</th>
              <th><i class="fas fa-cogs me-2"></i>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id'] ?></td>

                <td><?= $row['title'] ?></td>

                <td>
                <?php if($row['priority'] == 'high'): ?>
                    <span class="badge bg-danger">High</span>

                <?php elseif($row['priority'] == 'medium'): ?>
                    <span class="badge bg-warning">Medium</span>

                <?php else: ?>
                    <span class="badge bg-success">Low</span>
                <?php endif; ?>
                </td>

                <td><?= $row['created_at'] ?></td>
                <td>
                  <?php if ($row['is_completed'] == 1): ?>
                    <span class="badge bg-success">Completed</span>
                  <?php else: ?>
                    <span class="badge bg-secondary">Pending</span>
                  <?php endif; ?>
                </td>
                <td>
                    <a href="update_task.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="actions/delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                        Delete
                    </a>
                    <a href="actions/toggle.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">
                        Done
                    </a>
                </td>
                
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<?php include "inc/footer.php"; ?>
