<!-- 選取格子換色 -->
<style>
.selfIntro{
    width:100%;
    display:flex;
    justify-content: space-evenly;
}

.textC,.textE{
    border:1px #db0000 solid;
    border-radius: 3px;
    padding:2%;
}
.show,.del{
    display:flex;
    flex-wrap:wrap;
    justify-content: center;
    align-items: center;
}

.show,.del{
    display:flex;
    justify-content: space-evenly;
}

</style>


<?php
$selfIntro=$SelfIntro->all();
// $basicIntro=$BasicIntro->all();
// print_r($selfIntro);
foreach($selfIntro as $self){
?>
<div>當前選擇的自傳</div>
<br>
<div class="show offset-10">
    <span>show</span> | 
    <span>del</span>
</div>
<form action="api/changeSelfintro.php" method="post">
<div class="selfIntro">

    <textarea name="textC[]" row="5" class="textC col-5 mr-3"><?=$self['textC'];?></textarea>

    <textarea name="textE[]" row="5" class="textE col-5"><?=$self['textE'];?></textarea>

    <div class="show col-1">
        <input type="checkbox" name="sh[]" value="<?=$self['id'];?>" <?=($self['sh']==1)?'checked':'';?>>
    </div>
    
    <div class="del col-1">
    <input type="checkbox" name="del[]" value="<?=$self['id'];?>">
    </div>
</div>
<br>
<input type="hidden" name="id[]" value="<?=$self['id'];?>">

<?php
}
?>

<button type="submit" class="btn btn-danger">確認修改</button>
<button type="reset" class="btn btn-danger">重置</button>
</form>