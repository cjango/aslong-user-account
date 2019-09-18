<?php

namespace AsLong\UserAccount\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAccountRule extends Model
{

    use SoftDeletes;

    protected $guarded = [];

    public function logs()
    {
        return $this->hasMany(UserAccountLog::class, 'rule_id');
    }
    
    /**
     * Notes: 获取触发次数的文字说明
     * @Author: <C.Jason>
     * @Date: 2019/9/18 13:24
     * @return string
     */
    protected function getTriggerTextAttribute()
    {
        switch ($this->trigger <=> 0) {
            case -1:
                return '仅一次';
                break;
            case 0:
                return '不限制';
                break;
            case 1:
                return $this->trigger . ' 次/日';
                break;
        }
    }
}
