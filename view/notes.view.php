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
       <?php foreach ($notes as $key => $value): ?>
          <li>
              <a href='/note?id=<?= $value["id"]?>' class="text-blue-500 hover:underline">
                <?= $value['body']; ?>
              </a>            
          </li>
       <?php endforeach; ?>
    </div>
  </main>

  <?php require ('partials/footer.php');
