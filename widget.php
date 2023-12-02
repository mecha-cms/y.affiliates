<div class="sidebar-section">
  <?php if (!empty($title)): ?>
    <h5>
      <span>
        <?= $title; ?>
      </span>
    </h5>
  <?php endif; ?>
  <?= $content ?? ""; ?>
</div>