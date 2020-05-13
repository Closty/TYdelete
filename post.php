<?php if($this->user->hasLogin()):?>
&nbsp; | &nbsp;
<a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" target="_blank">编辑文章</a>
<?php Typecho_Widget::widget('Widget_Security')->to($security); ?>
&nbsp; | &nbsp;
<a href="<?php $security->index('/action/contents-post-edit?do=delete&cid='.$this->cid); ?>" onclick="javascript:return p_del()">删除文章</a>
<script>
function p_del() {
    var msg = "您真的确定要删除吗？";
    if (confirm(msg)==true){
        return true;
    }else{
        return false;
    }
}
<?php else: ?>

<?php endif ?>
</script>
