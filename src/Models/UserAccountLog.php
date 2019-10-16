<?php

namespace AsLong\UserAccount\Models;

use Illuminate\Database\Eloquent\Model;

class UserAccountLog extends Model
{
    protected $guarded = [];

    protected $casts = [
        'source' => 'array',
    ];

    /**
     * 模型的「启动」方法
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
    }

    /**
     * 关联用户
     * @Author:<C.Jason>
     * @Date:2019-09-06T14:11:41+0800
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo(config('user_account.user_model'));
    }

    /**
     * 关联账户
     * @Author:<C.Jason>
     * @Date:2019-09-06T14:11:52+0800
     * @return [type] [description]
     */
    public function account()
    {
        return $this->belongsTo(UserAccount::class, 'user_id', 'user_id');
    }

    /**
     * 关联规则
     * @Author:<C.Jason>
     * @Date:2019-09-06T14:11:59+0800
     * @return [type] [description]
     */
    public function rule()
    {
        return $this->belongsTo(UserAccountRule::class)->withDefault();
    }

    /**
     * Notes: 账户类型
     * @Author: <C.Jason>
     * @Date: 2019/10/11 11:35 上午
     * @return string
     */
    protected function getTypeTextAttribute()
    {
        $types = config('user_account.account_type');
        return $types[$this->type] ?: '未定义账户';
    }
}
