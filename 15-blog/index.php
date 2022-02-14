<?php
include_once ('templates/header.php'); 
//print_r($posts); 
?>
    
<main> 
    <div id="title-container">
    <h1> BLOG CODANDO</h1>
    <span>O seu blog de programação</span>
    </div>
<div id="posts-container">
    <?php foreach ($posts as$post): ?>
        <div class="post-box">
            <img src="<?php echo $BASE_URL?>assets/images/<?php echo $post['img']?>" alt="<?php echo $post['title']?>">
                <h2 class="post-title">
                <a href="<?php echo $BASE_URL?>posts.php?id=<?php echo $post['id']?>"> <?php echo $post['title']?></a>
            </h2>
            <p class="post-description"> <?php echo $post['description']?></p>
            <div class="tag-container">
                <?php foreach ($post['tags'] as $tag):?>
                    <a href=""><?php echo $tag?> </a>
                    <?php endforeach ?>
            </div>
        </div>
        <?php endforeach ?>
</div>
</main>

<?php
include_once ('templates/footer.php'); 
?>
    