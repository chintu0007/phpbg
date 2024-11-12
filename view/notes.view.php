<?php require 'partials/head.php'; ?>  
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>
  
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
       <?php 
       if (!empty($notes)): 
        foreach ($notes as $key => $value): ?>
            <li>
                <?php if(isset($_GET['id'])) : ?>
                  <?= $value['body']; ?>
                <?php else: ?>    
                  <a href='/note?id=<?= $value["id"]?>' class="text-blue-500 hover:underline">
                  <?= $value['body']; ?>
                </a>  
                <?php  endif; ?>
            </li>
        <?php endforeach; ?>
       <?php  endif; ?>      
        <?php  if (!empty($note)):  ?>
            <p><?= $note['body']; ?></p>            
        <?php  endif; ?>      
    </div>
  </main>

  <?php require ('partials/footer.php');
