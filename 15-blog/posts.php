<?php
require_once('templates/header.php');

if (isset($_GET['id'])) {

  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}
?>

<body>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?php echo $currentPost['title'] ?></h1>
            <p id="post-description"><?php echo $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?php echo $BASE_URL ?>assets/images/<?php echo $currentPost['img'] ?>"
                    alt="<?php echo $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis neque sint quibusdam
                voluptatibus, libero pariatur id asperiores, quasi, doloribus dolorum similique quos ab soluta
                blanditiis saepe labore enim molestiae. Deleniti.*5</p>
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis neque sint quibusdam
                voluptatibus, libero pariatur id asperiores, quasi, doloribus dolorum similique quos ab soluta
                blanditiis saepe labore enim molestiae. Deleniti.*5</p>
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis neque sint quibusdam
                voluptatibus, libero pariatur id asperiores, quasi, doloribus dolorum similique quos ab soluta
                blanditiis saepe labore enim molestiae. Deleniti.*5</p>
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis neque sint quibusdam
                voluptatibus, libero pariatur id asperiores, quasi, doloribus dolorum similique quos ab soluta
                blanditiis saepe labore enim molestiae. Deleniti.*5</p>
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis neque sint quibusdam
                voluptatibus, libero pariatur id asperiores, quasi, doloribus dolorum similique quos ab soluta
                blanditiis saepe labore enim molestiae. Deleniti.*5</p>
</main> 
<aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?php echo $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categorias-title">Categorias</h3>
      <ul id="categorias-list">
        <?php foreach($categorias as $categoria): ?>
     <li><a href="#"><?php echo $categoria ?></a></li>
     <?php endforeach; ?>
   </ul>
</aside>

            <?php
      require_once('templates/footer.php');
      ?>