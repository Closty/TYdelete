<?php if($this->user->hasLogin()):?>
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
