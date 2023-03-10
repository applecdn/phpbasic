<?php
session_start();
include("function.php");
extract($_GET);
$post = showPost($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2><?php echo $post["title"]; ?></h2>
    </div>
    <div>
        <?php echo $post["content"]; ?>
    </div>
    <div>
        建立時間<?php echo $post["created_at"]; ?>
    </div>
    <div>
        更新時間<?php echo $post["updated_at"]; ?>
    </div>
    <a href="index.php">文章列表</a>
    <?php
    if (isset($_SESSION["AUTH"])) {
        if ($post["user_id"] == $_SESSION["AUTH"]["id"]) { ?>
            <a href="post_edit.php?id=<?php echo $post["id"]; ?>">編輯文章</a>
            <form action="post_delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $post["id"]; ?>">
                <input type="submit" value="刪除文章" onclick="return confirm('確認刪除文章?')">
            </form>
    <?php }
    } ?>
</body>

</html>