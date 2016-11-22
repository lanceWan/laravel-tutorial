<?php
namespace App\Models;
use Zizaco\Entrust\EntrustPermission;
use App\Traits\ActionButtonTrait;
class Permission extends EntrustPermission
{
  use ActionButtonTrait;
  protected $fillable = ['name','display_name','description'];
}
