<?php require 'view/partials/head.php'; ?>  
<?php require 'view/partials/nav.php'; ?>
<?php require 'view/partials/banner.php'; ?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->

      <?php if(isset($_GET['id'])) : ?>
        <div class="px-4 py-6 sm:px-6 lg:px-8">
          <p>
          <a href="/notes" class="text-blue-400 hover:underline">go back...</a>
          </p>          
        </div>
       <?php endif; ?>
       <?php if (!empty($notes)): ?>

        <ul>
        <?php foreach ($notes as $key => $value): ?>
            <li>
                <?php if(isset($_GET['id'])) : ?>
                  <?= $value['body']; ?>
                <?php else: ?>    
                  <a href='/note?id=<?= $value["id"]?>' class="text-blue-500 hover:underline">
                  <?= htmlspecialchars($value['body']); ?>
                </a>  
                <?php  endif; ?>
            </li>
        <?php endforeach; ?>
        </ul>
       <?php  endif; ?>      
        <?php  if (!empty($note)):  ?>
            <p><?= htmlspecialchars($note['body']); ?></p>            
        <?php  endif; ?>
        
        <p class="mt-6">
          <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
  </main>

  <?php require ('view/partials/footer.php');
