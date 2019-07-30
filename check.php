<?php
# 是否有中文
function is_zh_cn($words) {

    return preg_match('/[\x{4e00}-\x{9fa5}]+/u', $words)==1;
}
